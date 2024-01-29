<div>
    @php
        $books = $this->filterModels();
    @endphp


    <div class="w-full md:w-3/4 lg:w-1/2 ">
        <input type="text" wire:model.live="searchQuery" class="w-full p-2 rounded-lg bg-transparent border-surface-white border-2 focus:outline-none focus:bg-surface-white focus:text-just-black" placeholder="Search books by title"/>
    </div>

    <div class="mt-10" id="library">

        @if($searchQuery == '')
            <x-alphabetical-grid :books="$books"></x-alphabetical-grid>
        @else
            <p>{{count($books)}} results for {{$searchQuery}}</p>
            <div class="grid grid-cols-4">
                @foreach($books as $b)
                    <div class="" id="book">
                        <x-book-card :book="$b"/>
                    </div>
                @endforeach

            </div>


        @endif


    </div>

</div>
