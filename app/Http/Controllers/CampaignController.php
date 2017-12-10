<?php

namespace App\Http\Controllers;
use App\Campaign;
use Session;

use Illuminate\Http\Request;
use App\Logic\Image\ImageRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use DB;
use App\Image;

class CampaignController extends Controller
{
    //

    public function index(){

        //fetch all data from campaign section

        $campaigns = Campaign::all();
        
                //pass the campaign section data to view and load the list view
        
                return view('admin.campaign_section.index',compact('campaigns'));

    }

    // public function create(){

        
    //         //load form view
    //         return view('admin.campaign_section.create');

    // }




    // test

    public function create(Request $request){
        

            //load form view
            return view('admin.campaign_section.upload');
        
                $file = $request->file('campaign_featured_picture');
        
        
                $name = time() . $file->getClientOriginalName();
        
                $file->move('images', $name);
        
        
        
                Campaign::create(['file'=>$name]);
        
        
        
            }
    


    public function insert(Request $request){
        
        
        //get post data
        $campaignData = $request->all();
        
        //insert post data
        Campaign::create($campaignData);
        
        //store status message
        Session::flash('success_msg', 'Campaign added successfully!');

        return redirect()->route('admin.campaign_section.index');
    }


    public function edit($id){

        //get campaign data by id

        $campaign = Campaign::find($id);

        //load form view edit for edit

        return view('admin.campaign_section.edit',compact('campaign'));

    }

    public function update($id, Request $request){

        //get campaign section data

        $campaignData = $request->all();

      

        //update campaign section data

        Campaign::find($id)->update($campaignData);

        //store status message

        Session::flash('success_msg','Campaign section updated successfully');

        return redirect()->route('admin.campaign_section.index');



    }


    public function delete($id){

        //update campaign data

        Campaign::find($id)->delete();

        //store the status messsage

        Session::flash('success_msg', 'Post Deleted Successfully');
        return redirect()->route('admin.campaign_section.index');


    }







     // image upload


    protected $image;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->image = $imageRepository;
    }

    public function getUpload()
    {
        return view('admin.campaign_section.create');
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
