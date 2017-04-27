<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Joe Doherty <io@spjz.uk>" />
        <meta name="keywords" content="" />
        {{ get_title() }}
        {{ stylesheet_link('css/app.css') }}
        {{ stylesheet_link('bower_components/font-awesome/css/font-awesome.min.css') }}
        <!--{{ stylesheet_link('https://fonts.googleapis.com/css?family=Oswald') }}-->
    </head>
    <body>
        <div class="container">
            {{ content() }}
        </div>
        {{ javascript_include('bower_components/jquery/dist/jquery.js') }}
        {{ javascript_include('bower_components/what-input/what-input.js') }}
        {{ javascript_include('bower_components/foundation-sites/dist/foundation.js') }}
        {{ javascript_include('js/app.js') }}
    </body>
</html>
