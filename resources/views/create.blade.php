@extends('layouts.app')

@section('title')
    Create
@endsection

@section('content')
<div class="form-container">
    <h1>Create Data</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" value="{{old('firstname')}}" placeholder="Enter Firstname">
            @if($errors)
                @error('firstname')
                    <p>{{ $message }}</p>
                @enderror
            @endif
        </div>

        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" value="{{old('lastname')}}" placeholder="Enter Lastname">
            @if($errors)
                @error('lastname')
                    <p>{{ $message }}</p>
                @enderror
            @endif
        </div>    

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{old('email')}}" placeholder="Enter Email">
            @if($errors)
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            @endif
        </div>

        <div class="form-group" id="form-group1">
            <label for="image">Image:</label>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{old('address')}}" placeholder="Enter Address">
            @if($errors)
                @error('address')
                    <p>{{ $message }}</p>
                @enderror
            @endif
        </div>

        <button class="btn" type="submit">Submit</button>
    </form>
@endsection