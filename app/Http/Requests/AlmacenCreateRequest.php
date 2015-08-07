<?php

namespace AppStitch\Http\Requests;

use AppStitch\Http\Requests\Request;

class AlmacenCreateRequest extends Request
{
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
    /*
     *  Metodo para solicitar campos en el formulario si no se cumplen se devuelve
     *  la pagina actual.
     */
    public function rules()
    {
        return [
            //unique = unico en la tabla
            'id' => 'required|unique:almacens',
            'nomProd' => 'required',
            'uniProd' => 'required',
            'precioProd' => 'required',
            'ivaProd' => 'required'
        ];
    }
}
