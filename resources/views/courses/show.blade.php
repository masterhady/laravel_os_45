@extends('layout')

{{-- @dd($course) --}}

@section('section1')
<div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('images/' . $course->image) }}" class="card-img-top" alt="..." width="80" height="100">
             
                <div class="card-body">
                    <h5 class="card-title">{{$course->name}}</h5>
                    <p class="card-text">{{$course->description}}</p>
                    <p class="card-text">{{$course->price}}</p>
                    <p class="card-text">{{$course->updated_at}}</p>
                    <p class="card-text">{{$course->created_at}}</p>

                </div>
            </div>
        </div>
</div>
@endsection
