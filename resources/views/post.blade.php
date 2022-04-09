<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post-{{$post->id}}</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<article>
    <h1>{{$post->title}}:</h1>
    <h2>
        {{$post->body}}

    </h2>

    <p><a href="/dashboard/">Back</a></p>
</article>
</body>
</html>