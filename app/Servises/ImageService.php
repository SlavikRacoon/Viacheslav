<?php

namespace App\Servises;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class ImageService
{
    public function create(string $url, Model $model):Image
    {
        $image = new Image();
        $image->path = $url;
        $image->imageable_id = $model->id;
        $image->imageable_type = $model::class;
        $image->save();

        return $image;
    }
}
