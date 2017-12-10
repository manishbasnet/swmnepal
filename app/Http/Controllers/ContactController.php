<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;

class ContactController extends Controller
{
    //


    public function index(){
        
                //Fetch all data from contact  section
        
                $contacts = Contact::all();
        
                // pass the contact section data to the view and list the view
        
                return view('admin.contact_section.index',compact('contacts'));
        
            }


            public function edit($id){
                
                        //get contact data by id
                
                        $contact = Contact::find($id);
                
                        //load form view edit for edit
                
                        return view('admin.contact_section.edit',compact('contact'));
                
                    }
                
                    public function update($id, Request $request){
                
                        //get contact section data
                
                        $contactData = $request->all();
                
                      
                
                        //update contact section data
                
                        Contact::find($id)->update($contactData);
                
                        //store status message
                
                        Session::flash('success_msg','contact section updated successfully');
                
                        return redirect()->route('admin.contact_section.index');
                
                
                
                    }
        

                    public function delete($id){
                        
                                //update contact data
                        
                                Contact::find($id)->delete();
                        
                                //store the status messsage
                        
                                Session::flash('success_msg', 'contact Deleted Successfully');
                                return redirect()->route('admin.contact_section.index');
                        
                        
                            }



                            public function create(){
                                
                                        
                                            //load form view
                                            return view('admin.contact_section.create');
                                
                                    }
                                
                                
                                    public function insert(Request $request){
                                        
                                        
                                        //get contact data
                                        $contactData = $request->all();
                                        
                                        //insert contact data
                                        Contact::create($contactData);
                                        
                                        //store status message
                                        Session::flash('success_msg', 'Contact added successfully!');
                                
                                        return redirect()->route('admin.contact_section.index');
                                    }
                




}
