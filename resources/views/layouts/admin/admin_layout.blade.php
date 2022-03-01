<!DOCTYPE html>
<html lang="en">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=e  dge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="ActiveExperts">
    <meta name="keywords" content="ActiveExperts">
    <meta name="author" content="ActiveExperts">
    <title>Contacts - Active Experts</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- images -->
    <link rel="apple-touch-icon" href="{{asset('admin/css/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/css/images/ico/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i')}}">
     <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/css/tables/extensions/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/css/tables/extensions/rowReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendors/css/forms/icheck/custom.css')}}">

     <!-- BEGIN: Theme CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/bootstrap-extended.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/colors.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/components.css')}}">
      <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/core/menu/menu-types/vertical-menu.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/core/colors/palette-gradient.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/pages/app-contacts.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/pages/login-register.css')}}">

     <!-- BEGIN: Custom CSS-->
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/assets/css/style.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/custom.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('admin/css/css/style.css')}}">
     </head>
     <body class="vertical-layout vertical-menu content-detached-left-sidebar app-contacts  fixed-navbar" data-open="click" data-mnu="vertical-menu" data-col="content-detached-left-sidebar">
     <div class="wrapper">
         @include('layouts.admin.header')
         @include('layouts.admin.sidebar')
         @yield('content')
      </div>


     <!-- BEGIN: Vendor JS-->
     <script src="{{asset('admin/css/vendors/js/vendors.min.js')}}"></script>
     <!-- BEGIN: Page Vendor JS-->
     <script src="{{asset('admin/css/vendors/js/tables/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('admin/css/vendors/js/extensions/jquery.raty.js')}}"></script>
     <script src="{{asset('admin/css/vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
     <script src="{{asset('admin/css/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
     <script src="{{asset('admin/css/vendors/js/tables/datatable/dataTables.rowReorder.min.js')}}"></script>
     <script src="{{asset('admin/css/vendors/js/forms/icheck/icheck.min.js')}}"></script>
      <!-- BEGIN: Theme JS-->
     <script src="{{asset('admin/css/js/core/app-menu.js')}}"></script>
     <script src="{{asset('admin/css/js/core/app.js')}}"></script>
     <!-- BEGIN: Page JS-->
     <script src="{{asset('admin/css/js/scripts/pages/app-contacts.js')}}"></script>
     <script src="https://kit.fontawesome.com/bb02d19058.js" crossorigin="anonymous"></script>
     <script src="http://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>

   
     @yield('script')
     </body>
     </html>




























