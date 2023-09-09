<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit question {{$support->id}}</h1>
    <form action="{{route('supports.update', $support->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="subject">Subject: </label>
        <input type="text" name="subject" value="{{$support->subject}}">
        <textarea name="content" id="" cols="30" rows="10" >{{$support->content}}</textarea>
        <button type="submit">Update</button>
    </form>
    <a href="{{route('supports.index')}}">Back</a>
</body>
</html>