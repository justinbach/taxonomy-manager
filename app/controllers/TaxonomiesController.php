<?php

class TaxonomiesController extends \BaseController {

    /**
     * Taxonomy instance will automatically be generated for us.
     *
     * @param Taxonomy $taxonomy
     */
    public function __construct(Taxonomy $taxonomy)
    {
        $this->taxonomy = $taxonomy;
    }

	/**
	 * Display a listing of the resource.
	 * GET /taxonomies
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('taxonomies.index', ['taxonomies' => $this->taxonomy->all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /taxonomies/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('taxonomies.create', ['taxonomy' => $this->taxonomy]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /taxonomies
	 *
	 * @return Response
	 */
	public function store()
	{
        if (!$this->taxonomy->save())
        {
           return Redirect::back()
               ->withErrors($this->taxonomy->errors())
               ->withInput();
        }
        else
        {
            Session::flash('message', 'New taxonomy created successfully.');
            Session::flash('alert-class', 'alert-success');
            return Redirect::action('TaxonomiesController@index');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /taxonomies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /taxonomies/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $this->taxonomy = Taxonomy::find($id);
        if ($this->taxonomy === NULL)
        {
            return Redirect::to(URL::action('TaxonomiesController@index'));
        }
        else
        {
            return View::make('taxonomies.edit', ['taxonomy' => $this->taxonomy]);
        }
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /taxonomies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $this->taxonomy = Taxonomy::find($id);
        if (!$this->taxonomy->updateUniques())
        {
            return Redirect::back()
                ->withErrors($this->taxonomy->errors())
                ->withInput();
        }
        else
        {
            Session::flash('message', 'Taxonomy updated successfully.');
            Session::flash('alert-class', 'alert-success');
            return Redirect::action('TaxonomiesController@index');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /taxonomies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->taxonomy = Taxonomy::find($id);
        if (!$this->taxonomy->delete())
        {
            Session::flash('message', 'Error deleting taxonomy.');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::back();
        }
        else
        {
            Session::flash('message', 'Taxonomy deleted successfully.');
            Session::flash('alert-class', 'alert-success');
            return Redirect::action('TaxonomiesController@index');
        }

	}

}