<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/scss/admin/app.scss'])
  <title>{{__('admin.title-blog')}}</title>
</head>

<body>
  <div class="wrapper ">  
    <div class="container ">
      <div class="row justify-content-around " id="form_login">
        <form action="{{route('login')}}" class="" method="POST" >
          @csrf
          <div class="container-left-logo animate__animated animate__backInLeft">
            <a href="" class="container-left-logo-logo-rt">
              <img src="{{asset('assets/image/logo.png')}}" alt="">
            </a>
            <div class="container-left-logo-name-company">{{__('admin.title-blog')}}</div>
          </div>
          <h1 class="title">{{__('auth.title-login')}}</h1>

          @if (session('msg'))
          <div class="alert alert-success text-center">{{session('msg')}}</div>
          @endif

          @if (session('msg-error'))
             <div class="alert alert-danger text-center">{{session('msg-error')}}</div> 
           @endif

          <div class="form-group">
            <label for="email" class="label">{{__('auth.email')}}</label>
            <input type="text" name ="email" id="email" class="form-control input" required  value="{{old('email')}}" >
            @error('email')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password" class="label">{{__('auth.password')}}</label>
            <input type="password" name ="password" id="password" required class="form-control input" >
            @error('password')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <div class="opera">
            <div class="hidden-password">
              <input type="checkbox" name="password" id="">
              <span class="remember">
                Remember password
              </span>
            </div>
            <div class="help"><a href="">{{__('auth.forgot-your-password')}}</a></div>
          </div>         
          <button type="submit" name="submit" class="button-summit btn-primary btn btn-block">{{__('button.login')}}</button>
          <a class= "sign-up" href="{{ route('register') }}">{{ __('auth.register') }}</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
