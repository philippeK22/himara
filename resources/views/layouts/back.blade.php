<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin Dashboard</title>

    <link rel="preconnect" href={{ asset("https://fonts.gstatic.com") }}>
    <link href={{ asset("https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap") }}
        rel="stylesheet">
    <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>

    <link rel="stylesheet" href={{ asset("vendors/iconly/bold.css") }}>

    <link rel="stylesheet" href={{ asset("vendors/perfect-scrollbar/perfect-scrollbar.css") }}>
    <link rel="stylesheet" href={{ asset("vendors/bootstrap-icons/bootstrap-icons.css") }}>
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    <link rel="shortcut icon" href={{ asset("images/favicon.svg") }} type="image/x-icon">
</head>

<body>

    <div id="app">


            {{-- @include('partials.navbarBackoffice') --}}



        <div id="main">
            @include('partials.hamburgerBack')
            @yield('content')

        </div>

    </div>




    <script src={{ asset("vendors/perfect-scrollbar/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("js/bootstrap.bundle.min.js") }}></script>

    <script src={{ asset("vendors/apexcharts/apexcharts.js") }}></script>
    <script src={{ asset("js/pages/dashboard.js") }}></script>

    <script src={{ asset("js/main.js") }}></script>
</body>

</html>
