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
	public function create(Product $product)
	{
		$this->layout->content =
		View::make('products.create', compact('product'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//almacenar el nuevo Producto
		$input = Input::all();
		$input ['user_id'] =1;//autor temporal
		Product::create( $input );

		return Redirect::route('products.index')
		->with('message', 'El nuevo Producto se ha almacenado ');
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  Product  $product
	 * @return Response
	 */
	public function show(Product $product)
	{
		$this->layout->content = View::make('products.show', compact('product'));
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