<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentsRequest extends FormRequest
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
            
            'adm_no' => 'max:2147483647|required|numeric',
            'student_name' => 'required',
            'parents_name' => 'required',
            'parents_email' => 'email',
            'parents_phone_no' => 'max:2147483647|required|numeric',
            'class_name_id' => 'required',
        ];
    }
}
