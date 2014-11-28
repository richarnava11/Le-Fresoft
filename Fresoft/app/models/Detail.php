<?php

class Detail extends \Eloquent {
	protected $fillable = ['cantidadkg', 'importe', 'exit_id', 'product_id'];

	/**
	* One Detail belongs to one Exit
	*/

	public function exits()
	{
		return $this->belongsTo('Exitt');
	} 

	/**
	* One Detail belongs to one Product
	*/

	public function products()
	{
		return $this->belongsTo('Product');
	}

	/**
	* One Detail has Many User
	*/

	public function users()
	{
		return $this->hasMany('User');
	}

	/**
	* One Detail has Many Entrance
	*/

	public function entrances()
	{
		return $this->hasMany('Entrance');
	}
}