<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailFormRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true; // писать могут все(неавторизированные в т.ч.)
    }


    public function rules(): array
    {
        return [
            "email" => ["required",  "email" , "min:5"],
            "text" => ["required", "min:5"],
        ];
    }
}
