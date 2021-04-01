<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function getPageDownloadVideo()
    {
       return view('tools.download_video.index');
    }
    public function getPageCropImage(){
        return view('tools.crop_image.index');
    }
    function actionCropImage(Request $request)
    {
        $data = $request->image;


        // $image_array_1 = explode(";", $data);

        // $image_array_2 = explode(",", $image_array_1[1]);


        // $data = base64_decode($image_array_2[1]);

        // $image_name = 'uploads/' . time() . '.png';

        // file_put_contents($image_name, $data);

        echo $data;
    }
}
