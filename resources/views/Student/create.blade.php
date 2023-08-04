<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Create a student</h1>
<form method="post" action="{{route('student.store')}}">
    @csrf
    @method('post')
    <div>
        <label>Name</label>
            <input type="text" name='name' placeholder="name"/>
    </div>
    <div>
        <label>Age</label>
            <input type="text" name='age' placeholder="age"/>
    </div>
    <div>
        <label>Address</label>
            <input type="text" name='address' placeholder="address"/>
    </div>

    <div>
        <input type="submit" value="save information">
    </div>




</form>
</body>
</html>
