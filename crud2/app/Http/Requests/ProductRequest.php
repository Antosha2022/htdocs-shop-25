<?php

namespace App\Http\Requests;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
          // значення true дозволяє взаємодіяти без авторизації
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
         return [
           'short_name'=>'required'
           'bar_code'=>'required',
           'description'=>'required',
           'retail_price'=>'required',
           'retail_price'=>'numeric',
         ];
     }

     public function messages (){
       return [
         'short_name.required'=>'Треба вказати назву'
         'bar_code.required'=>'Треба вказати штрих-код',
         'description.required'=>'Внесіть інформацію для споживача',
         'retail_price.required'=>'Вкажіть ціну',
         'retail_price.numeric'=>'Вкажіть ціну в грн',
       ];
     }
}