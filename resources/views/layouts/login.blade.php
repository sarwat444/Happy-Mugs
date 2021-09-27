<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Login Cover Page</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/assets/css/forms/switches.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/assets/css/style.css')}}">
</head>
<body class="form">


    <div class="form-container">


          @yield('content')
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assets/admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/admin/assets/js/authentication/form-1.js')}}"></script>

</body>
</html>
