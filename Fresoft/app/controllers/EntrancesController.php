<?php

class EntrancesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /entrances
	 *
	 * @return Response
	 */
	public function index()
	{
		$entrances = Entrance::all();
		$this->layout->content = view::make('entrances.index', compact('entrances'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /entrances/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = view::make('entrances.create', compact('entrances'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /entrances
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input['product_id']= $entrances->id;
		$input['user_id']= 1;
		Entrance::create( $input );

		return Redirect::route('entrances.show',
			$entrances->id)->with('Producto guardado.');
	}

	/**
	 * Display the specified resource.
	 * GET /entrances/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = view::make('entrances.show', compact('entrances'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /entrances/{id}/edit
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
	 * PUT /entrances/{id}
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
	 * DELETE /entrances/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}