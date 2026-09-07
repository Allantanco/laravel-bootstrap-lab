<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT Portal - About</title>
    <!-- Bootswatch Lux Theme CDN -->
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/lux/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card border-primary mb-3" style="max-width: 30rem;">
            <div class="card-header bg-primary text-white">Student Information</div>
            <div class="card-body">
                <h4 class="card-title">{{ $studentName }}</h4>
                <p class="card-text"><strong>Course:</strong> {{ $course }}</p>
                <a href="/" class="btn btn-outline-primary btn-sm">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>