<?php

namespace App\Http\Controllers;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    public function destroy($mediaId)
    {
        \DB::transaction(function () use ($mediaId) {
            $media = Media::find($mediaId);
            $media->delete();
        });
        return back()->with('message', 'Image deleted');
    }
}
