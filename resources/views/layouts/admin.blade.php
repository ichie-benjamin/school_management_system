<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <title>Pathshala - Responsive Education Template</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">--}}
    <link href="{{ asset('css/chartist.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/owl.carousel.min.cs') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">

    <!-- Fonts -->
    <link href='../../../../../../fonts.googleapis.com/css6ea3.css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" media="screen">

</head>
<body>

@include('partials.admin.top-nav')


<div class="parent-wrapper" id="outer-wrapper">
    <!-- SIDE MENU -->
@include('partials.admin.side-nav')

    <!-- MAIN CONTENT -->
    <div class="main-content" id="content-wrapper">


        @yield('main')


        <div class="menu-togggle-btn">
            <a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
        </div>
        <div class="dash-footer col-lg-12">
            <p>Copyright Benx Technologies</p>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jQuery_v3_2_0.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.j') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/owl.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/Chart.min.js') }}"></script>
<script src="{{ asset('plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/js.js') }}"></script>

</body>
</html>