@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.worksGallery.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.works-galleries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.worksGallery.fields.id') }}
                        </th>
                        <td>
                            {{ $worksGallery->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worksGallery.fields.image') }}
                        </th>
                        <td>
                            @if($worksGallery->image)
                                <a href="{{ $worksGallery->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $worksGallery->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worksGallery.fields.title') }}
                        </th>
                        <td>
                            {{ $worksGallery->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worksGallery.fields.sub_title') }}
                        </th>
                        <td>
                            {{ $worksGallery->sub_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worksGallery.fields.tag') }}
                        </th>
                        <td>
                            {{ App\Models\WorksGallery::TAG_SELECT[$worksGallery->tag] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.works-galleries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection