<?php

namespace App\Traits;

use Buglinjo\LaravelWebp\Webp;
use Illuminate\Support\Facades\File;

Trait  PhotoTrait
{
    function saveImage($photo,$folder,$type = 'image'){

        // to save photos
        if ($type == 'image'){
            $webp = Webp::make($photo);
            $file_name = $folder.'/'.rand('1','9999').time().'.webp';
            File::ensureDirectoryExists($folder);
            $webp->save(public_path($file_name));
        }

        // to save other files
        else{
            $file_extension = $photo -> getClientOriginalExtension();
            $file_name =  $folder.'/'.rand('1','9999').time().'.'.$file_extension;
            $photo -> move($folder,$file_name);
        }
        return $file_name;
    }
}
