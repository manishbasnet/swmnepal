@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($about))
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>About section </h2>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                    <thead>
                        <th width="25%">Introduction</th>
                        <th width="40%">Implementation</th>
                        <th width="15%">Sponsorship</th>
                        <th width="20%">Executive</th>
                         <th width="40%">Mission</th>
                        <th width="15%">Vision</th>
                        <th width="20%">Goal</th>
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($about as $a)
                        <tr>
                            <td class="table-text">
                                <div>{{$a->introduction_content}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$a->implementation_content}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$a->sponsorship_content}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$a->executive_summary_content}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$a->mission_content}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$a->vision_content}}</div>
                            </td>
                             </td>
                                <td class="table-text">
                                <div>{{$a->goal_content}}</div>
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