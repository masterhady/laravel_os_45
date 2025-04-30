@extends('layout') 

@section('sub-title')
    Students:
@endsection


@section('title')
    List Users Page
@endsection

@section("pagetitle")
    List Students
@endsection

@section("section2")
<h1> hello </h1>
@endsection


@section("section1")
        <h1 class='text-danger text-center'>  {{$trackname}}  </h1>
    <table class='table'>
        <tr> 
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
        @foreach ($mystd as $std)
            <tr> 
                <td> {{$std["name"]}} </td>
                <td> {{$std["age"]}} </td>
                <td> {{$std["email"]}} </td>
                <td> <a class="btn btn-info" href={{route('students.show', ["id"=>$std["id"]]) }}> Show </a>  </td>
            </tr>
        @endforeach
    </table> 
@endsection


