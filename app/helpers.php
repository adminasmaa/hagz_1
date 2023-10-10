<?php

use App\Models\Category;
use App\Models\Country;
use App\Models\Setting;
use Intervention\Image\Facades\Image;

function UploadImage($path, $image, $model, $request)
{

    // $img = $request->file('profile_image');
    // $image = $request->profile_image->extension();
    // $imageName = uniqid() . '.' . $image;
    // $image_resize = Image::make($img->getRealPath());
    // $image_resize->resize(636,852);
    // $path = 'uploads/' . $imageName;
    // $image_resize->save($path);
    // $imageUri = 'uploads/' . $imageName;
    // $path = storage_path() . '/app/public/uploads/users/' . Hashids::encode($User->id) . '/' . $file_temp_name;
    // $img = Image::make($file)->fit(1024);
    // $img->save($path);

    // $image = Image::make($filename);
    // $image->resize(250,125, function($constraint){
    //     $constraint->aspectRatio();
    // })->save($filename);

    $thumbnail = $request;
    $destinationPath = $path;
    $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
    $thumbnail->move($destinationPath, $filename);
    // $thumbnail->resize(1080, 1080);
    // $thumbnail = Image::make(public_path() . '/'.$path.'/' . $filename);
    // $thumbnail->resize(1080,1080);
    $thumbnail = Image::make(public_path() . '/'.$path.'/' . $filename);
//    $thumbnail->insert(public_path('/images/logo.png'), 'bottom-left', -10, -5)->save(public_path($path.'/' . $filename));
    $model->$image = $filename;
    $model->save();
}




?>
