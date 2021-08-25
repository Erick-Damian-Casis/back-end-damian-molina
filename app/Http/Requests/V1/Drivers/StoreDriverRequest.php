<?php

namespace App\Http\Requests\V1\Drivers;

use Illuminate\Foundation\Http\FormRequest;

class StoreDriverRequest extends FormRequest
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
            'photo'=>['required','min:5','max:10'],
            'license'=>['required','min:10','max:20'],
        ];
    }

    public function attributes()
    {
        return [
            'photo'=>'foto del conductor',
            'license'=>'licencia de conducir',
        ];
    }
}
