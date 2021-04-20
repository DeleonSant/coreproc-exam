<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:products,name,'. $this->route('product.id') ?? null,
            'price' => 'required|numeric',
            'description' => 'required|string',
        ];
    }

    public function getName()
    {
        return $this->input('name');
    }

    public function getPrice()
    {
        return $this->input('price');
    }

    public function getDescription()
    {
        return $this->input('description');
    }

    public function getIsActive()
    {
        return (bool) $this->input('isActive');
    }
}
