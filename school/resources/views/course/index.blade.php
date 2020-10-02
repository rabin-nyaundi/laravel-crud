@extends('course.layout')

@section('content')

<div class="row">
    <div class="pull-left">
        <h3>Registered courses</h3>
    </div>
</div>

<div class="pull-right">
    <a style="margin: 10px;" href="{{ route ('course.create')}}" class="btn btn-primary">Register New Course</a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Code</th>
        <th>Course Name</th>
        <th>Course Teacher</th>
        <th>Total of hours</th>
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
    
                <a class="btn btn-primary" href="{{ route('course.edit', $course->id) }}">Edit
                    <i class="fas fa-edit fa-lg"></i>
                </a>
    
                @csrf
                @method('DELETE')
                <button class="btn btn-primary" type="submit" title="delete">Delete
                    <i class="fas fa-trash fa-lg text-danger"></i>
                </button>
            </form>
            
        </td>
    </tr>
    @endforeach
</table>

{!! $courses->links() !!}
@endsection