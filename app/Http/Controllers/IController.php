<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use DB;
use App\Image;

class IController extends Controller
{
    //





    public function index(){


    }


    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
    }

    public function getUpload()
    {
        return view('pages.upload');
    }

    public function getUpload3()
    {
        return view('pages.upload3');
    }

    public function postUpload2(Request $request){
         // $photo = Request::input();
         // $response = $this->image->upload($photo);
         // return $response;
         //$file = $request->file('file');

   
    }

    public function showUploadFile(Request $request){

        
        $photo = $request->file('file');
        //Move Uploaded File
      $destinationPath = 'uploads';
      $response = $photo->move($destinationPath,$photo->getClientOriginalName());

      DB::insert('insert into campaign_images (original_name) values (?)', [$response]);


      //save image to database
      // resize image
    // $big_image = Image::make(Input::file('file')->getRealPath())
    //         ->resize(870, null, true, false);

    // save image to database
    // $images->original_name = $save;
    // $image->filename = $save;
    //  $images->save();


    }


    public function postUpload()
    {
        
         $photo = Input::all();
        $response = $this->image->upload($photo);
        return $response;
    }

    public function deleteUpload()
    {

        $filename = Input::get('id');

        if(!$filename)
        {
            return 0;
        }

        $response = $this->image->delete( $filename );

        return $response;
    }

    /**
     * Part 2 - Display already uploaded images in Dropzone
     */

    public function getServerImagesPage()
    {
        return view('pages.upload-2');
    }

    public function getServerImages()
    {
        $images = Image::get(['original_name', 'filename']);

        $imageAnswer = [];

        foreach ($images as $image) {
            $imageAnswer[] = [
                'original' => $image->original_name,
                'server' => $image->filename,
                'size' => File::size(public_path('images/full_size/' . $image->filename))
            ];
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }






}
