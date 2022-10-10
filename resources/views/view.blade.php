@extends('layouts.app')

@section('title')
    View
@endsection

@section('content')
    <div class="view-container">
        <div class="img-container">
            <div class="images">
                <img class="img" src="{{Storage::url($student->image)}}" alt="User-Image" height="200px" width="300px">
            </div>
        </div>

        <div class="row">
            <div class="name-row">
                <label>Firstname:</label>
            </div>
            <div class="name">
                <label>{{$student->firstname}}</label>
            </div>

            <div class="name-row">
                <label>Lastname:</label>
            </div>
            <div class="name">
                <label>{{$student->lastname}}</label>
            </div>

            <div class="name-row">
                <label>Address:</label>
            </div>
            <div class="name">
                <label>{{$student->address}}</label>
            </div>
        </div>
    </div>
@endsection