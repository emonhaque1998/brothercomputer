<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- loader-->
    <link href="{{asset("assets/css/pace.min.css")}}" rel="stylesheet" />
    <script src="{{asset("assets/js/pace.min.js")}}"></script>
    <!--plugins-->
    <link href="{{asset("assets/plugins/simplebar/css/simplebar.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/plugins/metismenu/css/metisMenu.min.css")}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/bootstrap-extended.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/icons.css")}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!--Theme Styles-->
    <link href="{{asset("assets/css/dark-theme.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/semi-dark.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/header-colors.css")}}" rel="stylesheet" />
    @yield('style-css')
    <title>Dashkote - Bootstrap5 Admin Template</title>
</head>

<body>
<!--start wrapper-->
<div class="wrapper">
    {{--    This is a side bar  --}}
    @include("components.admin.left-sidebar")
    {{--    This is a side bar  --}}

    <!--start top header-->
    @include("components.admin.header")
    <!--end top header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        @yield("content")
        <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    @include('components.admin.fotter')
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    @include('components.admin.switcher')
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

</div>
<!--end wrapper-->



<!-- JS Files-->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/plugins/simplebar/js/simplebar.min.js")}}"></script>
<script src="{{asset("assets/plugins/metismenu/js/metisMenu.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<!--plugins-->
<script src="{{asset("assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js")}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@yield("script-js")
<!-- Main JS-->
<script src="{{asset("assets/js/main.js")}}"></script>
@yield("my-scripts")

</body>

</html>
