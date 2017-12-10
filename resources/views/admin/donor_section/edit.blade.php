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
                Edit Donor Section <a href="{{ route('admin.donor_section.index') }}" class="label label-primary pull-right">Back</a>
            </div>
            <div class="panel-body">
                <form action="{{ route('admin.donor_section.update', $donor->id) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Donor Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="donor_name" id="donor_name" class="form-control">{{ $donor->donor_name }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Donor Amount</label>
                        <div class="col-sm-10">
                            <input type="float" name="donor_amount" id="donor_amount" class="form-control">{{ $donor->donor_amount }}
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Donor Info</label>
                        <div class="col-sm-10">
                            <textarea name="donor_info" id="donor_info" class="form-control">{{ $donor->donor_info }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Donor Picture</label>
                        <div class="col-sm-10">
                            <textarea name="donor_picture" id="donor_picture" class="form-control">{{ $donor->donor_picture }}</textarea>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-default" value="Update Donor Section" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
