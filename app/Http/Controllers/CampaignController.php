<?php

namespace App\Http\Controllers;
use App\Campaign;
use Session;

use Illuminate\Http\Request;

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


    //store photos

    // public function store(Request $request){
        

    //         //load form view
    //         return view('admin.campaign_section.create');
        
    //             $file = $request->file('campaign_featured_picture');
        
        
    //             $name = time() . $file->getClientOriginalName();
        
    //             $file->move('images', $name);
        
        
        
    //             Campaign::create(['file'=>$name]);
        
        
        
    //         }






}
