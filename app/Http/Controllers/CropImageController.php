<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CropImageController extends Controller
{
    function index(){
    	// return view('crop_image');
    	return view('upload_image.upload_image2');
    }
    function action_test(Request $request)
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
