@extends('layout')

@section('section1')

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form method="Post" action="{{route('courses.store')}}">
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
      <label class="form-label">Price</label>
      <input type="text" class="form-control" name="price" 
      value="{{old('price')}}">
      @error('price')
          <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="{{old('description')}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" class="form-control" name="image" value="{{old('image')}}">
      </div>
      {{-- @dd($categories) --}}

      <select class="form-select" name="category_id">
        @foreach ($categories as $category)
          <option value={{$category->id}}>{{$category->name}}</option>
        @endforeach
        
      </select>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection