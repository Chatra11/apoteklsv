<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Kode_Obat'=>'required',
            'Nama_obat'=>'required',
            'Supplier_id'=>'required',
            'Nama_satuan'=>'required',
            'Nama_Jenis'=>'required',
            'Stok'=>'required',
            'Harga'=>'required|numeric'
        ];
    }
}
