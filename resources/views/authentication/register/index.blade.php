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
   
    <div class="container">
    
      <div class="row justify-content-around" >
        <form action=""  class="col-md-6 bg-light p-3 my-3 border border-2 border-dark rounded-top" method="POST" >
          @csrf
          <h1 class="text-center text-uppercase h3 my-3">{{__('auth.title-sign_up')}}</h1>
          @error('msg')
            <div class="alert  alert-danger text-center">{{session('msg')}}</div>
            @enderror

          <div class="form-group">
            <label for="name">{{__('auth.user-name')}}</label>
            <input type="text" name ="name" id="name" class="form-control" required value="{{old('name')}}">
            @error('name')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="email">{{__('auth.email')}}</label>
            <input type="text" name ="email" id="email" class="form-control" required value="{{old('email')}}">
            @error('email')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password">{{__('auth.password')}}</label>
            <input type="password" name ="password" id="password" class="form-control" required value="{{old('password')}}">
            @error('password')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="password_confirm">{{__('auth.password_confirm')}}</label>
            <input type="password" name ="password_confirm" id="password_confirm" class="form-control" required value="{{old('Password_confirm')}}">
            @error('password_confirm')
            <span style="color: red;">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="gender">{{__('auth.gender')}}</label>
            <div>
            <div class="form-check form-check-inline">
            <input type="radio" name ="gender" id="male" value="1" class="form-check-input" checked>
            <label for="male" class="form-check-label">Male</label>
            </div>
            <div class="form-check form-check-inline">
            <input type="radio" name ="gender" id="female" value="2" class="form-check-input">
            <label for="female" class="form-check-label">Female</label>
            </div>
            </div>
          </div>

          <button type="submit" name="submit" class="btn-primary btn mb-3">{{__('auth.title-sign_up')}}</button>
          <a href="" class="btn btn-warning mb-3 ml-3">{{__('auth.account')}}</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
