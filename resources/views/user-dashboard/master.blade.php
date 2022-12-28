<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>{{env('APP_NAME','University')}}</title>
    <meta name="generator" content="Universty">
    <meta name="theme-color" content="#4861df">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    @include('user-dashboard.head')
    @section('css')

    @endsection
    @livewireStyles
</head>
<body class="u-body u-xl-mode" data-lang="en">
@include('user-dashboard.header')
@section('content')

@endsection

{{$slot}}
@include('user-dashboard.footer')
@include('user-dashboard.footer-script')
@stack("modals")
@stack("css")
@stack("script")
@livewireScripts
@stack("js")
<script>
    window.Livewire.on('quickAlert', postId => {
        toastr.success(postId, "Thank You", {
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
</body>
</html>
