@extends('layouts.app')

@section('head')
    {!! HTML::style('/packages/dropzone/dropzone.css') !!}
     {!! HTML::script('/packages/dropzone/dropzone.js') !!}
@stop



@section('content')
<div class="row">


     {{-- testing dropzone --}}

 {{--    <h1>Upload Media</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'CampaignController@create', 'class'=>'dropzone']) !!}




    {!! Form::close() !!} --}}
     







    <div class="col-lg-12">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Add New Campaign <a href="{{ route('admin.campaign_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">


{{-- 
<form action="upload.php" enctype="multipart/form-data" method="POST">
    <input type="text" id ="firstname" name ="firstname" />
    <input type="text" id ="lastname" name ="lastname" />
    <div class="dropzone" id="myDropzone"></div>
    <button type="submit" id="submit-all"> upload </button>
</form> --}}








                <form action="{{ route('admin.campaign_section.insert') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                 
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campgain Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="campaign_name" id="campgain_name" class="form-control"></textarea>
                        </div>
                    </div>
                   









                       

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campaign Description</label>
                        <div class="col-sm-10">
                            <textarea name="campaign_description" id="campaign_description" class="form-control"></textarea>
                             <div class="dropzone" id="myDropzone"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add New Campaign" />
                        </div>






                </form>
                <script type="text/javascript">
                    Dropzone.options.myDropzone= {
    url: 'http://localhost/swmnepal/public/upload',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 1,
    maxFiles: 1,
    maxFilesize: 1,
    acceptedFiles: 'image/*',
    addRemoveLinks: true,
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        // document.getElementById("submit-all").addEventListener("click", function(e) {
        //     // Make sure that the form isn't actually being sent.
        //     e.preventDefault();
        //     e.stopPropagation();
        //     dzClosure.processQueue();
        // });

        //send all the form data along with the files:
        // this.on("sendingmultiple", function(data, xhr, formData) {
        //     formData.append("firstname", jQuery("#firstname").val());
        //     formData.append("lastname", jQuery("#lastname").val());
        // });
    }
}
                </script>

 {{--                 <div class="form-group">
                        <label class="control-label col-sm-2" >Campaign Picture</label>
                        <div class="col-sm-10">
                             <textarea name="campaign_featured_picture" id="campaign_featured_picture" class="form-control"></textarea> 
                <form method="POST" action="http://localhost/swmnepal/public/upload" accept-charset="UTF-8" class="dropzone" id="real-dropzone" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="dz-message">

                </div>

                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>

                <div class="dropzone-previews" id="dropzonePreview"></div>

                <h4 style="text-align: center;color:#428bca;">Drop images in this area  <span class="glyphicon glyphicon-hand-down"></span></h4>

                </form>

                <!-- End Dropzone Preview Template -->
    {!! Form::hidden('csrf-token', csrf_token(), ['id' => 'csrf-token']) !!}

 </div>
</div> --}}








            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script> --}}


@stop

