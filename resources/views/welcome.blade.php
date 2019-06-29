@extends('layout')
@section('title', 'Mabolo National High School')
@section('content')

<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100 p-t-85 p-b-20">
      <form class="login100-form validate-form">
        <span class="login100-form-title p-b-70">
          MNHS IMS
        </span>
        <span class="login100-form-avatar">
          <img src="images/mabolohs.jpg" alt="AVATAR">
        </span>

        <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
          <input class="input100" type="text" name="username">
          <span class="focus-input100" data-placeholder="Username"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
          <input class="input100" type="password" name="pass">
          <span class="focus-input100" data-placeholder="Password"></span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Login
          </button>
        </div>

        <ul class="login-more p-t-190">
          <li class="m-b-8">
            <span class="txt1">
              Forgot
            </span>

            <a href="#" class="txt2">
              Username / Password?
            </a>
          </li>

          <li>
            <span class="txt1">
              Don’t have an account?
            </span>

            <a href="#" class="txt2">
              Sign up
            </a>
          </li>
        </ul>
      </form>
    </div>
  </div>
</div>


<div id="dropDownSelect1"></div>

@endsection
