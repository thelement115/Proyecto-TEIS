<?php

namespace App\Util;

use App\Interfaces\ImageStorage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ImageLocalStorage implements ImageStorage {
    public function store($request){
        $image = $request->file('productImage');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
    }

}

