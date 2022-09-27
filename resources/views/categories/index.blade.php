<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toutes les categories</title>
</head>
<body>
    <h1>
        Les categories
    </h1>
    <ul>
        @foreach($categories as $category)
            <li><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
        @endforeach
    </ul>
</body>
</html>
