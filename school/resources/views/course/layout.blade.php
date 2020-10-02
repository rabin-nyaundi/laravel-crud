<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Course Registration</h1>

        <form action="{{ route('logout') }}" method="post">
        @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>

    </div>


    <div class="container">
        @yield('content')
    </div>

    <div style="margin-bottom: 0px; background-color: rgb(43, 28, 51); color: white; padding: 20px;" class="container-fluid">
        <div class="row justify-content-center">
            <p>Class Course Registration</p>
        </div>
    </div>
    <!-- <div class="jumbotron text-center" style="margin-bottom: 0;">
        <p>school course registration</p>
    </div> -->
</body>
</html>