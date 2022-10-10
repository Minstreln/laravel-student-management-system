@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>s/n</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Address</th>
                <th>Time Created</th>
                <th>Time Updated</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        @foreach ($students as $student)
            <tr>
                <td>{{$student['id']}}</td>
                <td>{{$student['firstname']}}</td>
                <td>{{$student['lastname']}}</td>
                <td>{{$student['email']}}</td>
                <td>{{$student['address']}}</td>
                <td>{{$student['created_at']}}</td>
                <td>{{$student['updated_at']}}</td>
                <td><a href="{{route('image', $student->id)}}"><button  class="viewbtn">View</button></a></td>
                <td><a href="{{route('edit', $student->id)}}"><button  class="editbtn">Edit</button></a></td>
                <td><a href="{{route('delete', $student->id)}}"><button  class="deletebtn">Delete</button></a></td>
            </tr>
        @endforeach
    </table>
    <div class="students">
        {{$students->links()}}
    </div>
@endsection