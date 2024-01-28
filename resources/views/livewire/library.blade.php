<div>
    @php
        if($searchQuery == '') {
            $books = App\Models\Book::all();
        } else {
            $books = App\Models\Book::where('title', 'like', $this->searchQuery . '%')->get();
        }
    @endphp


    <div class="w-full md:w-3/4 lg:w-1/2 ">
        <input type="text" wire:model.live="searchQuery" class="w-full p-2 rounded-lg bg-transparent border-surface-white border-2 focus:outline-none focus:bg-surface-white focus:text-just-black" placeholder="Search books by title"/>
    </div>

    <div class="mt-10">

        @if($searchQuery == '')
            <x-alphabetical-grid :books="$books"></x-alphabetical-grid>
        @else
            <p>{{count($books)}} results for {{$searchQuery}}</p>
            <div class="grid grid-cols-4">
                @foreach($books as $b)
                    <div class="">
                        <a wire:navigate href="/library/{{$b->id}}" class="group w-56 flex flex-col ">
                            <img class="w-56 h-72 rounded-lg" src="{{asset('storage/images/' . $b->cover_path)}}" alt="{{$b->title}} cover "/>
                            <div class="hidden group-hover:block transition-transform duration-300 ease-in-out ">
                                <p class="truncate">{{$b->title}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>


        @endif


    </div>

</div>
