<?php

class DetailsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /details
	 *
	 * @return Response
	 */
	public function index()
	{
		$details = Detail::all();
		$this->layout->content = view::make('details.index', compact('details'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /details/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = view::make('details.create', compact('details'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /details
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$input['exit_id']= $details->id;
		$input['product_id']= 1;
		Detail::create( $input );

		return Redirect::route('details.show',
			$details->id)->with('Producto guardado.');
	}

	/**
	 * Display the specified resource.
	 * GET /details/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = view::make('details.show', compact('details'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /details/{id}/edit
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
	 * PUT /details/{id}
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
	 * DELETE /details/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}