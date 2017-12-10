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
                Edit Contact Section <a href="{{ route('admin.contact_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.contact_section.update', $contact->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-sm-2" >User Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_name" id="user_name" class="form-control">{{ $contact->user_name }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >User Email</label>
                        <div class="col-sm-10">
                            <input type="float" name="user_email" id="user_email" class="form-control">{{ $contact->user_email }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >User Message</label>
                        <div class="col-sm-10">
                            <input type="float" name="user_message" id="user_message" class="form-control">{{ $contact->user_message }}
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Admin Location</label>
                        <div class="col-sm-10">
                            <textarea name="admin_location" id="admin_location" class="form-control">{{ $contact->admin_location }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Admin Phone</label>
                        <div class="col-sm-10">
                            <textarea name="admin_phone" id="admin_phone" class="form-control">{{ $contact->admin_phone }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Admin Email</label>
                        <div class="col-sm-10">
                            <textarea name="admin_email" id="admin_emai" class="form-control">{{ $contact->admin_emai }}</textarea>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update contact Section" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
