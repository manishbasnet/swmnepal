<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    //

    public function index(){

        // fetch all data from about section model
        $about= About::all();
        

        //pass about section data to view and load list view
        return view('admin.about_section.index',compact('about'));

    }


    public function create(){


    }


    public function edit(){



    }








}
