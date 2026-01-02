<?php

namespace App\Http\Requests;

use App\Models\WorksGallery;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWorksGalleryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('works_gallery_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:works_galleries,id',
        ];
    }
}
