@extends('layout')

@section('section1')


<form method="Post" action="{{route('teachers.store')}}">
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
        <label class="form-label">Salary</label>
        <input type="text" class="form-control" name="salary" value="{{old('salary')}}">
        @error('salary')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" value="{{old('email')}}">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone" value="{{old('phone')}}">
        @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection