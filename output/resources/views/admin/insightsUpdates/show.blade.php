@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.insightsUpdate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.insights-updates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.insightsUpdate.fields.id') }}
                        </th>
                        <td>
                            {{ $insightsUpdate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.insightsUpdate.fields.title') }}
                        </th>
                        <td>
                            {{ $insightsUpdate->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.insightsUpdate.fields.description') }}
                        </th>
                        <td>
                            {!! $insightsUpdate->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.insightsUpdate.fields.image') }}
                        </th>
                        <td>
                            @if($insightsUpdate->image)
                                <a href="{{ $insightsUpdate->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $insightsUpdate->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.insights-updates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection