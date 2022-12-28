<!doctype html>
<html lang="en">
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
<body>
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<div id="main-wrapper">

    @include('master.header')
    @include('master.sidebar')
    @section('content')

    @endsection

    {{ $slot }}

    @include('master.footer')
    @include('master.footer-script')
    @stack("modals")
    @stack("css")
    @stack("script")
    @livewireScripts
    @stack("js")
    <script>
        window.Livewire.on('quickAlert', postId => {
            toastr.success(postId, "Data", {
                positionClass: "toast-bottom-left",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        })
    </script>
</div>

</body>
</html>
