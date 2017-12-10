@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Donor list -->
    @if(!empty($donors))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Donor section </h2>
                </div>

                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('admin.donor_section.create') }}"> Add New Donor</a>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Donor Name</th>
                        <th width="40%">Donor Amount</th>
                        <th width="15%">Donor Info</th>
                        <th width="20%">Donor Picture</th>
                        
                        <th>Action</th>
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($donors as $donor)
                        <tr>
                            <td class="table-text">
                                <div>{{$donor['donor_name']}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$donor->donor_amount}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$donor->donor_info}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$donor->donor_picture}}</div>
                            </td>
                          

                            <td>
                            {{--  <a href="{{ route('posts.edit', $post->id) }}" class="label label-warning">Edit</a>  --}}
                            <a href="{{route('admin.donor_section.edit', $donor->id) }}" class="label label-info">Edit</a>
                            <a href="{{ route('admin.donor_section.delete', $donor->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
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