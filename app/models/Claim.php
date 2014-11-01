<?php

class Claim extends Eloquent {

	/**
	 * Fillable attributes
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'phone', 'email'];

	/**
	 * Fillable attributes
	 *
	 * @var array
	 */
	protected $guarded = ['id'];


	public static $rules = [
		'name'  => 'required',
		'phone' => 'required',
		'email' => 'required|email'
	];

	public static $messages = [
		'required'  => 'Поле обязательно для заполнения',
		'email' => 'Поле содержит некорректный адрес email',
	];
}
