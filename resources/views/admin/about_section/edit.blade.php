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
                Edit About Section <a href="{{ route('admin.about_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.about_section.update', $post->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Introduction</label>
                        <div class="col-sm-10">
                            <textarea name="introduction_content" id="introduction_content" class="form-control">{{ $post->introduction_content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Implementation</label>
                        <div class="col-sm-10">
                            <textarea name="implementation_content" id="implementation_content" class="form-control">{{ $post->implementation_content }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Sponsorship</label>
                        <div class="col-sm-10">
                            <textarea name="sponsorship_content" id="sponsorship_content" class="form-control">{{ $post->sponsorship_content }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Executive Summary</label>
                        <div class="col-sm-10">
                            <textarea name="executive_summary_content" id="executive_summary_content" class="form-control">{{ $post->executive_summary_content }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Mission</label>
                        <div class="col-sm-10">
                            <textarea name="mission_content" id="mission_content" class="form-control">{{ $post->mission_content }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Vision</label>
                        <div class="col-sm-10">
                            <textarea name="vision_content" id="vision_content" class="form-control">{{ $post->vision_content }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Goal</label>
                        <div class="col-sm-10">
                            <textarea name="goal_content" id="goal_content" class="form-control">{{ $post->goal_content }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update About Section" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
