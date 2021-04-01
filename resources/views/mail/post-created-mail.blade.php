
<body style="padding: 20px;">

    <h1>A new post has been created!</h1> <br> <br>

    <div style="min-width:200px; padding: 0 20px 20px 20px; margin: 10px">
        <h2>Post title: {{$post->title}}</h2>
        <p>Post content: {{$post->content}}</p>
        Author: <i>{{$post->author->name}} {{$post->author->surname}}</i>
    </div>

</body>

