@extends('layouts.app')

@section('title')
    Edit
@endsection

@section('content')
@if($student)
<div class="form-container">
    <form action={{route('update', $student->id)}} method="POST" enctype="multipart/form-data">
        <h1>Edit Data</h1>
        @csrf
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" placeholder="Enter Firstname" value={{$student->firstname}}>
        </div>

        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname"  placeholder="Enter Lastname" value={{$student->lastname}}>
        </div>    

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email"  placeholder="Enter Email" value={{$student->email}}>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" value="{{$student->image}}">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" placeholder="Enter Address" value={{$student->address}}>
        </div>


        <button class="btn" type="submit">save Edit</button>
    </form>
@endif
@endsection