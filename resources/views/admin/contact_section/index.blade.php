@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Contact list -->
    @if(!empty($contacts))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Contact section </h2>
                </div>

                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.contact_section.create') }}"> Add New Contact</a>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">User Name</th>
                        <th width="10%">User Email</th>
                        <th width="15%">User Message</th>
                        <th width="25%">Admin Location</th>
                        <th width="10%">Admin Phone</th>
                        <th width="15%">Admin Email</th>
                       
                        
                        <th>Action</th>
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td class="table-text">
                                <div>{{$contact['user_name']}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$contact->user_email}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$contact->user_mesage}}</div>
                            </td>

                             <td class="table-text">
                                <div>{{$contact['admin_location']}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$contact->admin_phone}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$contact->admin_email}}</div>
                            </td>
                            
                          

                            <td>
                            {{--  <a href="{{ route('posts.edit', $post->id) }}" class="label label-warning">Edit</a>  --}}
                            <a href="{{route('admin.contact_section.edit', $contact->id) }}" class="label label-info">Edit</a>
                            <a href="{{ route('admin.contact_section.delete', $contact->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                           
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection