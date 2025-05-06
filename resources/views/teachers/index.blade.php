@extends('layout')

@section('title')
    Teachers
@endsection

@section('section1')
<a class="btn btn-info" href={{route("teachers.create")}}> Create New teacher </a>
<div class="row">
    @foreach ($teachers as $teacher)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{$teacher->name}}</h5>
                    <p class="card-text">{{$teacher->email}}</p>
                    <p class="card-text">{{$teacher->salary}}</p>
                    <p class="card-text">{{$teacher->phone}}</p>

                   
                    <a class="btn btn-primary" href={{route("teachers.show", $teacher)}}> Show </a>

                    {{-- @canany(['update', 'view', 'delete'], $post)
                        
                    @else

                    @endcanany --}}

                    @can('edit_delete', $teacher)
                        <a class="btn btn-warning" href={{route("teachers.edit", $teacher->id)}}> Edit </a>
                        <form action={{route("teachers.destroy", $teacher->id)}} method='post'>
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"> Delete </button>
                        </form>
                    @else
                     <p class="text-danger">  You Are Not The Creator </p>
                    @endcan

                    


                    {{-- <a class="btn btn-primary" href={{route("courses.show", $course->id)}}> Show </a>
                    <a class="btn btn-warning" href={{route("courses.edit", $course->id)}}> Edit </a>
                    <a class="btn btn-danger" href=> Delete </a> --}}

                   
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection