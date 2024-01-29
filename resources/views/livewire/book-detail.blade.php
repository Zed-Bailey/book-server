<div>
    <div class="flex flex-col align-center space-x-2.5 space-y-2.5 md:flex-row">
        <img src="{{asset('storage/images/' . $book->cover_path)}}" class="w-72 rounded-lg self-center md:self-auto"/>

        <div>
            <h1 class="text-wrap text-2xl font-light">{{$book->title}}</h1>
            <p class="mt-5 text-lg font-semibold">{{$book->authors}}</p>

            <div class="flex justify-evenly mt-10">
                <button class="">Read</button>
                <button>Download</button>
            </div>
        </div>
    </div>

    <hr class="my-10"/>
    <h2 class="text-xl font-semibold">Description</h2>
    <p class="text-just-black-surface">
        {{$book->description}}
    </p>


    <div>
        <button class="border-2 border-red-500 text-red-500 rounded-lg p-2 px-4 hover:bg-red-900" wire:click="deleteClicked">Delete</button>
    </div>

{{--    {{$book}}--}}
</div>
