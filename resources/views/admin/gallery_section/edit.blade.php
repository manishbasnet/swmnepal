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
                Edit Gallery Section <a href="{{ route('admin.gallery_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.gallery_section.update', $gallery->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gallery Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="gallery_name" id="gallery_name" class="form-control">{{ $gallery->gallery_name }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gallery Date</label>
                        <div class="col-sm-10">
                            <input type="float" name="gallery_date" id="gallery_date" class="form-control">{{ $gallery->gallery_date }}
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gallery Picture</label>
                        <div class="col-sm-10">
                            <textarea name="gallery_picture" id="gallery_picture" class="form-control">{{ $gallery->gallery_picture }}</textarea>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update Gallery Section" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
