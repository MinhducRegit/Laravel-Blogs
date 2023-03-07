<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css'])
  <title>{{$title}}</title>
</head>

<body>
  <div id="wrapper ">  
    <div class="container ">
      <div class="row justify-content-around " id="form_login">
        <form action="{{route('login')}}" class="col-md-6 bg-light p-3 my-3 from" method="POST" >
          @csrf
          <h1 class="text-center text-uppercase h3 my-3">{{__('auth.title-login')}}</h1>

          @if (session('msg'))
          <div class="alert alert-success text-center">{{session('msg')}}</div>
          @endif

          @if (session('msg-error'))
             <div class="alert alert-danger text-center">{{session('msg-error')}}</div>
           @endif

          <div class="form-group">
            <label for="email">{{__('auth.email')}}</label>
            {{-- @php
              dd($message)
            @endphp --}}
            <input type="text" name ="email" id="email" class="form-control" required  value="{{old('email')}}" >
            @error('email')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">{{__('auth.password')}}</label>
            <input type="password" name ="password" id="password" required class="form-control" >
            @error('password')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <button type="submit" name="submit" class="btn-primary btn btn-block mb-4">{{__('auth.title-login')}}</button>
          <div class="help"><a href="">{{__('auth.forgot-your-password')}}</a></div>

        </form>
      </div>
    </div>
  </div>
</body>
</html>
