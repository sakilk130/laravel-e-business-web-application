<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/assets/customer/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/assets/customer/css/login.css">
    <style>
        .inputfile {
            opacity: 0;
            overflow: hidden;
        }

    </style>
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="cu_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="customerName" placeholder="Your Name"
                                    value="{{ old('customerName') }}" />
                            </div>
                            @error('customerName')
                                <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="cu_email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="customerEmail" placeholder="Your Email"
                                    value="{{ old('customerEmail') }}" />
                            </div>
                            @error('customerEmail')
                                <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="cu_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="customerPass" " placeholder=" Password" />
                            </div>
                            @error('customerPass')
                                <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="customerRepass" placeholder="Repeat your password" />
                            </div>
                            @error('customerRepass')
                                <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone-in-talk"></i></label>
                                <input type="number" name="phone" placeholder="Your Phone Number"
                                    value="{{ old('phone') }}" />
                            </div>
                            @error('phone')
                                <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <label for="adress"><i class="zmdi zmdi-my-location"></i></label>
                                <input type="text" name="adress" placeholder="Your Adress"
                                    value="{{ old('adress') }}" />
                            </div>
                            @error('adress')
                                <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror

                            <div class="form-group" style="position: relative; bottom:10px">
                                <input type="file" name="image" class="inputfile" />
                                <input style="position: relative; bottom:10px">
                                <label for="file"><i class="zmdi zmdi-cloud-upload"></i><span style="margin-left: 18px; color: #00000085; font-size:14px;">Upload Image</span></label>
                            </div>
                            @error('image')
                                <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror

                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>

                    {{-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            @error('agree-term')
                            <div style="color: red; position:relative; bottom: 25px;">{{ $message }}</div>
                            @enderror --}}


                    <div class="signup-image">
                        <figure><img src="/assets/customer/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('customer.login', $shopName) }}" class="signup-image-link">I am already
                            member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    </div>
    </section>

    </div>

    <!-- JS -->
    <script src="/assets/customer/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/customer/js/login.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</h /assets/customer
