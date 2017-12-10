@extends('layouts.app')

@section('head')
    {{-- {!! HTML::style('/packages/dropzone/dropzone.css') !!} --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@stop

{{-- @section('footer')
    {!! HTML::script('/packages/dropzone/dropzone.js') !!}
    {!! HTML::script('/assets/js/dropzone-config.js') !!}
@stop --}}


@section('content')
<div class="row">


     {{-- testing dropzone --}}

    <h1>Upload Media</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'CampaignController@create', 'class'=>'dropzone']) !!}




    {!! Form::close() !!}
     







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
                <form action="{{ route('admin.campaign_section.insert') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                 
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campgain Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="campaign_name" id="campgain_name" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campaign Picture</label>
                        <div class="col-sm-10">
                            <textarea name="campaign_featured_picture" id="campaign_featured_picture" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campaign Description</label>
                        <div class="col-sm-10">
                            <textarea name="campaign_description" id="campaign_description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Add New Campaign" />
                        </div>






                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>


@stop

