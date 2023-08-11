<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container">
        <h1 class="text-center mb-4">Create a Student</h1>
        <form method="post" action="{{ route('student.update', ['student' => $student]) }}">
    @csrf
    @method('PUT') <!-- Method Spoofing for PUT request -->

    <div class="input-group mb-3">
        <span class="input-group-text" id="addon-wrapping">Name</span>
        <input type="text" name="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" value="{{ $student->name }}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="addon-wrapping">Age</span>
        <input type="text" name="age" class="form-control" placeholder="Age" aria-label="Age" aria-describedby="addon-wrapping" value="{{ $student->age }}">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="addon-wrapping">Address</span>
        <input type="text" name="address" class="form-control" placeholder="Address" aria-label="Address" value="{{ $student->address }}">
    </div>
    <div class="text-center">
        <input type="submit" class="btn btn-primary" value="Update Information" >

    </div>
</form>
    </div>
</body>
</html>
