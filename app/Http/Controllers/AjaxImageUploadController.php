<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\UploadImageModel;
class AjaxImageUploadController extends Controller
{
	public function index(){
		// return view('upload_image.upload_image2');
	}

	function action(Request $request)
	{


	       //      //Lấy Tên files
        // echo 'Tên Files: ' . $file->getClientOriginalName();
        // echo '<br/>';

        // //Lấy Đuôi File
        // echo 'Đuôi file: ' . $file->getClientOriginalExtension();
        // echo '<br/>';

        // //Lấy đường dẫn tạm thời của file
        // echo 'Đường dẫn tạm: ' . $file->getRealPath();
        // echo '<br/>';

        // //Lấy kích cỡ của file đơn vị tính theo bytes
        // echo 'Kích cỡ file: ' . $file->getSize();
        // echo '<br/>';

        // //Lấy kiểu file
        // echo 'Kiểu files: ' . $file->getMimeType();


		$validation = Validator::make($request->all(), [
			'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
		]);
		if($validation->passes())
		{
			$image = $request->file('select_file');
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('uploads'), $new_name);

		 	$image = new UploadImageModel();
         	$image->name=$new_name;
 			$image->path = '/uploads/'.$new_name;
 			$image->save();

			// return response()->json([
			// 	'message'   => 'Image Upload Successfully',
			// 	'uploaded_image' => '<img src="http://localhost/hitech/public/uploads/'.$new_name.'" class="img-thumbnail" width="300" />',
			// 	'class_name'  => 'alert-success'
			// ]);

			$data = array(
				'message'  => 'Image Upload Successfully',
				'uploaded_image'  =>'<img src="../public/uploads/'.$new_name.'" class="img-fluid" id="cropper_image" />',
				'class_name'  => 'alert-success'
			);
		}
		else
		{
			// return response()->json([
			// 	'message'   => $validation->errors()->all(),
			// 	'uploaded_image' => '',
			// 	'class_name'  => 'alert-danger'
			// ]);

			$data = array(
				'message'  => $validation->errors()->all(),
				'uploaded_image' => '',
				'class_name'  => 'alert-danger'
			);
		}
		echo json_encode($data);
	}
}
