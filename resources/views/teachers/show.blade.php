@extends('layout')

{{-- @dd($teacher->courses) --}}
{{-- @dd($teacher->user) --}}
@section('section1')
<div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
      
                <div class="card-body">
                    <h5 class="card-title">{{$teacher->name}}</h5>
                    <p class="card-text">{{$teacher->salary}}</p>
                    <p class="card-text">{{$teacher->phone}}</p>
                    <p class="card-text">{{$teacher->email}}</p>
                    <p class="card-text">Created By: {{$teacher->user ? $teacher->user->name : "No User"}}</p>
                    <p class="card-text">{{$teacher->updated_at}}</p>
                    <p class="card-text">{{$teacher->created_at}}</p>
                   
                </div>
            </div>
        </div>
</div>
@endsection
