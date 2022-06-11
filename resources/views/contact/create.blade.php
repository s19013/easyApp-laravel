<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route("contact.store")}}" method="post">
        @csrf
        <p>name</p>
        <input type="text" name="your_name"><br>
        <p>email</p>
        <input type="email" name="email"><br>
        <p>url</p>
        <input type="url" name="url"><br>
        <p>gender</p>
        <input type="radio" name="gender" value="0">男性
        <input type="radio" name="gender" value="1">女性
        <br>
        <p>年齢</p>
        <select name="age">
            <option value="">選択</option>
            <option value="1">~19歳</option>
            <option value="2">20~29歳</option>
            <option value="3">30~39歳</option>
            <option value="4">40~49歳</option>
            <option value="5">50~59歳</option>
            <option value="6">60歳~</option>
        </select>
        <br>

        <p>問い合わせ内容</p>
        <textarea name="contact" id="" cols="30" rows="10"></textarea>

        <input type="checkbox" name="caution" id="" value="1">注意事項に同意
        <br>

        <input type="submit" value="登録">
    </form>
</body>
</html>
