<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "name" => ["required", "min:5", "max:50"],
            "description" => ["required", "min:5", "max:300"],
            "image" => ["required", "min:5", "max:300"],
            "dataCreation" => ["required", "min:5", "max:100"],
            "language" => ["required", "min:3", "max:200"],
            "type_id" => ["nullable", "exists:types,id"],
            "technologies" => ["exists:technologies,id"],
        ];
    }
}
