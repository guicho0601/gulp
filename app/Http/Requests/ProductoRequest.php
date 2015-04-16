<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoRequest extends Request {

    public static $reglas = [
        'nombre' => 'required',
        'precio' => 'required'
    ];

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return static::$reglas;
	}

}
