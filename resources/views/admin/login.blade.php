<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Login To Your Shop</title>

    <!-- Site favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon-16x16.png"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="styles/core.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="styles/icon-font.min.css"
    />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"
    ></script>
  </head>
  <body class="login-page">
    <div class="login-header box-shadow" style="background: #1d0f9b">
      <div
        class="container-fluid d-flex justify-content-between align-items-center"
      >
        <div class="brand-logo">
          <a href="/">
            <img src="assets/images/logo.svg" alt="Logo" />
          </a>
        </div>
      </div>
    </div>
    <div
      class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
    >
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-7">
            <img src="images/login-page-img.png" alt="" />
          </div>
          <div class="col-md-6 col-lg-5">
            <div class="login-box bg-white box-shadow border-radius-10">
              <div class="login-title">
                <h2 class="text-center text-primary">Login To Your Shop</h2>
              </div>
              <form>

                  {{-- Token --}}
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  {{-- Email --}}
                <div class="input-group custom">
                  <input
                    id="emailInput"
                    type="email"
                    class="form-control form-control-lg"
                    name="email"
                    placeholder="Email"
                    {{-- required --}}
                    value="{{ old('email') }}"
                  />

                  {{-- Server side validation --}}
                  @error('username')
                    <span style="color: red">{{ $message }}</span>
                  @enderror

                  <div class="input-group-append custom">
                    <span class="input-group-text"
                      ><i class="icon-copy dw dw-user1"></i
                    ></span>
                  </div>
                </div>

                {{-- Password --}}
                <div class="input-group custom">
                  <input
                    id="passwordInput"
                    type="password"
                    class="form-control form-control-lg"
                    name="password"
                    placeholder="**********"
                    {{-- required --}}
                    value="{{ old('password') }}"
                  />

                  {{-- Server Validation --}}
                  @error('password')
                    <span style="color: red">{{ $message }}</span>
                  @enderror

                  <div class="input-group-append custom">
                    <span class="input-group-text"
                      ><i class="dw dw-padlock1"></i
                    ></span>
                  </div>
                </div>
                  {{-- Error Message --}}

                  <span style="color: red">
                    {{ session('msg') }}
                </span>

                {{-- Ajax Error --}}
                <div id="errorBlock" style="color: red; padding-bottom: 20px">
                    {{-- <ul id="errorBlock"></ul> --}}
                  </div>

                <div class="row pb-30">
                    <a href="http://localhost:8000/login/facebook" style="width: 100%;
                    padding: 12px;
                    border: none;
                    border-radius: 4px;
                    margin: 5px 0;
                    opacity: 0.85;
                    display: inline-block;
                    font-size: 17px;
                    line-height: 20px;
                    text-align:center;
                    text-decoration: none; background-color: #3B5998;color: white;">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                    </a>

                           {{-- <div class="col-6">
                    <div class="forgot-password">
                      <a href="#">Forgot Password</a>
                    </div>
                  </div> --}}
                </div>



                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group mb-0">
                      <!-- Submit -->
                      <input
                        class="btn btn-primary btn-lg btn-block"
                        id="signInBtn"
                        type="submit"
                        name="submit"
                        value="Sign In"
                      />
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- js -->
    <script src="scripts/core.js"></script>
    <script src="scripts/script.min.js"></script>
    <script src="scripts/process.js"></script>
    <script src="scripts/layout-settings.js"></script>

    <!-- ajax -->
     <script>


        $(document).ready(function () {
            $.ajaxSetup({
             headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }});

          $('#signInBtn').click((e) => {
            e.preventDefault();

            var email = $('#emailInput').val();
            var password = $('#passwordInput').val();

            $.ajax({
              url: '/login',
              data: { email, password },
              method: 'post',
              contentType: 'application/x-www-form-urlencoded',
              success: function (data) {
                console.log('success', data);
                window.location.replace('/admin');
              },
              error: function (err) {
                console.log(err.responseJSON);

                let errorMessages = '';

                for (var i = 0; i < err.responseJSON.message.length; i++) {
                  errorMessages += `${err.responseJSON.message[i]}`;
                }

                console.log(errorMessages);

                $('#errorBlock').html(errorMessages);
              },
            });
          });
        });
      </script>

  </body>
</html>
