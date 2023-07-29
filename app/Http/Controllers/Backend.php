<?php

namespace App\Http\Controllers;

use App\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect,Response;


class Backend extends Controller
{
    /**
     * Show login page.
     *
     * @param  no
     * @return View
     */

    public function index(Request $request)
    {
        if ($request->session()->has('admin_email'))
        { 
            return Redirect::to('/dashboard');
        }
        return view('admin.login');
        
    }


    /**
     * Authorize login details.
     *
     * @param  Request  $request
     * @return Response
     */

    public function authorization(Request $request)
    {
        if ($request->session()->has('admin_email'))
        { 
            return Redirect::to('/dashboard');
        }
        
        $rules = array(
			'email'    => 'required|email',
			'password' => 'required|min:6'
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('/backend')
                ->withErrors($validator) 
                //->withInput();
                ->withInput(Input::except('password'));
            
        } else {
            
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);
            
			if (Auth::attempt($userdata)) {
                /*if (Input::get('remember_me') == 1) {
                    $cookie =  Cookie::queue('username', $email, time() + 31536000);
                } else {
                    $cookie =  Cookie::queue('username', '', time() - 100);
                }*/
                $request->session()->put('admin_email',$userdata['email']);
                $request->session()->put('current_user',Auth::user());
                return Redirect::to('/dashboard');
                
			} else {
				return Redirect::to('/backend');
			}
        }
        
    }

    /**
     * Logout to Login Page.
     *
     * @param  Request  $request
     * @return Response
     */

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return Redirect::to('/backend')->with('msg','User has been logged out successfully!');
    }

   
}
