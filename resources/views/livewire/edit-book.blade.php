<div class="flex flex-col justify-center items-center ">

    <form wire:submit="saveChanges" class="w-full max-w-6xl">

        <div class="flex flex-col items-center justify-center">
            <div class="w-56" >
                @if($newCoverPhoto)
                    <img src="{{$newCoverPhoto->temporaryUrl()}}" />

                @elseif($book->cover_path != null)
                    <img src="{{asset('storage/images/' . $book->cover_path)}}" />
                @else
                    <div class="w-full h-80 bg-gray-700 rounded-lg flex flex-col justify-center items-center">
                        <div class="w-7 h-7">
                            <svg class="fill-surface-white" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;}</style></defs><title>no-image</title><path d="M30,3.4141,28.5859,2,2,28.5859,3.4141,30l2-2H26a2.0027,2.0027,0,0,0,2-2V5.4141ZM26,26H7.4141l7.7929-7.793,2.3788,2.3787a2,2,0,0,0,2.8284,0L22,19l4,3.9973Zm0-5.8318-2.5858-2.5859a2,2,0,0,0-2.8284,0L19,19.1682l-2.377-2.3771L26,7.4141Z"></path><path d="M6,22V19l5-4.9966,1.3733,1.3733,1.4159-1.416-1.375-1.375a2,2,0,0,0-2.8284,0L6,16.1716V6H22V4H6A2.002,2.002,0,0,0,4,6V22Z"></path><rect id="_Transparent_Rectangle_" data-name="<Transparent Rectangle>" class="cls-1" width="32" height="32"></rect></g></svg>
                        </div>

                        <p class="font-bold">No cover</p>
                    </div>
                @endif
            </div>

            <div class="mt-3">
                <label>
                    <span class="p-2 hover:cursor-pointer underline-offset-0 underline-none hover:underline hover:font-bold hover:underline-offset-4 hover:transition-all hover:ease-in-out hover:duration-300 ">Upload a new cover image</span>
                    <input wire:model="newCoverPhoto" type="file" accept="image/jpeg" class="hidden"/>
                </label>

            </div>

        </div>




        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium">Book Title</label>
            <input wire:dirty.class="bg-amber-200" type="text" name="title" wire:model.blur="newTitle" placeholder="Book Title" value="{{$book->title}}" id="title" class=" text-xl bg-gray-50 border border-gray-300 text-gray-900 rounded-lg  block w-full p-2.5" />
            <span class="text-xs text-red-500">
                @error('title') {{$message}} @enderror
            </span>
        </div>


        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium ">Description</label>
            <textarea wire:dirty.class="bg-amber-200" wire:model.blur="newDescription" type="text" name="description" placeholder="Book Description" id="description" class=" h-48 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" >{{$book->description}}</textarea>
            <span class="text-xs text-red-500">
                @error('description') {{$message}} @enderror
            </span>
        </div>

        @error('saveError')
            <div class="text-lg text-red-500">
                {{$message}}
            </div>
        @enderror


        <button type="submit" class="p-2 rounded-md bg-blue-800">
            Save Changes
        </button>
    </form>

</div>
