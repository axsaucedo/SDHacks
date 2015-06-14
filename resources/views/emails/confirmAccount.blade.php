<h1>Please Confirm Your Account</h1>

<p>Hi there hacker!</p>

<p>Please click the link below to confirm your account.</p>
<a href='{{{ action('Auth\AuthController@getConfirm', $code) }}}'>
    {{{ action('Auth\AuthController@getConfirm', $code) }}}
</a>

<p>Sincerely,</p>
<p>The SD Hacks Team</p>