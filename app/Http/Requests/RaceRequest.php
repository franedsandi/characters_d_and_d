<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RaceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|min:1|max:50",
            "description" => "required|min:1|max:65.000",
            "mod_for" => "required|min:-3|max:3",
            "mod_des" => "required|min:-3|max:3",
            "mod_cos" => "required|min:-3|max:3",
            "mod_int" => "required|min:-3|max:3",
            "mod_sag" => "required|min:-3|max:3",
            "mod_car" => "required|min:-3|max:3",
        ];

    }

    public function messages(){
    return [
        'name.required' => 'The name field is required.',
        'name.min' => 'The name must be at least :min character(s).',
        'name.max' => 'The name may not be greater than :max characters.',

        'description.required' => 'The description field is required.',
        'description.min' => 'The description must be at least :min character(s).',
        'description.max' => 'The description may not be greater than :max characters.',

        'mod_for.required' => 'The mod_for field is required.',
        'mod_for.min' => 'The mod_for must be at least :min.',
        'mod_for.max' => 'The mod_for may not be greater than :max.',

        'mod_des.required' => 'The mod_des field is required.',
        'mod_des.min' => 'The mod_des must be at least :min.',
        'mod_des.max' => 'The mod_des may not be greater than :max.',

        'mod_cos.required' => 'The mod_cos field is required.',
        'mod_cos.min' => 'The mod_cos must be at least :min.',
        'mod_cos.max' => 'The mod_cos may not be greater than :max.',

        'mod_int.required' => 'The mod_int field is required.',
        'mod_int.min' => 'The mod_int must be at least :min.',
        'mod_int.max' => 'The mod_int may not be greater than :max.',
    ];

    }

}
