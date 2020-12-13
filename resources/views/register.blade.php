<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Start your 14 days trial!</title>

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
      href="/abc/styles/icon-font.min.css"
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
            <img src="assets/images/logo.svg" alt="" />
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
                <h2 class="text-center text-primary">
                  Start your 14 days trial!
                </h2>
              </div>
              <form method="POST">
                <!-- Store Name -->
                <div class="input-group custom">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    name="store_name"
                    placeholder="Store Name"
                    required
                  />
                </div>
                <!-- Username -->
                <div class="input-group custom">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    name="username"
                    placeholder="Username"
                    required
                  />
                </div>
                <!-- Email -->
                <div class="input-group custom">
                  <input
                    type="email"
                    class="form-control form-control-lg"
                    name="email"
                    placeholder="Email"
                    required
                  />
                </div>

                <!-- Phone -->
                <div class="input-group custom">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    name="phone"
                    placeholder="Phone Number"
                    required
                  />
                </div>
                <!-- Address -->
                <div class="input-group custom">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    name="address"
                    placeholder="Address"
                    required
                  />
                </div>
                <!-- Password -->
                <div class="input-group custom">
                  <input
                    type="password"
                    class="form-control form-control-lg"
                    name="password"
                    placeholder="Password"
                  />
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group mb-0">
                      <!-- Submit -->
                      <input
                        class="btn btn-primary btn-lg btn-block"
                        type="submit"
                        name="submit"
                        value="Create My Store"
                      />

                      {{-- <a
                      class="btn btn-primary btn-lg btn-block"
                      href="/login"
                      >Sign Up</a
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
