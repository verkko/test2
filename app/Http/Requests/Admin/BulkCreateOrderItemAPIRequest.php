<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BulkCreateOrderItemAPIRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'data.*.order_id' => ['nullable', 'string'],
            'data.*.item' => ['nullable', 'string'],
            'data.*.uom' => ['nullable', 'string'],
            'data.*.qty' => ['nullable', 'string'],
            'data.*.is_active' => ['boolean'],
        ];
    }
}
