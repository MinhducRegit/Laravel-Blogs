<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
{{-- Thêm Css vào trang Web --}}
  @yield('css')

  <title>Blogs</title>
</head>
<body>
  <div id="wraper"> 
    @include('layout.header')

    @include('layout.banner.banner')

      @yield('content')

    {{-- Thêm JS vào trang Web --}}

    @include('layout.footer')
  </div>
</body>
</html>
