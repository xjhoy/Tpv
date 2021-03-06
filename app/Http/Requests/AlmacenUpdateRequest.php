<?php

namespace AppStitch\Http\Requests;

use AppStitch\Http\Requests\Request;

class AlmacenUpdateRequest extends Request
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
    public function rules()
    {
        return [
            'id' => 'required',
            'nomProd' => 'required',
            'uniProd' => 'required',
            'precioProd' => 'required',
            'ivaProd' => 'required'
        ];
    }
}
