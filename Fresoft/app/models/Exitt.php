<?php

class Exitt extends \Eloquent {
	protected $fillable = ['importe', 'pesototal', 'user_id'];

	/**
	* One Exit belongs to one User 
	*/

	public function users()
	{
		return $this->belongsTo('User');
	}

	/**
	* One Exit has Many Product
	*/

	public function products()
	{
		return $this->hasMany('Product');
	}

	/**
	* One Exit has Many Entrance
	*/

	public function entrances()
	{
		return $this->hasMany('Entrance');
	}

	/**
	* One Exit has Many Detail
	*/

	public function details()
	{
		return $this->hasMany('Detail');
	}

}