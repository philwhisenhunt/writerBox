<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     <!-- The post goes here -->

     foreach($snippets as $snippet)
     <h3>{{ $snippets->title }}</h3>
     <p>{{ $snippets->full_entry }}</p>
     @endforeach
        
        <script src="" async defer></script>
    </body>
</html>