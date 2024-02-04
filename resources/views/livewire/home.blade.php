<div>
@if(count($allBooks) > 0)
    @php
    $book = $allBooks[0];
    @endphp

    <div class="flex space-x-2.5">
        <input wire:model.live="searchQuery" class="w-full p-2 border-2 border-surface-white text-surface-white bg-surface-white bg-opacity-0 rounded-lg
        focus:text-just-black focus:bg-opacity-100 focus:transition-all focus:ease-in-out focus:duration-300"
               placeholder="Search Books..."
        />
        <a class="p-2 bg-surface-white rounded-lg" href="{{$searchQuery != '' ? '/library?searchQuery=' . $searchQuery : '#'}}">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                <path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
            </svg>
        </a>
    </div>

    <div class="mt-28">
        @php
            // gets the last 5 books added
            $recentlyAdded = \App\Models\Book::latest()->take(5)->get();
        @endphp
        <h1 class="text-2xl mb-5">Recently Added</h1>
        <div class="flex flex-row overflow-scroll gap-5">
            @foreach($recentlyAdded as $ra)
                <div class="relative">
                    <span class="absolute top-0 right-0 rounded-full bg-red-600 px-2 py-1">
                        NEW
                    </span>
                    <x-book-card :book="$ra"></x-book-card>
                </div>

            @endforeach
        </div>
    </div>
@endif
</div>
