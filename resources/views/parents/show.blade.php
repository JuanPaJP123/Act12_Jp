<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$parents->name}}</title>
</head>
<body>
    <h1>{{$parents->name}}</h1>
    <p>{{$parents->gender}}</p>

    <a href= "{{ route('parents.edit', $parents->id)}}">Edit</a>
    <br><br>
    <form action="{{ route('parents.destroy', $parents->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit" onclick="return confirm ('Are you sure you want to delete this record')">Delete</button>
</body>
</html>