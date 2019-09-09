<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ !empty($seo['title']) ? $seo['title'] : '' }}</title>
    <meta name="description" content="{{ !empty($seo) ? $seo['description'] : 'description' }}">
    <link rel="icon" href="{{ asset('/images/'.ASSET_DOMAIN.'/favicon.ico') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset(CSS_PATH . '/app.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{--<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>--}}
    @yield('js')
    <script>
        var url = '{{ url('/') }}';
    </script>
</head>
<body>


{{--Header--}}
@include('elements.header')
{{--Body--}}
<div class="body-content">
    @yield('content')
</div>

{{--Footer--}}
@include('elements.footer')

@include('Google.analytic')
</body>