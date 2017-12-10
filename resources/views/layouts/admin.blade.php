<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel CRUD Operations - Basic</title>

        <!-- bootstrap minified css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- bootstrap minified js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        {{-- <link href="/vendor/jasekz/laradrop/css/styles.css" rel="stylesheet" type="text/css"> --}}
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js" ></script>
        {{-- <script src="/vendor/jasekz/laradrop/js/enyo.dropzone.js"></script>
        <script src="/vendor/jasekz/laradrop/js/laradrop.js"></script>
 --}}


        <!-- custom CSS -->
        <style>
        h1{font-size:23px;}
        .pull-left h2{margin-top:0;font-size:20px;}
        </style>
    </head>

    <body>
        <div class="container">
            <h1>CRUD (Create Read Update Delete) Operations in Laravel</h1>

            <div class="laradrop" laradrop-csrf-token="{{ csrf_token() }}"> </div>
            @yield('content')
        </div>
    </body>


    <script>
    jQuery(document).ready(function(){
        jQuery('.laradrop').laradrop();
    });
    </script>
</html>