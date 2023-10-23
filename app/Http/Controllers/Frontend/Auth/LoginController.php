<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Cache;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Contracts\Provider;
use Socialite;
use Log;
use Session;

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

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */

	protected $redirectTo = '/';

	protected $redirectAfterLogout = '/';

	protected $maxAttempts=6;
	protected $decayMinutes=2;


    public function __construct()
	{
		$this->middleware('guest:frontend')->except('logout');
	}

    public function showLoginForm()
	{
		session(['link' => url()->previous()]);
		return view('frontend.pages.auth.login');
	}
	// override field login
	public function username()
	{
		$login = request()->input('username');
		$field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		request()->merge([$field => $login]);
		return $field;
	}
	protected function validateLogin(Request $request)
	{
		$this->validate($request, [
			'username' => 'required|string',
			'password' => 'required|string',
		], [
			"username.required" => "Bạn chưa nhập tài khoản",
			"password.required" => "Bạn chưa nhập mật khẩu",
		]);
	}
	protected function attemptLogin(Request $request)
	{
		$user = User::where($this->username(), $request->username)
			->where('status',1)
			->where('account_type',2)
			->first();
		if($user && \Hash::check($request->password,$user->password)){
			Cache::put('last_login', Carbon::now(), 1440);
            ActivityLog::create([
                'user_id'=> $user->id,
				'prefix' => 'frontend',
                'method'=> 'LOGIN',
                'url'=> \Request::fullUrl(),
                'description'=> 'Đã đăng nhập frontend thành công',
                'ip_address'=>$request->getClientIp(),
                'user_agent'=>isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'No User Agent'
            ]);

			return $this->guard()->attempt(
				$this->credentials($request), $request->filled('remember')
			);
		}
		return false;
	}
	protected function authenticated(Request $request, $user)
    {
        return redirect(session('link'));
    }
	protected function guard()
	{
		return Auth::guard('frontend');
	}
	public function logout(Request $request)
	{
        ActivityLog::create([
            'user_id'=> Auth::guard('frontend')->user()->username,
			'prefix' => 'frontend',
            'method'=> 'LOGIN',
            'url'=> \Request::fullUrl(),
            'content'=> 'Đã đăng xuất frontend thành công',
            'ip_address'=>$request->getClientIp(),
            'user_agent'=>isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'No User Agent'
        ]);
        $this->guard('frontend')->logout();
		return $this->loggedOut($request) ?: redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
	}





}
