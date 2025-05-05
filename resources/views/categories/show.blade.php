@extends('layout')

{{-- @dd($category->courses) --}}

@section('section1')
<div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 100%;">
      
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <p class="card-text">{{$category->description}}</p>
                    <p class="card-text">{{$category->updated_at}}</p>
                    <p class="card-text">{{$category->created_at}}</p>
                    <ul> 
                        @forelse ($category->courses as $course)
                            <li>{{ $course->name }}</li>
                        @empty
                            <p class="text-danger">No Courses</p>
                        @endforelse

                        {{-- Related Courses: 
                        @foreach ($category->courses as $course)
                            <li> {{$course->name}} </li>
                        @endforeach --}}

                    </ul>
                </div>
            </div>
        </div>
</div>
@endsection
