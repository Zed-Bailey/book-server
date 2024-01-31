<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kindle Book Directory</title>
</head>
<body>

<h1>Kindle Book Directory</h1>

@php
    $alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
@endphp

@foreach($alphabet as $letter)
    @php

        $filtered = $books->filter(function(\App\Models\Book $book) use($letter) {
            return str_starts_with(strtoupper($book->title), $letter);
        })
    @endphp
    <div >
        <h4>{{$letter}}</h4>
    </div>
    <div >
        <ul>
            @foreach($filtered as $b)
            <li>
                <a href="/kindle/{{$b->id}}">{{$b->title}}</a>
            </li>
            @endforeach
        </ul>

    </div>
@endforeach

</body>
</html>
