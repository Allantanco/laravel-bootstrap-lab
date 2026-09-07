<!DOCTYPE html>
<html>
<head>
    <title>About - ACT Laravel App</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">About Me</h1>
        <div class="card mx-auto mt-4" style="max-width: 500px;">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $studentName }}</h5>
                <p class="card-text">Course: {{ $course }}</p>
                <a href="/" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>