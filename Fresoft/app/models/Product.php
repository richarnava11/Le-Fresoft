<?php

class Product extends \Eloquent {
	protected $fillable = ['nombre', 'precio', 'existencia'];

	/**
	* One Product has Many User
	*/

	public function users()
	{
		return $this->hasMany('User');
	}

	/**
	* One Product has Many Entrance
	*/

	public function entrances()
	{
		return $this->hasMany('Entrance');
	}

	/**
	* One Product has Many Exit
	*/

	public function exits()
	{
		return $this->hasMany('Exit');
	}

	/**
	* One Product has Many Detail
	*/

	public function details()
	{
		return $this->hasMany('Detail');
	}
}