<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct(public AuthService $authService)
    {
    }

    /**
     * authenticate user
     */
    public function authenticate(Request $request)
    {
        $response = $this->authService->authenticate($request->all());

        if (!$response) {
            return view('user.login')->withErrors('Invalid username or password');
        }

        return redirect('profile');
    }

    /**
     * get user profile
     */
    public function userProfile(Request $request)
    {
        $loginUser = $this->authService->me();
        return view('user.profile', compact('loginUser'));
    }

    /**
     * logout
     */
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
