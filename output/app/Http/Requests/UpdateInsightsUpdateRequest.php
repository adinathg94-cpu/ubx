<?php

namespace App\Http\Requests;

use App\Models\InsightsUpdate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInsightsUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('insights_update_edit');
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
