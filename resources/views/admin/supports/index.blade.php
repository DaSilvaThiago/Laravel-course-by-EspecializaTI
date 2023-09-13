<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supports</title>
</head>
<body>
    <h1>Supports</h1>
    <table>
        <thead>
            <th>subject</th>
            <th>status</th>
            <th>content</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr>
                    <td>{{$support->subject}}</td>
                    <td>{{$support->status}}</td>
                    <td>{{$support->content}}</td>
                    <td><a href="{{route('supports.show', $support->id)}}">more</a></td>
                    <td><a href="{{route('supports.edit', $support->id)}}">edit</a></td>
                </tr>
            @endforeach    
        </tbody>
    </table>
    <a href="{{route ('supports.create')}}">create</a>
</body>
</html>