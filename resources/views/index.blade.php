<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NoMore Design System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}" />
    
    </head>
    <body>


        @include('includes.navigation-top')

        @include('includes.navigation-left')

        <div class="contain mx-auto max-w-lg mt-16 md:mt-32">

            <div>
                
                @foreach ($views as $view)

                    <h4>{{ $view }}</h4>

                    <div id="{{$view}}"></div>

                    @include('pages.' . $view)

                    <hr>

                @endforeach

            </div>

            @yield('scripts')

        </div>

    </body>
</html>
