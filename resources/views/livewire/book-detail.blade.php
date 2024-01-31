<div>
    <div class="flex justify-end mb-5">
        <a class="p-2 border-2 border-blue-800 hover:bg-blue-800" wire:navigate href="/library/edit/{{$book->id}}" >Edit Book</a>
    </div>

    <div class="flex flex-col align-center space-x-2.5 space-y-2.5 md:flex-row">
        <img src="{{asset('storage/images/' . $book->cover_path)}}" class="w-72 rounded-lg self-center md:self-auto"/>

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
