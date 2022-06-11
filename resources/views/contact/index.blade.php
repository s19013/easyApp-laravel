<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('contact.create')}}">new</a>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td><a href="{{route('contact.show',['id' => $contact->id])}}">{{$contact->id}}</a></td>
                <td>{{$contact->your_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
