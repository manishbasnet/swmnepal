<?php

namespace App\Http\Controllers;
use App\Gallery;
use Session;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //

    public function index(){
        
                //Fetch all data from gallery  section
        
                $galleries = Gallery::all();
        
                // pass the gallery section data to the view and list the view
        
                return view('admin.gallery_section.index',compact('galleries'));
        
            }


            public function create(){
                
                        
                            //load form view
                            return view('admin.gallery_section.create');
                
                    }
                
                
                    public function insert(Request $request){
                        
                        
                        //get gallery data
                        $galleryData = $request->all();
                        
                        //insert gallery data
                        Gallery::create($galleryData);
                        
                        //store status message
                        Session::flash('success_msg', 'Gallery added successfully!');
                
                        return redirect()->route('admin.gallery_section.index');
                    }



                    public function edit($id){
                        
                                //get gallery data by id
                        
                                $gallery = Gallery::find($id);
                        
                                //load form view edit for edit
                        
                                return view('admin.gallery_section.edit',compact('gallery'));
                        
                            }
                        
                            public function update($id, Request $request){
                        
                                //get gallery section data
                        
                                $galleryData = $request->all();
                        
                              
                        
                                //update gallery section data
                        
                                Gallery::find($id)->update($galleryData);
                        
                                //store status message
                        
                                Session::flash('success_msg','Gallery section updated successfully');
                        
                                return redirect()->route('admin.gallery_section.index');
                        
                        
                        
                            }
                
                
                
                            public function delete($id){
                                
                                        //update gallery data
                                
                                        Gallery::find($id)->delete();
                                
                                        //store the status messsage
                                
                                        Session::flash('success_msg', 'Gallery Deleted Successfully');
                                        return redirect()->route('admin.gallery_section.index');
                                
                                
                                    }





}
