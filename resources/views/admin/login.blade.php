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
              <form method="POST">
                  {{-- Token --}}

                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  {{-- Username --}}
                <div class="input-group custom">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    name="username"
                    placeholder="Username"
                    required
                    value="{{ old('username') }}"
                  />
                  <div class="input-group-append custom">
                    <span class="input-group-text"
                      ><i class="icon-copy dw dw-user1"></i
                    ></span>
                  </div>
                </div>
                {{-- Password --}}
                <div class="input-group custom">
                  <input
                    type="password"
                    class="form-control form-control-lg"
                    name="password"
                    placeholder="**********"
                    required
                    value="{{ old('password') }}"
                  />
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

                {{-- Server Validation --}}
                <span style="color: red">
                    @foreach($errors->all() as $err)
                    {{ $err }}<br>
                    @endforeach
                </span>
                <div class="row pb-30">
                  <div class="col-6">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customCheck1"
                      />
                      <label class="custom-control-label" for="customCheck1"
                        >Remember</label
                      >
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="forgot-password">
                      <a href="#">Forgot Password</a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group mb-0">
                      <!-- Submit -->
                      <input
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                        name="submit"
                        value="Sign In"
                      />
                      {{-- <a
                        class="btn btn-primary btn-lg btn-block"
                        href="/admin"
                        >Sign In</a
                      > --}}
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
  </body>
</html>
