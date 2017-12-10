@extends('layouts.app')

@section('head')
    {{-- {!! HTML::style('/packages/dropzone/dropzone.css') !!} --}}


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
                Add New Contact <a href="{{ route('admin.contact_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.contact_section.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                 
                    <div class="form-group">
                        <label class="control-label col-sm-2" >User Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_name" id="user_name_name" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >User Email</label>
                        <div class="col-sm-10">
                            <input type="float" name="user_email" id="user_email" class="form-control"></textarea>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-2" >User Message</label>
                        <div class="col-sm-10">
                            <input type="float" name="user_message" id="user_message" class="form-control"></textarea>
                        </div>
                    </div>

                       <div class="form-group">
                        <label class="control-label col-sm-2" >Admin Location</label>
                        <div class="col-sm-10">
                            <input type="text" name="admin_location" id="admin_location" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Admin Phone</label>
                        <div class="col-sm-10">
                            <input type="float" name="admin_phone" id="admin_phone" class="form-control"></textarea>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-2" >Admin Email</label>
                        <div class="col-sm-10">
                            <input type="float" name="admin_email" id="admin_email" class="form-control"></textarea>
                        </div>
                    </div>


                 

                    

                    
                   

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add New contact" />
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

