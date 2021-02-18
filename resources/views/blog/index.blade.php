<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <section class="posts_list">
            @foreach ($blog as $post)
            <div class="single_post">
                <h2> {{ $post->title }} </h2>
                <p> {{ $post->body }} </p>
            </div>
            @endforeach
    </section>

</body>
</html>