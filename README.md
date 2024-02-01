# Book Server

A locally hosted server to manage and store your kindle books

This project came about as i was frustrated with having to plug my kindle paperwhite in to transfer books to with no options to edit the books title, cover image or other meta data

## Goals
- provide an easy way to upload .epub books
- provide functionality to edit the books meta data
- provide a web page to be accessed by kindle experimental browser that allows me to download a book to the device

## Development

This application is developed with PHP and the TALL stack (TailwindCSS, Alpine.js, Laravel, Livewire).
Vite is used to compile the TailwindCSS styles.

The ui currently is very simple and in future will be refactored to be nicer

make sure to run the `php artisan storage:link` command to create the system link to the storage directory

## Kindle Book directory
There is minimal styling applied to the kindle views due to the limitations of the kindle browser and the fact the browser only display black + white

books can be accessed on the kindle by navigating to the `/kindle` route. This will list all books added grouped alphabetically. 

Clicking on one of the links will take you to the books detail (`/kindle/{id}`) where the cover image, title, authors and description is displayed.
Clicking the download link will download the book to your device.

## Storage

Uploaded books are currently stored at `storage/app/public/books` and extracted cover images at `storage/app/public/images`
