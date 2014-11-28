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
		$this->layout->content =
		View::make('products.create', compact('products'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  Product  $product
	 * @return Response
	 */
	public function show(Product  $product)
	{
		$this->layout->content = View::make('products.show', compact('products'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @param  Product  $product
	 * @return Response
	 */
	public function edit(Product  $product)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  Product  $product
	 * @return Response
	 */
	public function update(Product  $product)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  Product  $product
	 * @return Response
	 */
	public function destroy(Product  $product)
	{
		//
	}

}