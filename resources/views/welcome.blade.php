<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">    

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row py-5 gap-3">
                @foreach ($flights as $flight)
                    <div class="card col">
                        <div class="card-body">
                            <p class="card-title">ID Code departure: <small class="text-muted">{{ $flight->code_departure }}</small></p>
                            <p class="card-title">ID Code arrival: <small class="text-muted">{{ $flight->code_arrival }}</small></p>
                            <p class="card-title">Price: <small class="text-muted">{{ $flight->price }}</small></p>
{{--                             @foreach($airports as $airport)
                                <p class="card-title">Airport id: <small class="text-muted">{{ $airport->name }}</small></p>
                            @endforeach --}}

                            <h1>{{ $flight->code_departure->name }}</h1>
                        </div>
                    </div>

                @endforeach

                {{-- @dd($flights); --}}
                {{-- @dd($flight); --}}
            </div>
        </div>
    </body>
</html>
