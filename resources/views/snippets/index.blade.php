<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
     <h1>Snippets</h1>

     @foreach ($snippets as $snippet)
       <a href="/{$snippet->title"><h3 class='snippet-title'>{{ $snippet->title }}</h3></a>

        <p>{{ $snippet->full_entry }}</p>
     @endforeach
        
        <script src="" async defer></script>
    </body>
</html>