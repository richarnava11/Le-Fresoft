<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();
		$this->layout->content = View::make('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('products.create', compact('products'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		$product = new Product;
		$product->nombre = Input::get('nombre');
		$product->precio = Input::get('precio');
		$product->save();
		return Redirect::to('products');
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int   $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = View::make('products.show', compact('products'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @return Response
	 */
	public function edit()
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @return Response
	 */
	public function update()
	{
		//	
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @return Response
	 */
	public function destroy()
	{
		//
	}

}