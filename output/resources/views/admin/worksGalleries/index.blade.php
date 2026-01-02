@extends('layouts.admin')
@section('content')
@can('works_gallery_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.works-galleries.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.worksGallery.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.worksGallery.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-WorksGallery">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.worksGallery.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.worksGallery.fields.image') }}
                        </th>
                        <th>
                            {{ trans('cruds.worksGallery.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.worksGallery.fields.sub_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.worksGallery.fields.tag') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($worksGalleries as $key => $worksGallery)
                        <tr data-entry-id="{{ $worksGallery->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $worksGallery->id ?? '' }}
                            </td>
                            <td>
                                @if($worksGallery->image)
                                    <a href="{{ $worksGallery->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $worksGallery->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $worksGallery->title ?? '' }}
                            </td>
                            <td>
                                {{ $worksGallery->sub_title ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\WorksGallery::TAG_SELECT[$worksGallery->tag] ?? '' }}
                            </td>
                            <td>
                                @can('works_gallery_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.works-galleries.show', $worksGallery->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('works_gallery_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.works-galleries.edit', $worksGallery->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('works_gallery_delete')
                                    <form action="{{ route('admin.works-galleries.destroy', $worksGallery->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('works_gallery_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.works-galleries.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-WorksGallery:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection