<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    @forelse($posts as $post)
        <li>titer is:<strong>{{$post->titre}}</strong></li>
        <li>image is:<strong>{{$post->image}}</strong></li>
        <li>type is:<strong>{{$post->type}}</strong></li>
        <li>text is:<strong>{{$post->text}}</strong></li>
    @empty
        <h1>NO NewsPaper</h1>
    @endforelse
</body>
</html>
