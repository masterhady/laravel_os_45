@extends("layout")

@section("pagetitle")
    Show User 
@endsection

@section("title")
    Show User 
@endsection

@section('section1')
    <div class="card" style="width: 18rem;">
        <img src={{$std["image"]}} class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$std["name"]}}</h5>
        <p class="card-text">{{$std["email"]}}</p>
        <a href={{route("list")}} class="btn btn-primary"> Back </a>
        </div>
    </div>
@endsection