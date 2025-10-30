<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
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
            'nim' => 'required|string|max:10|unique:mahasiswas,nim|regex:/^[0-9]+$/',
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'angkatan' => 'required|numeric|digits:4',
            'email' => 'required|email|max:255|unique:mahasiswas,email',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'nim.required' => 'NIM wajib diisi.',
            'nim.unique' => 'NIM sudah digunakan.',
            'nim.regex' => 'NIM hanya boleh berisi angka.',
            'nim.max' => 'NIM maksimal 10 karakter.',
            'nama.required' => 'Nama wajib diisi.',
            'nama.max' => 'Nama maksimal 255 karakter.',
            'jurusan.required' => 'Jurusan wajib diisi.',
            'jurusan.max' => 'Jurusan maksimal 100 karakter.',
            'angkatan.required' => 'Angkatan wajib diisi.',
            'angkatan.numeric' => 'Angkatan harus berupa angka.',
            'angkatan.digits' => 'Angkatan harus 4 digit.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'email.max' => 'Email maksimal 255 karakter.',
        ];
    }
}
