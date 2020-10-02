@extends('course.layout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('course.update', $course->id )}}" method="POST">  
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" class="form-control" placeholder="Enter the course name" value="{{$course->course_name}}" >
            </div>
    
            <div class="form-group">
                <label for="course_name">Course Teacher</label>
                <input type="text" name="course_teacher" class="form-control" placeholder="Enter the course Teacher" value="{{$course->course_teacher}}">
            </div>
            
            <div class="form-group">
                <label for="course_name">No of hours</label>
                <input type="number" name="no_of_hours" class="form-control" placeholder="Enter number of hours" value="{{$course->no_of_hours}}">
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <a href="{{url()->previous()}}" class="btn btn-primary">Cancel</a>
                </div>
            </div>

        
        </div>
    </div>
</form>

@endsection