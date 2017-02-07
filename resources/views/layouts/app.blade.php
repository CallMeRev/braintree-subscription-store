<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cashier App</title>

    {{-- CSS --}}
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js') }}"></script>
    <script src="{{ asset('https://js.braintreegateway.com/js/braintree-2.30.0.min.js') }}"></script>

</head>
<body>

    {{-- HEADER --}}
    <div id="site-header">
        @include('partials.header')
    </div>


    {{-- MAIN --}}
    <main id="site-main">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <div id="site-footer">
        @include('partials.footer')
    </div>

    {{-- JS --}}
    <!-- <script src="js/all.js"></script> -->

</body>
</html>
