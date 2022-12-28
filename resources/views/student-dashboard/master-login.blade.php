<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME','University Maintenance')}}</title>
    @include('master.head')
    @section('css')

    @endsection
    @livewireStyles


</head>
<body class="h-100">

@yield('content')


@include('master.footer-script')
@stack("modals")
@stack("css")
@stack("script")
@livewireScripts
@stack("js")

</body>
</html>
