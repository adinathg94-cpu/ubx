<?php

namespace App\Http\Requests;

use App\Models\InsightsUpdate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyInsightsUpdateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('insights_update_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:insights_updates,id',
        ];
    }
}
