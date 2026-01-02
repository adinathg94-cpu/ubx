<?php

namespace App\Http\Requests;

use App\Models\InsightsUpdate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInsightsUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('insights_update_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
