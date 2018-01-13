<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NoMore Design System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>
    <body>

        @include('includes.navigation-top')

        @include('includes.navigation-left')

        <div>
            
            @yield('content')

        </div>

        @yield('scripts')

    </body>
</html>
