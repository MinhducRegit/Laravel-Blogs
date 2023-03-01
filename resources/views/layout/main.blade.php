<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{-- Thêm Css vào trang Web --}}
  @yield('css')

  <title>Blogs</title>
</head>
<body>
  @yield('content')

  <h1>Trang chủ Blogs</h1>
{{-- Thêm JS vào trang Web --}}
  @yield('js') 

</body>
</html>
