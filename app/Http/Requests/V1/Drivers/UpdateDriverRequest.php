<?php

namespace App\Http\Requests\V1\Drivers;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDriverRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'photo'=>['required','min:0','max:10'],
            'license'=>['required','min:0','max:20'],
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
