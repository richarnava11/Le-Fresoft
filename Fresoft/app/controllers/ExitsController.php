<?php

class ExitsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /exits
	 *
	 * @return Response
	 */
	public function index()
	{
		$exits = Exitt::all();
		$this->layout->content = view::make('exits.index', compact('exits'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /exits/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = view::make('exits.create', compact('exits'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /exits
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input['user_id']= 1;
		Exitt::create( $input );

		return Redirect::route('exits.show',
			$exits->id)->with('Producto guardado.');
	}

	/**
	 * Display the specified resource.
	 * GET /exits/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = view::make('exits.show', compact('exits'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /exits/{id}/edit
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
	 * PUT /exits/{id}
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
	 * DELETE /exits/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}