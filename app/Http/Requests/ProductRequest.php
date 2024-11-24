<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;

class ProductRequest extends FormRequest
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
                'nome' => 'required|string|max:255',
                'preco' => 'required|numeric|min:0',
                'quantidade' => 'required|integer|min:0',
                'category_id' => 'required|exists:categories,id', 
                'supplier_id' => 'required|exists:suppliers,id', 
            ];
        
    }
}
