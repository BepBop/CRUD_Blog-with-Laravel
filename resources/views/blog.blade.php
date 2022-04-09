<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

<article>
    <?php foreach ($blog as $post) : ?>
    <h1><a href="/blog/post-{{ $post->id }}">{{ $post->title }}</a></h1>
    <h2>{{$post->excerpt}}</h2>
    <?php endforeach ?>
</article>

</body>
</html>
