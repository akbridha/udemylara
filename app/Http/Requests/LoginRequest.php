<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

                'name' => ['required','alpha', 'min:6', 'max:49'], // untuk mengecek apakah nama alphabet minimal 6 maksimal 49
                'email' => ['required', 'email'],
                'password' => ['required']
            ];
    }

    public function messages()
    {
        return[

            // pesan validasi CUstom

            'name.required' => 'Nama pengguna Wajib diisi',
            'name.alpha' => 'Nama pengguna hanya berisi Huruf',
            'email.email' => 'Berikan Format Email yang Valid'



        ];
    }
}
