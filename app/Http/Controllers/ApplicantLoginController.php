<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use Auth;


class ApplicantLoginController extends Controller
{
    public function showLogin()
    {
        return view('applicant.login');
    }

    public function doLogin()
    {
        // $rules = array(
        //     'email'    => 'required|email', // make sure the email is an actual email
        //     'password' => 'required' // password can only be alphanumeric and has to be greater than 3 characters
        // );

        // $validator = Validator::make(Input::all(), $rules);
        // if ($validator->fails()) {
        //     return Redirect::to('applicant/login')
        //         ->withErrors($validator) // send back all errors to the login form
        //         ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        // } else {
        
        //     // create our user data for the authentication
        //     $applicantdata = array(
        //         'email'     => Input::get('email'),
        //         'password'  => Input::get('password')
        //     );
        //     var_dump($applicantdata);
        
            // attempt to do the login
            if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
                echo 'SUCCESS!';
        
            } else {
                return Redirect::to('applicant/login');
        
            }
        // }
    }
}