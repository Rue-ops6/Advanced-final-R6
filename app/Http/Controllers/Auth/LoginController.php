<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    /**
     * Where to redirect users after login.
     *
     * @var string
     *
     *  Create a new controller instance.
    //  * @return void
     * */
    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/

        /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'UserName' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /*
     * sign in via username or email if the user is an admin not a guest
     * it's taking email as username from     use AuthenticatesUsers;  as we can't motivie in vendor
     * @return array
     */
    public function credentials(Request $request)
    {
        $login = $request->input('UserName');
        // Determine if the input is an email address or a username
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'UserName';

        if (!$login) {
            return redirect()->back()->withErrors(['login' => 'Please enter a valid email or username']);
        }

        if (!filter_var($login, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9]+$/', $login)) {
            return redirect()->back()->withErrors(['login' => 'Please enter a valid email or username']);
        }

        return [ // Return the credentials array
            $field => $login,
            'password' => $request->input('password'),
            //'email_verified_at' => ['!=', 'null'], // Ensure the role is not 'guest'
        ];
    }
    /*} else {
    // Assume the input is a username
    return [
    'username' => $request->input('email_or_username'),
    'password' => $request->input('password'),
    'email_verified_at' => ['!=', 'null'], // Ensure the role is not 'guest'
    ];
    }*/

    //or remove it
        /**
     * Get the username field used for authentication.
     *
     * @return string
     */
    public function username()
    {
        return 'UserName';
    }

        /** or remove it     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
*/
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
