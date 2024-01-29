

<a wire:key="" wire:navigate href="/library/{{$book->id}}" id="book"  class="group w-56 flex flex-col" wire:key="{{$book->id}}">
    <img class="w-56 h-72 rounded-lg" src="{{asset('storage/images/' . $book->cover_path)}}" alt="{{$book->title}} cover "/>
    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out ">
        <p class="truncate">{{$book->title}}</p>
    </div>
</a>
