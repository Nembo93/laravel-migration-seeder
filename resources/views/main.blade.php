<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="bg-light">
        <div>
            <h2>Tutti i treni</h2>
            @foreach ($trains as $train)
            <div>
                <h3>{{$train['company']}}</h3>
                <div>
                    <span><strong>{{$train['trip_date']}}</strong></span>
                    <span><strong>{{$train['start_station']}}</strong></span>
                    <span><strong>{{$train['leave_time']}}</strong></span>
                </div>
                <div>
                    <span><strong>{{$train['destination']}}</strong></span>
                    <span><strong>{{$train['arrival_time']}}</strong></span>
                </div>  
            </div> 
            @endforeach
        </div>

    </main>

</body>

</html>
