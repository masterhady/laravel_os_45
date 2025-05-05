@extends('layout')

@section('section1')


<form method="Post" action="{{route('categories.store')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" 
      value="{{old('name')}}">
      @error('name')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="{{old('description')}}">
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection