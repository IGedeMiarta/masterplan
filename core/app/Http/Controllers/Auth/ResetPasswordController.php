<?php

namespace App\Http\Controllers\Auth;

use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Frontend;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showResetForm(Request $request, $token = null)
    {

        $content    = Frontend::where('data_keys', 'reset_password.content')->first();
        $username = session('fpass_username');
        $token = session()->has('token') ? session('token') : $token;
        if (PasswordReset::where('token', $token)->where('username', $username)->count() != 1) {
            $notify[] = ['error', 'Invalid token'];
            return redirect()->route('user.password.request')->withNotify($notify);
        }
        return view('landing.reset')->with(
            ['token' => $token, 'username' => $username, 'page_title' => 'Reset Password', 'content'=>$content]
        );
    }

    public function reset(Request $request)
    {

        session()->put('fpass_username', $request->username);
        $request->validate($this->rules(), $this->validationErrorMessages());
        $reset = PasswordReset::where('token', $request->token)->orderBy('created_at', 'desc')->first();
        if (!$reset) {
            $notify[] = ['error', 'Invalid Verification Code'];
            return redirect()->route('user.login')->withNotify($notify);
        }

        $user = User::where('username', $reset->username)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        $general = GeneralSetting::first(['en', 'sn']);


        $userIpInfo = getIpInfo();
        $userBrowser = osBrowser();
        sendEmail($user, 'PASS_RESET_DONE', [
            'operating_system' => @$userBrowser['os_platform'],
            'browser' => @$userBrowser['browser'],
            'ip' => @$userIpInfo['ip'],
            'time' => @$userIpInfo['time']
        ]);


        $notify[] = ['success', 'Password Changed'];
        return redirect()->route('user.login')->withNotify($notify);
    }



    /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'token' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed|min:6',
        ];
    }

}
