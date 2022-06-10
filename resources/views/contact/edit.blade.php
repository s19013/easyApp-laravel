<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("contact.update",['id' => $contact->id])}}" method="post">
        @csrf
        <p>name</p>
        <input type="text" name="your_name" value="{{$contact->your_name}}"><br>
        <p>email</p>
        <input type="email" name="email" value="{{$contact->email}}"><br>
        <p>url</p>
        <input type="url" name="url" value="{{$contact->url}}"><br>
        <p>gender</p>
        <input type="radio" name="gender" value="0"
        @if ($contact->gender === 0 ) checked @endif>男性
        <input type="radio" name="gender" value="1"
        @if ($contact->gender === 1 ) checked @endif>女性
        <br>
        <p>年齢</p>
        <select name="age">
            <option value="">選択</option>
            <option value="1" @if ($contact->age === 1) selected @endif>~19歳</option>
            <option value="2" @if ($contact->age === 2) selected  @endif>20~29歳</option>
            <option value="3" @if ($contact->age === 3) selected @endif>30~39歳</option>
            <option value="4" @if ($contact->age === 4) selected @endif>40~49歳</option>
            <option value="5" @if ($contact->age === 5) selected @endif>50~59歳</option>
            <option value="6" @if ($contact->age === 6) selected @endif>60歳~</option>
        </select>
        <br>

        <p>問い合わせ内容</p>
        <textarea name="contact" id="" cols="30" rows="10">{{$contact->contact}}</textarea>

        <input type="checkbox" name="caution" id="" value="1">注意事項に同意
        <br>

        <input type="submit" value="登録">
    </form>
</body>
</html>
