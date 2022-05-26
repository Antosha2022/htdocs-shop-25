<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
          'name'=>'required',
          'email'=>'required|email',
          'subject'=>'required|min:2|max:50',
          'message'=>'required|max:500'
        ];
    }

    public function messages (){
      return [
        'name.required'=>'Треба вказати ім`я',
        'email.required'=>'Треба вказати електрону пошту',
        'email.email'=>'То не дуже схоже на email',
        'subject.required'=>'Напишіть, будь ласка тему звернення',
        'message.required'=>'Поле повідомлення є обов`язковим'
      ];
    }
}
