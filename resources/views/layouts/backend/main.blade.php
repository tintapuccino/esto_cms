<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/sweetalert2.css">
    <!-- <link rel="stylesheet" type="text/css" href="/assets/css/vendors/tree.css"> -->
    <link href="/assets/css/vendors/jstree.bundle.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
    <!-- latest jquery-->
    @yield('css')

    <script src="/assets/js/jquery-3.5.1.min.js"></script>
  </head>
  <!-- <body onload="startTime()"> -->
  <body>
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      @include('layouts.backend.header')
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        @include('layouts.backend.sidebar')
        <div class="page-body">
          @yield('container')
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 ?? KEMNAKER RI  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="/assets/js/scrollbar/simplebar.js"></script>
    <script src="/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="/assets/js/sidebar-menu.js"></script>
    <script src="/assets/js/chart/chartist/chartist.js"></script>
    <script src="/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/assets/js/chart/knob/knob.min.js"></script>
    <script src="/assets/js/chart/knob/knob-chart.js"></script>
    <script src="/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/assets/js/notify/bootstrap-notify.min.js"></script>
    <!-- <script src="/assets/js/dashboard/default.js"></script> -->
    <script src="/assets/js/notify/index.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="/assets/js/typeahead/handlebars.js"></script>
    <script src="/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="/assets/js/typeahead-search/handlebars.js"></script>
    <script src="/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="/assets/js/tooltip-init.js"></script>
    <script src="/assets/js/select2/select2.full.min.js"></script>
    <script src="/assets/js/select2/select2-custom.js"></script>
    <script src="/assets/js/sweet-alert/sweetalert.min.js"></script>
    <!-- <script src="/assets/js/tree/jstree.min.js"></script>
    <script src="/assets/js/tree/tree.js"></script> -->
    <script src="/assets/js/jstree/jstree.bundle.js"></script>
    <!-- <script src="/assets/js/sweet-alert/app.js"></script> -->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/assets/js/script.js"></script>
    @yield('javascript')
    <!-- <script src="/assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>