@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($campaigns))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Campaign section </h2>
                </div>

                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.campaign_section.create') }}"> Add New</a>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Campaign Name</th>
                        <th width="40%">Campaign Picture</th>
                        <th width="15%">Campaign Description</th>
                        
                        <th>Action</th>
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($campaigns as $campaign)
                        <tr>
                            <td class="table-text">
                                <div>{{$campaign->campaign_name}}</div>
                            </td>
                            
                            

                            <td class="table-text">
                                <div><img height="50" src="{{asset("images/".$campaign->campaign_featured_picture)}}" alt=""></div>
                            </td>
                                <td class="table-text">
                                <div>{{$campaign->campaign_description}}</div>
                            </td>
                            

                            <td>
                            {{--  <a href="{{ route('posts.edit', $post->id) }}" class="label label-warning">Edit</a>  --}}
                            <a href="{{route('admin.campaign_section.edit', $campaign->id) }}" class="label label-info">Edit</a>
                            <a href="{{ route('admin.campaign_section.delete', $campaign->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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