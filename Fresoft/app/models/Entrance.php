<?php

class Entrance extends \Eloquent {
	protected $fillable = ['entradakg', 'product_id', 'user_id'];

	/**
	* One Entrance belongs to one Product 
	*/

	public function products()
	{
		return $this->belongsTo('Product');
	}

	/**
	* One Entrance belongs to one User 
	*/

	public function users()
	{
		return $this->belongsTo('User');
	}

	/**
	* One Entrance has Many Exit
	*/

	public function exits()
	{
		return $this->hasMany('Exit');
	}

	/**
	* One Entrance has Many Detail
	*/

	public function details()
	{
		return $this->hasMany('Detail');
	}
}