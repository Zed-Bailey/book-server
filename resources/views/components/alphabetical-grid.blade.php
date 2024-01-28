<div>
    <div class="sticky w-full top-16  bg-just-black">
        <p>A</p>
    </div>



    @foreach($books as $b)
        <a wire:navigate href="/library/{{$b->id}}" class="group w-56 flex flex-col">
            <img class="w-56 h-72 rounded-lg" src="{{asset('storage/images/' . $b->cover_path)}}" alt="{{$b->title}} cover "/>
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out ">
                <p class="truncate">{{$b->title}}</p>
            </div>
        </a>

    @endforeach

    <div class="sticky w-full top-16 bg-just-black">
        <p>B</p>
    </div>
    <div class="bg-red-50 w-full h-96"></div>
    <div class="sticky w-full top-16 bg-just-black">
        <p>C</p>
    </div>
    <div class="bg-red-50 w-full h-96"></div></div>
