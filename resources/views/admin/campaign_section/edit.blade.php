@extends('layouts.app')

@section('content')

<div class="row">
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
                Edit Campaign Section <a href="{{ route('admin.campaign_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.campaign_section.update', $campaign->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campgain Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="campaign_name" id="campgain_name" class="form-control">{{ $campaign->campaign_name }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campaign Picture</label>
                        <div class="col-sm-10">
                            <textarea name="campaign_featured_picture" id="campaign_featured_picture" class="form-control">{{ $campaign->campaign_featured_picture }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Campaign Description</label>
                        <div class="col-sm-10">
                            <textarea name="campaign_description" id="campaign_description" class="form-control">{{ $campaign->campaign_description }}</textarea>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update Campaign Section" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
