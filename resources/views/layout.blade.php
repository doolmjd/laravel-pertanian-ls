<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("{{ asset('bghaki.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .sidebar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 15%;
            background-color: #E1AFD1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: #000;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #AD88C6;
            color: #FFE6E6;
        }

        .sidebar h3 {
            display: block;
            background-color: #7469B6;
            color: #FFE6E6;
            text-align: center;
            padding: 32px;
        }

        body .container-full {
            margin-left: 15%;
            padding: 24px;
            background-color: #ffe6e6e0;
            width: 85%;
            min-height: 100%;
            text-align: justify;
            overflow-y: auto;
            box-sizing: border-box;
        }
        .btn-primer {
            background-color: #E1AFD1;
            text-align: center;
            color: black;
            border-radius: 16px
        }
        .btn-primer:hover {
            background-color: #7469B6;
            text-align: center;
            color: #FFE6E6;
            border-radius: 16px
        }
        
        .btn-full{
            padding: 16px;
            width: 100%;
        }

    </style>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li>
                <h3>PDRB Industri</h3>
            </li>
            <li><a href="/">Home</a></li>
            <li><a href="/datas">Data</a></li>
        </ul>
    </div>
    <div class="container-full">
        @yield('content')
    </div>



</body>

</html>
