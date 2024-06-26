<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBrandRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'kode' => [
                'required',
                'max:100',
                Rule::unique('brands')->ignore($this->id),
            ],
            'name' => ['required', 'max:100'],
            'phone' => ['required', 'numeric'],
            'address' => ['required', 'max:100'],
        ];
    }
}
