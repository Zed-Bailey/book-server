<div>

    @php
    $alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    @endphp

    @foreach($alphabet as $letter)
        @php

        $filtered = $books->filter(function(\App\Models\Book $book) use($letter) {
            error_log($letter);
            error_log(str_starts_with(strtoupper($book->title), $letter) ? "true" : 'false');
            return str_starts_with(strtoupper($book->title), $letter);
        })
        @endphp
        <div class="sticky w-full top-16  bg-just-black">
            <p class="font-bold text-lg p-2">{{$letter}}</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

            @foreach($filtered as $b)
                <x-book-card :book="$b"/>
            @endforeach
        </div>
    @endforeach

</div>
