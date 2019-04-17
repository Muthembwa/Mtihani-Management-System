<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSchoolsRequest extends FormRequest
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
            
            'school_name' => 'required',
            'county' => 'required',
            'subcounty' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->route('user'),
            'password' => 'required',
        ];
    }
}