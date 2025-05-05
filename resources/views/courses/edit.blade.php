@extends('layout')

@section('section1')

{{-- @dd($course) --}}
<form method="Post" action="{{route('courses.update', $course->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value={{$course->name}}>
    </div>
    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="text" class="form-control" name="price" value={{$course->price}}>
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value={{$course->description}}>
      </div>
      <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" class="form-control" name="image" value={{$course->image}}>
      </div>
      {{-- <div class="mb-3">
        <label class="form-label">Category</label>
        <input type="text" class="form-control" name="category" value={{$course->category}}>
      </div> --}}
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection