<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    @vite('resources/css/app.css')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="/js/epub.min.js"></script>

    <style>


        .epub-container {
            min-width: 320px;
            margin: 0 auto;
            position: relative;
        }

        .epub-container .epub-view > iframe {
            background: white;
            box-shadow: 0 0 4px #ccc;
            /*margin: 10px;
            padding: 20px;*/
        }


    </style>
    <title>Reader</title>
</head>
<body class="p-10 mx-auto">

<script>
    let url = "{{asset('storage/books/' . $book->file_name)}}";
    var book = ePub(url);
    var rendition = book.renderTo(document.body, {
        manager: "continuous",
        flow: "scrolled",
        width: "60%"
    });
    var displayed = rendition.display();
    displayed.then(function(renderer){
        console.log(renderer)
    });

    // Navigation loaded
    book.loaded.navigation.then(function(toc){
        console.log(toc);
    });


</script>

</body>
</html>
