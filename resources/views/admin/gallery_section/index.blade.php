@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Gallery list -->
    @if(!empty($galleries))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Gallery section </h2>
                </div>

                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.gallery_section.create') }}"> Add New Gallery</a>
                </div>
                
            </div>
        </div>


{{--  testing  --}}
//-- resources/views/vendor/laradrop/fileContainer.blade.php --//                       

<div class="laradrop-thumbnail thumbnail laradrop-droppable col-md-2 laradrop-draggable "  file-id="[[id]]">
    <div class=" well" >
        <h4 class="laradrop-filealias" >[[alias]]</h4>
        <p class="text-info">[[type]] / [[updated_at]]</p>
        <p>
            <a href="#" onclick="return false;" class="label label-success laradrop-file-insert" rel="tooltip" title="{{ trans('laradrop::app.select') }}">{{ trans('laradrop::app.select') }}</a>
            <a href="{{ route('laradrop.index') }}" class="label label-danger laradrop-file-delete" rel="tooltip" title="{{ trans('laradrop::app.delete') }}">{{ trans('laradrop::app.delete') }}</a>
            <a href="#" onclick="return false;" class="label label-warning move" rel="tooltip" title="{{ trans('laradrop::app.move') }}">{{ trans('laradrop::app.move') }}</a>
        </p>
        <img src="[[fileSrc]]" alt="[[alias]]" >
    </div>
</div>


  
//-- resources/views/vendor/laradrop/mainContainer.blade.php --//                       

<div class="laradrop-container" id="laradrop-container-[[uid]]" >
    
    <button type="button" class="btn btn-default btn-add-folder">{!! trans('laradrop::app.addFolder') !!}</button>
    <button type="button" class="btn btn-default btn-add-files">{!! trans('laradrop::app.uploadFiles') !!}</button>
    <button type="button" class="btn btn-success start" style="display:none;" >{!! trans('laradrop::app.startUpload') !!}</button>
       
    <div class="laradrop-breadcrumbs-container"></div><hr>
    <div class="laradrop-previews" ></div>
    <div class="laradrop-body" ></div>
</div>


  
//-- resources/views/vendor/laradrop/previewContainer.blade.php --//                       

<div class="files">
    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" >
        <div class="progress-bar progress-bar-success"  data-dz-uploadprogress></div>
	</div>
	<div id="template" class="file-row">
        <div>
            <p class="name" data-dz-name></p>
            <strong class="error text-danger" data-dz-errormessage></strong>
        </div>
        <div>
            <p class="size" data-dz-size></p>
        </div>        
        <button data-dz-remove class="btn btn-danger btn-xs cancel">Cancel</button>
    </div>
</div>




        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Gallery Name</th>
                        <th width="40%">Gallery Date</th>
                        <th width="15%">Gallery Picture</th>
                       
                        
                        <th>Action</th>
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($galleries as $gallery)
                        <tr>
                            <td class="table-text">
                                <div>{{$gallery['gallery_name']}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$gallery->gallery_date}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$gallery->gallery_picture}}</div>
                            </td>
                            
                          

                            <td>
                            {{--  <a href="{{ route('posts.edit', $post->id) }}" class="label label-warning">Edit</a>  --}}
                            <a href="{{route('admin.gallery_section.edit', $gallery->id) }}" class="label label-info">Edit</a>
                            <a href="{{ route('admin.gallery_section.delete', $gallery->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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