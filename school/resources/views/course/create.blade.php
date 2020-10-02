@extends('course.layout')

@section('content')

<div class="pull-left">
    <h4>Register New Course</h4>
</div>



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



<form action="{{ route('course.store' )}}" method="POST">  
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input type="text" name="course_name" class="form-control" placeholder="Enter the course name">
            </div>
    
            <div class="form-group">
                <label for="course_name">Course Teacher</label>
                <input type="text" name="course_teacher" class="form-control" placeholder="Enter the course Teacher">
            </div>
            
            <div class="form-group">
                <label for="course_name">No of hours</label>
                <input type="number" name="no_of_hours" class="form-control" placeholder="Enter number of hours">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>

        
        </div>
    </div>
</form>
    


@endsection