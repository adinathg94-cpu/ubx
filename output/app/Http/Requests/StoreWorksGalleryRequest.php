<?php

namespace App\Http\Requests;

use App\Models\WorksGallery;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorksGalleryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('works_gallery_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'sub_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
