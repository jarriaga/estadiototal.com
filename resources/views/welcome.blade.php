<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,500" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




        <script src="https://use.fontawesome.com/95088d75b6.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="/css/styles.css" rel="stylesheet" type="text/css">

        <link href="/css/welcome.css" rel="stylesheet" type="text/css">
    </head>
    <body >
        <div class="overlay"></div>
        <nav class="navbar navbar-default navbar-static-top navbar-homepage">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <!-- <a class="navbar-brand" href="{{ url('/') }}"> -->
                    <a  class="navbar-brand" href="/"><img src="/images/Estadiototal-03-ok.png" class="menu-logo" ></a>

                    <!-- </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @include('layouts.menu')
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container ">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="title m-b-md text-center">
                            Fútbol, nuestra pasión!<br>
                            <h3 class="white-color text-center">
                            Controla y Administra tus torneos de futbol
                            </h3>
                        </div>


                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12 text-center">
                            <a class="btn btn-lg btn-create " href="{{ url('/register') }}">
                                <h3>Crear una cuenta</h3>
                            </a>
                        </div>

                </div>
            </div>

        </div>
    </body>
</html>
