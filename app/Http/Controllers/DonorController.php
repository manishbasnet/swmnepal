<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;

use Session;

class DonorController extends Controller
{
    //

    public function index(){

        //Fetch all data from Donor section

        $donors = Donor::all();

        // pass the donor section data to the view and list the view

        return view('admin.donor_section.index',compact('donors'));



    }

       public function create(){

        
            //load form view
            return view('admin.donor_section.create');

    }


    public function insert(Request $request){
        
        
        //get donor data
        $donorData = $request->all();
        
        //insert donor data
        Donor::create($donorData);
        
        //store status message
        Session::flash('success_msg', 'Donor added successfully!');

        return redirect()->route('admin.donor_section.index');
    }



    public function edit($id){
        
                //get donor data by id
        
                $donor = Donor::find($id);
        
                //load form view edit for edit
        
                return view('admin.donor_section.edit',compact('donor'));
        
            }
        
            public function update($id, Request $request){
        
                //get donor section data
        
                $donorData = $request->all();
        
              
        
                //update donor section data
        
                Donor::find($id)->update($donorData);
        
                //store status message
        
                Session::flash('success_msg','Donor section updated successfully');
        
                return redirect()->route('admin.donor_section.index');
        
        
        
            }



            public function delete($id){
                
                        //update donor data
                
                        Donor::find($id)->delete();
                
                        //store the status messsage
                
                        Session::flash('success_msg', 'Donor Deleted Successfully');
                        return redirect()->route('admin.donor_section.index');
                
                
                    }


                    


}
