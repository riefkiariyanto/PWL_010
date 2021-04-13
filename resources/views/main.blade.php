<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href={{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400') }}>
    <link rel="stylesheet" href={{ asset('/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('/css/templatemo-style.css')}}>

</head>
<body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')


    <script src={{ asset('/js/jquery-1.11.3.min.js') }}></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src= {{ asset('/https://www.atlasestateagents.co.uk/javascript/tether.min.js') }}></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
    <script src={{ asset('/js/bootstrap.min.js') }}></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
    <script>
        function Click() {
            var doc = document.getElementsByClassName('nav-link');
            doc.className += ' active';
        }
    </script>
</body>
</html>
