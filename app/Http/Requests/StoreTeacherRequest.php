<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // return Auth::user() !== null ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|string|max:255",
            "phone" => "required|string|max:255",
            "salary" => "required",
            "email" => "required|string|max:255|unique:teachers,email",
        ];
    }

    function messages(): array{
        return [
            "name.required" => "Teacher name is required",
            "email.unique" => "Teacher Email must be unique",
        ];
    }
}
