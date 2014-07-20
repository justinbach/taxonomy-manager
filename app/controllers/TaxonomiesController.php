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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /taxonomies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
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
		//
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
		//
	}

}