<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/scss/admin/app.scss'])

  <title>{{$title}}</title>
</head>

<body>
  <div class="wrapper ">
   
    <div class="container">
    
      <div class="row justify-content-around" >
        <form action=""  class="" method="POST" >
          @csrf
          <div class="container-left-logo animate__animated animate__backInLeft">
            <a href="" class="container-left-logo-logo-rt">
              <img src="{{asset('assets/image/logo.png')}}" alt="">
            </a>
            <div class="container-left-logo-name-company">{{__('admin.title-blog')}}</div>
          </div>
          {{-- @error('msg')
          <div class="alert  alert-danger text-center">{{session('msg')}}</div>
          @enderror --}}
          <h1 class="title">{{__('button.sign-up')}}</h1>
          
          <div class="form-group">
            <label for="username" class="label">{{__('auth.user-name')}}</label>
            <input type="text" name ="username" id="username" class="form-control input" required value="{{old('username')}}">
            @error('username')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="email" class="label">{{__('auth.email')}}</label>
            <input type="text" name ="email" id="email" class="form-control input" required value="{{old('email')}}">
            @error('email')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password" class="label">{{__('auth.password')}}</label>
            <input type="password" name ="password" id="password" class="form-control input" required value="{{old('password')}}">
            @error('password')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password_confirm" class="label">{{__('auth.password-confirm')}}</label>
            <input type="password" name ="password_confirm" id="password_confirm" class="form-control input" required value="{{old('Password_confirm')}}">
            @error('password_confirm')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>
          <button type="submit" name="submit" class="button-summit btn-primary btn btn-block">{{__('auth.title-sign_up')}}</button>
          <a class= "sign-up" href="{{ route('login') }}">{{ __('auth.account') }}</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
