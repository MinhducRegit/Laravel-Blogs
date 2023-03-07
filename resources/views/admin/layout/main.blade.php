<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Công Ty Regit</title>
  <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
  <meta content="Themesdesign" name="author" />



  <!--Morris Chart CSS -->

  @vite(['resources/css/app.css', 'resources/scss/admin/app.scss',  'resources/scss/client/app.scss'])

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
      <!-- Start header -->
      @include('admin.layout.header')
      <!--End header -->

      <!-- ========== Left Sidebar Start ========== -->
      @include('admin.layout.left_menu')
      <!-- Left Sidebar End -->
        
      <!-- Start content -->
      <div class="content-page">
        <div class="content" id="content">
          @yield('content')
        </div>
      </div>
      <!--End content -->

      <!-- Start footer -->
      @include('admin.layout.footer')
      @yield('js')
      <!--End footer -->
    </div>

    @vite(['resources/js/app.js'])
</body>

</html>
