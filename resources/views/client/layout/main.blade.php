<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 @vite([ 'resources/scss/client/app.scss'])
{{-- Thêm Css vào trang Web --}}
  @yield('css')

  <title>Blogs</title>
</head>
<body>
  <div id="wraper"> 
    @include('client.layout.header')

    @include('client.layout.banner.banner')

      @yield('content')

    {{-- Thêm JS vào trang Web --}}

    @include('client.layout.footer')
  </div>

  @vite(['resources/js/app.js'])
</body>
</html>
