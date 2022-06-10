<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>name</p>
    <p>{{$contact->name}}</p>
    <a href="{{route('contact.edit',['id' => $contact->id])}}">
        <button>edit</button>
    </a>

    <form action="{{route('contact.destroy',['id' => $contact->id])}}" method="get">
        <button data-id="{{$contact->id}}" onclick="deletePost(this);">destory</button>
    </form>
</body>

<script>
function deletePost(e) {
    'use strict';
    if (confirm('really?')) {
        document.getElementById('delete_' + e.dataset.id).submit()
    }
}
</script>
</html>
