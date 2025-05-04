@extends('layout')

@section('section1')
<a class="btn btn-info" href={{route("courses.create")}}> Create New Course </a>
<div class="row">
    @foreach ($courses as $course)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <img src="images/{{$course->image}}" class="card-img-top" alt="..." width="80" height="100">
                <div class="card-body">
                    <h5 class="card-title">{{$course->name}}</h5>
                    <p class="card-text">{{$course->description}}</p>
                    <p class="card-text">{{$course->price}}</p>
                    <a class="btn btn-primary" href={{route("courses.show", $course->id)}}> Show </a>
                    <a class="btn btn-warning" href={{route("courses.edit", $course->id)}}> Edit </a>
                    {{-- <a class="btn btn-danger" href=> Delete </a> --}}

                    <form action={{route("courses.destroy", $course->id)}} method='post'>
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"> Delete </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
