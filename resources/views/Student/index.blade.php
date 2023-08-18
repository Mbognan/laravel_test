<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<div class="container text-center">

    <h1>Table of students</h1>
</div>
    <div>
         @if(session() -> has('success'))
         <div > {{session('success')}}</div>

         @endif
    </div>

    <div>
        <table class="table table-hovered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Action</th>
                <th>Action2</th>


            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->address}}</td>
                <td>
                    <a href="{{route('student.edit',['student' => $student])}}"  type="button" class="btn btn-primary">Edit</a>
                </td>
                    <td>
                    <form method="post" action="{{ route('student.delete', ['student' => $student]) }}">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>

    </form>

                         </td>



            </tr>

            @endforeach
        </table>

    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="{{route('student.create',['student' => $student])}}" class="btn btn-primary" type="button">Add new Student</a>
        </div>
</form>
</body>
</html>
