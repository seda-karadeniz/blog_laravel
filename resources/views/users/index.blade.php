<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toutes les auteurs</title>
</head>
<body>
<h1>
    Les auteurs
</h1>
<ul>
    @foreach($users as $user)
        <li><a href="/users/{{$user->id}}">{{$user->name}}</a></li>
    @endforeach
</ul>
</body>
</html>
