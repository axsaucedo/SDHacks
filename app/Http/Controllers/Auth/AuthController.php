<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    protected $redirectTo = '/';

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     * @param  \Illuminate\Contracts\Auth\Registrar $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => ['getLogout', 'getConfirm', 'edit', 'update', 'redirectToGitHub', 'handleGitHubCallback']]);
    }

    /**
     * Overrided vendor method to include confirmation code
     *
     * @param Request $request
     * @return $this|\Illuminate\View\View
     */
    public function postRegister(Request $request)
    {
        $input = $request->all();
        $validator = $this->registrar->validator($input);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request,
                $validator
            );
        }

        // Generate confirmation code
        $confirmation_code = str_random(60) . $request->input('email');
        $input['confirmation_code'] = $confirmation_code;

        // Create user
        $user = $this->registrar->create($input);

        if ($user) {
            $data = array(
                'code' => $confirmation_code,
            );
            \Mail::queue(
                'emails.confirmAccount',
                $data,
                function ($message) use ($user) {
                    $message->to($user->email, 'Please activate your account');
                }
            );

            return view('auth.success');
        } else {
            \Session::flash('message', 'Your account could not be created. Please try again.');

            return redirect()->back()->withInput();
        }

    }

    /**
     * Settings page
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('auth.settings');
    }

    public function update()
    {
        \Auth::user()->update(\Request::all());
        return redirect()
            ->back()
            ->withMessage('Your settings have been saved!');
    }

    /**
     * Confirm user
     *
     * @param $code
     * @return bool
     */
    public function confirm($code) {
        $user = User::where('confirmation_code', '=', $code)->first();
        $user->confirmed = 1;
        $user->confirmation_code = '';
        if($user->save()) {
            \Auth::login($user);
        }
        return true;
    }

    /**
     * Process confirmation code
     *
     * @param $code
     * @return \Illuminate\View\View
     */
    public function getConfirm($code) {
        if($this->confirm($code)) {
            \Session::flash('message', 'Your account has been activated!' );
            return redirect($this->redirectPath());
        }

        \Session::flash('message', 'Your confirmation code is no longer active or is incorrect');
        return redirect('AuthController@getConfirm');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToGitHub()
    {
        return \Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleGitHubCallback()
    {
        $gh_user = \Socialite::driver('github')->user();

        if(\Auth::check())
        {
            $user = \Auth::user();
            $user->github_id = $gh_user->getId();
            $user->github_token = $gh_user->token;
            $user->save();
            return redirect()->back()->withMessage('Your GitHub account has been connected!');
        }

        $user = User::where('github_id', $gh_user->getId())->first();
        $name = explode(' ', $gh_user->name);

        if($user){
            \Auth::login($user);
            $user->github_token = $gh_user->token;
            $user->save();

            return redirect()->intended($this->redirectPath());
        }
        else {
            $user = User::where('email', $gh_user->getEmail())->first();

            if($user) {
                return redirect()
                    ->back()
                    ->withErrors([
                       'github' => 'You have not authorized your SD Hacks account for GitHub. Please log in to do so.'
                    ]);
            }
            else {
                return redirect()
                    ->action('Auth\AuthController@register')
                    ->withInput([
                        'email' => $gh_user->getEmail(),
                        'github' => $gh_user->url,
                        'fname' => $name[0],
                        'lname' => $name[1]
                    ]);
            }
        }
    }

}
