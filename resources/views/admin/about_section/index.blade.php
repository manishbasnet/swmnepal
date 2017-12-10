@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12">
        @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    <!-- Posts list -->
    @if(!empty($posts))
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
                        <th>Action</th>
                        
                    </thead>
    
                    <!-- Table Body -->
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post['introduction_content']}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->implementation_content}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$post->sponsorship_content}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->executive_summary_content}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->mission_content}}</div>
                            </td>
                                <td class="table-text">
                                <div>{{$post->vision_content}}</div>
                            </td>
                             </td>
                                <td class="table-text">
                                <div>{{$post->goal_content}}</div>
                            </td>

                            <td>
                            {{--  <a href="{{ route('posts.edit', $post->id) }}" class="label label-warning">Edit</a>  --}}
                            <a href="{{route('admin.about_section.edit', $post->id) }}" class="label label-info">Edit</a>
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