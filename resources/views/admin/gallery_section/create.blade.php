@extends('layouts.app')

@section('head')
    {{-- {!! HTML::style('/packages/dropzone/dropzone.css') !!} --}}


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/vendor/jasekz/laradrop/css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js" ></script>
        <script src="/vendor/jasekz/laradrop/js/enyo.dropzone.js"></script>
        <script src="/vendor/jasekz/laradrop/js/laradrop.js"></script>


    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css"> --}}
@stop

{{-- @section('footer')
    {!! HTML::script('/packages/dropzone/dropzone.js') !!}
    {!! HTML::script('/assets/js/dropzone-config.js') !!}
@stop --}}


@section('content')
<div class="row">


     {{-- testing dropzone --}}

    {{-- <h1>Upload Media</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'CampaignController@create', 'class'=>'dropzone']) !!}




    {!! Form::close() !!}
      --}}







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
                Add New Gallery <a href="{{ route('admin.gallery_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.gallery_section.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                 
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gallery Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="gallery_name" id="gallery_name" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gallery Date</label>
                        <div class="col-sm-10">
                            <input type="float" name="gallery_date" id="gallery_date" class="form-control"></textarea>
                        </div>
                    </div>


                 

                    

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gallery Picture</label>
                        <div class="col-sm-10">
                            <textarea name="gallery_picture" id="gallery_pictur" class="form-control"></textarea>
                        </div>
                    </div>

                   

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add New Gallery" />
                        </div>






                </form>
            </div>
        </div>
    </div>
</div>


    



@endsection

@section('scripts')


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script> --}}


@stop

