<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Name - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

       <!--  <link href="css/style.css" rel="stylesheet"> -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/jquery-ui.css" rel="stylesheet">
        <link href="/css/jquery-ui.theme.css" rel="stylesheet">
        <link href="/css/jquery-ui.structure.css" rel="stylesheet">
        <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row header">
                        @include('templates.header')

                    </div>

                    <div class="row">
                        @yield('content')

                    </div> 

                </div>

            </div>
                    <div class="row footer">
                        @include('templates.footerContent')
                    </div>
        </div>
       

       
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery-ui.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>
