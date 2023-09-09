<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show more</title>
</head>
<body>
    <h1>Details from the question {{$support->id}}</h1>
    <ul>
        <li>Subject: {{$support->subject}}</li>
        <li>Status: {{$support->status}}</li>
        <li>Content: {{$support->content}}</li>
    </ul>
    <a href="{{route('supports.index')}}">Back</a>
</body>
</html>