<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'nis' => 'unique:students|max:8|required',
            'name' => 'max:20|required',
            'gender' => 'required',
            'class_id' => 'required'
        ];
    }

    // untuk menampilkan alert yang tadinya class_id menjadi class agar enak dilihat
    public function attributes()
    {
        return [
            'class_id' => 'class'
        ];
    }

    // :max = untuk mendefinisikan jumlah maksimal karakter
    public function messages()
    {
        return[
            'nis.required' => 'NIS wajib diisi!',
            'nis.max' => 'NIS maksimal :max!',
            'name.required' => 'Nama wajib diisi!',
            'gender.required' => 'Gender wajib diisi!',
            'class_id.required' => 'Class wajib diisi!',
        ];
    }
}
