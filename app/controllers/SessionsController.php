<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
        if (Auth::check()) return Redirect::home();

        return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
        if (Auth::attempt(Input::only('email', 'password')))
        {
            return Redirect::home();
        }
        else
        {
            return Redirect::back()
                ->withInput()
                ->withFlashError('Username or password incorrect.');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @return Response
	 */
	public function destroy()
	{
        Auth::logout();
        return Redirect::home();
	}

}