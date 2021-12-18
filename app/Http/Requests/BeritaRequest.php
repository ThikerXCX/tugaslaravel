<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'judul_berita' => ['required','max:255'],
            'slug' => ['required','unique:beritas,slug'],
            'category_id' =>['required'],
            'isi_berita' => ['required']
        ];
    }
}
