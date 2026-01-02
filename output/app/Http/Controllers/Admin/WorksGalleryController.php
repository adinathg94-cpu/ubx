<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWorksGalleryRequest;
use App\Http\Requests\StoreWorksGalleryRequest;
use App\Http\Requests\UpdateWorksGalleryRequest;
use App\Models\WorksGallery;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WorksGalleryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('works_gallery_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $worksGalleries = WorksGallery::with(['media'])->get();

        return view('admin.worksGalleries.index', compact('worksGalleries'));
    }

    public function create()
    {
        abort_if(Gate::denies('works_gallery_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.worksGalleries.create');
    }

    public function store(StoreWorksGalleryRequest $request)
    {
        $worksGallery = WorksGallery::create($request->all());

        if ($request->input('image', false)) {
            $worksGallery->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $worksGallery->id]);
        }

        return redirect()->route('admin.works-galleries.index');
    }

    public function edit(WorksGallery $worksGallery)
    {
        abort_if(Gate::denies('works_gallery_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.worksGalleries.edit', compact('worksGallery'));
    }

    public function update(UpdateWorksGalleryRequest $request, WorksGallery $worksGallery)
    {
        $worksGallery->update($request->all());

        if ($request->input('image', false)) {
            if (! $worksGallery->image || $request->input('image') !== $worksGallery->image->file_name) {
                if ($worksGallery->image) {
                    $worksGallery->image->delete();
                }
                $worksGallery->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($worksGallery->image) {
            $worksGallery->image->delete();
        }

        return redirect()->route('admin.works-galleries.index');
    }

    public function show(WorksGallery $worksGallery)
    {
        abort_if(Gate::denies('works_gallery_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.worksGalleries.show', compact('worksGallery'));
    }

    public function destroy(WorksGallery $worksGallery)
    {
        abort_if(Gate::denies('works_gallery_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $worksGallery->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorksGalleryRequest $request)
    {
        $worksGalleries = WorksGallery::find(request('ids'));

        foreach ($worksGalleries as $worksGallery) {
            $worksGallery->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('works_gallery_create') && Gate::denies('works_gallery_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WorksGallery();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
