<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- <h1>User Dashboard</h1>
        <p>Welcome, User!</p> -->
        <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('user.dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    </ul>
    </div>
</body>
</html>
