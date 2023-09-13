<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create a question</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif

    <form action="{{route('supports.store')}}" method="post">
    @csrf
    <label for="subject">Subject</label>
    <input type="text" name="subject" value="{{old('subject')}}">
    <textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea>
    <button type="submit">Create</button>
</form>
<a href="{{route('supports.index')}}">Back</a>
</body>
</html>