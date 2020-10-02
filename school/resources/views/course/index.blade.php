@extends('course.layout')

@section('content')

<div class="row">
    <div class="pull-left">
        <h3>Registered courses</h3>
    </div>
</div>

<div class="pull-right">
    <a style="margin: 10px;" href="{{ route ('course.create')}}" class="btn btn-primary">Create Course</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Course Name</th>
        <th>Course Teacher</th>
        <th>No of hours</th>
        <th>Action</th>
    </tr>
    
    @foreach ($courses as $course)

    <tr>
        <td>{{++$i}}</td>
        <td>{{$course->course_name}}</td>
        <td>{{$course->course_teacher}}</td>
        <td>{{$course->no_of_hours}}</td>
        <td>
            <form action="{{route ('course.destroy', $course->id)}}" method="post">

                <!-- <a class="btn btn-primary" href="{{ route('course.show', $course->id) }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a> -->
    
                <a class="btn btn-primary" href="{{ route('course.edit', $course->id) }}">Edit
                    <i class="fas fa-edit  fa-lg"></i>
                </a>
    
                @csrf
                @method('DELETE')
                <button class="btn btn-primary" type="submit" title="delete">
                    <i class="fas fa-trash fa-lg text-danger"></i>Delete
                </button>
            </form>
            
        </td>
    </tr>
    @endforeach
</table>

@endsection