<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>New Question</h1>
    <form action="{{route('supports.store')}}" method="post">
        @csrf
        <label for="subject">Subject: </label>
        <input type="text" name="subject">
        <textarea name="content" id="" cols="30" rows="10">Content</textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>