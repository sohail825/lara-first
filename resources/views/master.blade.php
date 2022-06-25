<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Home</title>
    <style>
        .error {
            color: red;
        }

        #banner {
            background: url('/pic/banner.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>
    {{-- {{View::make('header')}}

    --}}
    {{View::make('layouts.app')}}
    @yield('content')
    {{View::make('footer')}}

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</body>

</html>