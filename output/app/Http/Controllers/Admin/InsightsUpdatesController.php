<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyInsightsUpdateRequest;
use App\Http\Requests\StoreInsightsUpdateRequest;
use App\Http\Requests\UpdateInsightsUpdateRequest;
use App\Models\InsightsUpdate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class InsightsUpdatesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('insights_update_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $insightsUpdates = InsightsUpdate::with(['media'])->get();

        return view('admin.insightsUpdates.index', compact('insightsUpdates'));
    }

    public function create()
    {
        abort_if(Gate::denies('insights_update_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.insightsUpdates.create');
    }

    public function store(StoreInsightsUpdateRequest $request)
    {
        $insightsUpdate = InsightsUpdate::create($request->all());

        if ($request->input('image', false)) {
            $insightsUpdate->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $insightsUpdate->id]);
        }

        return redirect()->route('admin.insights-updates.index');
    }

    public function edit(InsightsUpdate $insightsUpdate)
    {
        abort_if(Gate::denies('insights_update_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.insightsUpdates.edit', compact('insightsUpdate'));
    }

    public function update(UpdateInsightsUpdateRequest $request, InsightsUpdate $insightsUpdate)
    {
        $insightsUpdate->update($request->all());

        if ($request->input('image', false)) {
            if (! $insightsUpdate->image || $request->input('image') !== $insightsUpdate->image->file_name) {
                if ($insightsUpdate->image) {
                    $insightsUpdate->image->delete();
                }
                $insightsUpdate->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($insightsUpdate->image) {
            $insightsUpdate->image->delete();
        }

        return redirect()->route('admin.insights-updates.index');
    }

    public function show(InsightsUpdate $insightsUpdate)
    {
        abort_if(Gate::denies('insights_update_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.insightsUpdates.show', compact('insightsUpdate'));
    }

    public function destroy(InsightsUpdate $insightsUpdate)
    {
        abort_if(Gate::denies('insights_update_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $insightsUpdate->delete();

        return back();
    }

    public function massDestroy(MassDestroyInsightsUpdateRequest $request)
    {
        $insightsUpdates = InsightsUpdate::find(request('ids'));

        foreach ($insightsUpdates as $insightsUpdate) {
            $insightsUpdate->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('insights_update_create') && Gate::denies('insights_update_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new InsightsUpdate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
