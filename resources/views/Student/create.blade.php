<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="text-center mb-4">Create a new  Student</h1>
        <form method="post" action="{{ route('student.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" id="age" placeholder="Age">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>
            <button type="submit" class="btn btn-primary">Save Information</button>
        </form>
    </div>
</body>
</html>
