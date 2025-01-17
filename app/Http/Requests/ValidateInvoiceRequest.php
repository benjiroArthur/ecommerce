<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateInvoiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        $this->route('invoice');

        return [

            'group' => 'required|max:50',
            'gid' => 'required|max:50',
            'name' => 'required|max:50',
            'addr_id' => 'required|max:50',
            'rin' => 'required|max:50',
            'rfn' => 'required|max:50',
            'lang' => 'required|max:50',
            'phon' => 'required|max:50',
        ];
    }
}
