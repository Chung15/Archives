<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Name - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
    
    <div class="container">
        
        <div class="header">
            @yield('pageHeader')

        </div>

        @yield('content')

        <div class="aside_content">
            @yield('aside_content')
        </div>

        <div class="footer">
            <!--  @yield('footer') -->
            <!--  @include('templates.footerContent') -->
        </div>
    </div>

   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    </body>
</html>
