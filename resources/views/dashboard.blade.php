<!DOCTYPE html>
<html>

<head>
    <title>Tomato's Pizza</title>
    <link rel="shortcut icon" type="image" href="{{asset('image/img_03.png')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <a href="@if(Route::currentRouteName() == 'home') active @endif" href="{{ route('home') }}" style="text-decoration: none;">
                <h1>Tomato's Pizza </h1>
            </a>
        </div>
        <div class="other-links">
            <button id="btn-login"><a href="{{ route('login') }}">Login</a></button>
            <button id="btn-signup"><a href="{{ route('register-user') }}">Sign up</a></button>

            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </div>
    <!-- top navbar -->

    <div class="home-section">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <ul class="navbar-nav">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('promotion') }}">Khuyến Mãi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('voucher') }}">Voucher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('menu') }}">Thực Đơn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('orderTracking') }}">Theo Dõi Đơn Hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('storeListing') }}">Danh Sách Cửa Hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                            </li>

                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                            </li>
                            @endguest
                        </ul>

                </div>
            </div>
            <form class="d-flex m-auto ">
                <input class="form-control  me-15" style="width: max-content;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success me-3 " type="submit" id="search-btn">Search</button>
            </form>
        </nav>
        @yield('content')



    </div>
    </div>
    </nav>
    <!-- navbar -->




    <!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>Tomato's Pizza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, hic?</p>
                <p>
                    Karcahi <br>
                    Sindh <br>
                    Pakistan <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+000000000000000</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>example@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Usefull Links</h4>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Privacy policay</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, rem!</p>
                <ul>
                    <li><a href="#">Smart phone</a></li>
                    <li><a href="#">Smart watch</a></li>
                    <li><a href="#">Airpods</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ad?</p>
                <div class="socail-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong>Tomato's Pizza</strong>.All Rights Reserved
    </div>
    <div class="credits">
        Designed By <a href="#">SA coding</a>
    </div>
</div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>