<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Happy Mugs </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/admin/assets/img/favicon.ico')}}"/>
    <link href="{{asset('assets/admin/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/admin/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

         <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/plugins/table/datatable/datatables.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/plugins/table/datatable/dt-global_style.css')}}">
           <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/assets/css/forms/theme-checkbox-radio.css')}}">
           <!-- BEGIN PAGE LEVEL PLUGINS -->
         <link href="{{asset('assets/admin/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
          <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/assets/css/style.css')}}">
         <!-- END PAGE LEVEL PLUGINS -->


           @yield('css')
</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->


      <!-- fixed-top-->
        @include('admin.includes.header')
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        @include('admin.includes.sidebar')

        @yield('content')
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        @include('admin.includes.footer')



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="{{asset('assets/admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
   <script src="{{asset('assets/admin/bootstrap/js/popper.min.js')}}"></script>
   <script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
   <script src="{{asset('assets/admin/assets/js/app.js')}}"></script>

    <script src="{{asset('assets/js/jquery-repeater.min.js')}}"></script>
    <script src="{{asset('assets/js/form-repeater.int.js')}}"></script>

   <script>
       $(document).ready(function() {
           App.init();
       });
   </script>



   <script src="{{asset('assets/admin/assets/js/custom.js')}}"></script>
   <!-- END GLOBAL MANDATORY SCRIPTS -->

   <script src="{{asset('assets/admin/plugins/table/datatable/datatables.js')}}"></script>

   <script>
        $('#images').DataTable( {
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "order": [[ 3, "desc" ]],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
      } );
    </script>


    <script>
    $(function(){
        $("#create-motive").on('submit', function(e) {
            let characters = [];
            // var fd = new FormData($("#create-form"))
            $(".inner-in").each(function(ind, elm) {
                // fd.append('services[]',elm.value);
                characters.push(elm.value)
            });
            $("#characters").val(JSON.stringify(characters));

            // return false;
        })
    })
</script>

      <!-- END PAGE LEVEL SCRIPTS -->

   <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
   @yield('script')
  <!-- BEGIN VENDOR JS-->


</body>
</html>
