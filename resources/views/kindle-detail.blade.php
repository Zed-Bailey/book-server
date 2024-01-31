<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kindle Book Directory</title>
    <style>
        .mb {
            margin-bottom:50px;
        }
    </style>
</head>
<body style="padding: 10px;">

<div class="mb">
    <a href="/kindle" style="padding: 14px; background-color: #e2e8f0"><- BACK</a>
</div>

@if($book->cover_path == null)
    <div style="width: 250px; height: 350px; background-color: #718096">
        <p style="color: white; padding: 20px 50px;">No cover image</p>
    </div>
@else
    <img src="{{asset('storage/images/' . $book->cover_path)}}" style="width: 250px;"/>
@endif

<div class="mb">
    <h2>{{$book->title}}</h2>
    <p>{{$book->authors}}</p>
</div>


<div class="mb">
    <a href="/download/{{$book->id}}" style="padding: 14px; background-color: #e2e8f0">DOWNLOAD</a>
</div>

<h3>Description</h3>
<p>
    {{$book->description}}
</p>
</body>
</html>
