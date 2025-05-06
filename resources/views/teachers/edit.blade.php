@extends('layout')

@section('section1')


<form method="Post" action="{{route('teachers.update', $teacher->id)}}">
    @csrf
    @method("put")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" 
      value="{{$teacher->name}}">
      @error('name')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label">salary</label>
        <input type="text" class="form-control" name="salary" value="{{$teacher->salary}}">
        @error('salary')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection