<?php

/**
 * Class UserController
 *
 * Controller for user management.
 */

class UserController extends BaseController
{

    public function showSignup()
    {
        return View::make('signup');
    }

    public function doSignup()
    {
        $rules = [
            'name'              => 'required',
            'email'             => 'required|email|unique:users',
            'password'          => 'required|alphaNum|confirmed|min:3',
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::to('signup')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
    }

    public function showLogin()
    {
        // show the form
        return View::make('login');
    }

    public function doLogin()
    {
        // validate login information based on rules
        $rules = [
            'email'     => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails())
        {
            return Redirect::to('login')
                ->withErrors($validator)
                ->WithInput(Input::except('password'));
        }
        else
        {
            $userdata = [
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
            ];

            // attempt login
            if (Auth::attempt($userdata))
            {
                return Redirect::to('/');
            }
            else
            {
                return Redirect::to('login')
                    ->withInput(Input::except('password'))
                    ->withFlashError('Username or password incorrect.');
            }
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

}