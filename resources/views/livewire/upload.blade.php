
<div>

    <h1 class="text-3xl mb-5 font-semibold">Upload a new book</h1>

    <form wire:submit="saveBook" class="flex flex-col items-center" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center justify-center w-full">



            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500">PDF, EPUB</p>
                    @error('bookUpload')
                    <p class="text-red-500">File is required</p>
                    @enderror
                </div>

                <input wire:model="bookUpload" id="dropzone-file" type="file" class="hidden" name="newFile" accept="application/epub+zip, application/pdf" />
            </label>



        </div>



        <button type="submit" class="bg-slate-800 p-2 rounded-md w-48 mt-10">Upload</button>
    </form>
</div>
