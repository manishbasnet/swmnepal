<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\About;

class AboutController extends Controller
{
    //

    public function index(){

        // fetch all data from about section model
        $posts= About::all();
        
        

        //pass about section data to view and load list view
        return view('admin.about_section.index',compact('posts'));

    }


    public function create(){


    }


    public function edit($id){

        //get post data by id
        $post = About::find($id);
        
        
        //load form view
        return view('admin.about_section.edit', compact('post'));

    }


    public function update($id, Request $request){
        
        //get about section data
        $aboutData = $request->all();
        
        //update about section data
        About::find($id)->update($aboutData);
        
        //store status message
        Session::flash('success_msg', 'About section updated successfully!');

        return redirect()->route('admin.about_section.index');
    }








}
