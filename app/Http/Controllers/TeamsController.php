<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function __construct()
    {
        $this->middleware('team', ['except' => ['create', 'store']]);
        $this->middleware('noteam', ['only' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $team = new Team();

        if ($team->save()) {
            \Auth::user()->team_id = $team->id;
            \Auth::user()->save();
        }

        return redirect()->action('TeamsController@show');
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show()
    {
        $team = \Auth::user()->team()->with('members')->first();

        return view('teams.show', compact('team'));
    }

    /**
     * Application page
     *
     * @return \Illuminate\View\View
     */
    public function apply()
    {
        $team = \Auth::user()->team()->with('members')->first();

        return view('teams.apply', compact('team'));
    }

    /**
     * Save application
     *
     * @return $this
     */
    public function submitApplication()
    {
        $team = \Auth::user()->team()->first();
        $team->project = \Request::get('project');

        if($team->save()) {
            return redirect()
                ->action('TeamsController@apply')
                ->withMessage("Your team's application has been submitted!");
        }
        else {
            return redirect()
                ->action('TeamsController@apply')
                ->withErrors([
                    'save_fail' => 'We are currently unable to save your application at this time.'
                ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Allow user to leave team
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function leave()
    {
        $user = \Auth::user()->with(['team', 'team.members'])->first();
        $team_id = $user->team->id;

        // Remove user's team
        $user->team_id = null;
        $user->save();
        \Log::debug("User removed from team {$team_id}");

        // Clean up team if no more users
        if ((count($user->team->members) - 1) == 0) {
            Team::destroy($team_id);
            \Log::info("Team {$team_id} deleted.");
        }

        return redirect('/');
    }

}
