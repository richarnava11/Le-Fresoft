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
		$productos = Product::lists('nombre', 'id');
		$this->layout->content = view::make('entrances.create', compact('productos'));
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
		$input['user_id']= Auth::user()->id;
		Entrance::create( $input );

		return Redirect::route('entrances.index')->with('Producto guardado.');
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
		$entrance = Entrance::find($id);
		$productos = Product::lists('nombre', 'id');
		$this->layout->content = View::make('entrances.edit', compact('entrance','productos'));
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
		$input = Input::all();
		$entrance = Product::find($id);
		#$entrance->nombre = $input['nombre'];
		$entrance->entradakg = $input['entradakg'];
		$entrance->save();
		return Redirect::to('entrances');
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
		$entrance = Entrance::find($id);
		$entrance->delete();
		return Redirect::to('entrances');
	}

}