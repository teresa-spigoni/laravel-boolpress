
<body style="padding: 20px;">

    <h1>E' stato creato un nuovo post!</h1>

    <div style="border: 1px solid #000; padding: 20px; margin: 10px">
        <h2>{{$post->title}}</h2>
        <img src="{{$post->pic}}"> <br><br>
        <p>{{$post->content}}</p> <br>
        <i>{{$post->author->name}} {{$post->author->surname}}</i>
    </div>

</body>

