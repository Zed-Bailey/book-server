<div>
    <div class="flex justify-end mb-5">
        <a class="p-2 border-2 border-blue-800 hover:bg-blue-800" wire:navigate href="/library/edit/{{$book->id}}" >Edit Book</a>
    </div>

    <div class="flex flex-col align-center space-x-2.5 space-y-2.5 md:flex-row">
        @if($book->cover_path == null)
            <div class="self-center md:self-auto">
                <div class="w-60 h-96 rounded-lg bg-slate-800 flex flex-col items-center justify-center">
                    <span class="w-10 h-10">
                        <svg class="fill-surface-white" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;}</style></defs><title>no-image</title><path d="M30,3.4141,28.5859,2,2,28.5859,3.4141,30l2-2H26a2.0027,2.0027,0,0,0,2-2V5.4141ZM26,26H7.4141l7.7929-7.793,2.3788,2.3787a2,2,0,0,0,2.8284,0L22,19l4,3.9973Zm0-5.8318-2.5858-2.5859a2,2,0,0,0-2.8284,0L19,19.1682l-2.377-2.3771L26,7.4141Z"></path><path d="M6,22V19l5-4.9966,1.3733,1.3733,1.4159-1.416-1.375-1.375a2,2,0,0,0-2.8284,0L6,16.1716V6H22V4H6A2.002,2.002,0,0,0,4,6V22Z"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g></svg>
                    </span>
                </div>
            </div>
        @else
            <img src="{{asset('storage/images/' . $book->cover_path)}}" class="w-72 rounded-lg self-center md:self-auto" alt="{{$book->title}} cover "/>
        @endif

        <div>
            <h1 class="text-wrap text-2xl font-light">{{$book->title}}</h1>
            <p class="mt-5 text-lg font-semibold">{{$book->authors}}</p>

            <div class="flex justify-evenly mt-10">

                <a href="/reader/{{$book->id}}" class="border-2 rounded-lg bg-blue-800 p-2 px-4">Read</a>
                <a href="/download/{{$book->id}}" class="border-2 rounded-lg bg-blue-800 p-2 px-4">Download</a>
            </div>
        </div>
    </div>

    <hr class="my-10"/>
    <h2 class="text-xl font-semibold">Description</h2>
    <p class="text-just-black-surface">
        {{$book->description}}
    </p>


    <div class="mt-32">
        <button class="border-2 border-red-500 text-red-500 rounded-lg p-2 px-4 hover:bg-red-900" wire:click="deleteClicked">Delete</button>
    </div>

{{--    {{$book}}--}}
</div>
