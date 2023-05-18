<!DOCTYPE html>
<html>

<head>
    <title>Tomato's Pizza</title>
    <link rel="shortcut icon" type="image" href="{{ asset('image/img_03.png') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    {{--  --}}

    <!-- Custom  Css -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    {{-- footer css --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/1602.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/1603.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/1611.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/1612.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/1604.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/1605.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/dialog.css') }}" rel="stylesheet" type="text/css" />


    {{-- footer js --}}
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/1604.js') }}"></script>
    <script src="{{ asset('js/1608.js') }}"></script>
    <script src="{{ asset('js/dialog.js') }}"></script>

    {{-- <link href="{{ asset('storage/css/tobii.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('storage/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('storage/css/style.min.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('storage/css/animate.min.css') }}" rel="stylesheet"> --}}

    {{-- <script src="{{ asset('js/1601.js') }}"></script>
    <script src="{{ asset('js/1604.js') }}"></script>
    <script src="{{ asset('js/1608.js') }}"></script>
    <script src="{{ asset('js/1610.js') }}"></script> --}}

    {{--  --}}

    <!-- css lay cua trang checkout
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    -->

</head>

<body>

    <div class="top-navbar ">
        <div class="top-icons">
            <a href="{{ route('home') }}"
                style="text-decoration: none;">
                <h1>Tomato Piza </h1>
            </a>
        </div>
        <div class="other-links">
            @guest
                <button id="btn-login"><a href="{{ route('login') }}">Login</a></button>
            @else
                <button id="btn-login"><a href="{{ route('signout') }}">Logout</a></button>
            @endguest
            <button id="btn-signup"><a href="{{ route('register-user') }}">Sign up</a></button>

            @if (isset(Auth::user()->usersname))
                <i class="fa-solid fa-user">{{ Auth::user()->usersname }}</i>
                
                
            @endif
            
            
        </div>
    </div>

    {{-- <div class="home-section"> --}}




    {{-- <div class="top-navbar">
        <div class="top-icons">
            <a href="@if (Route::currentRouteName() == 'home') active @endif" href="{{ route('home') }}"
                style="text-decoration: none;">
                <h1>Tomato's Pizza </h1>

            </a>
        </div>
        <div class="other-links">
            <div class="container">

                

                <!-- <button id="btn-signup"><a href="{{ route('register-user') }}">Sign up</a></button> -->
                <?php
                $customer_id = Session::get('id');
                if($customer_id!=NULL){
                ?>
                <button id="btn-login"><a href="{{ URL::to('/logout-checkout') }}">Logout</a></button>
                <?php
                }else{
                    ?>
                <button id="btn-login"><a href="{{ URL::to('/login-checkout') }}">Login</a></button>
                <?php
                }
                ?>

                
            </div>

        </div>
    </div> --}}
    <!-- top navbar -->

    
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg " id="navbar">

            <div class="container-fluid ">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('promotion') }}">Khuyến Mãi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('voucher') }}">Voucher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/menu') }}">Thực Đơn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('orderTracking') }}">Theo Dõi Đơn Hàng</a>
                            </li>
                            <!--
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('storeListing') }}">Danh Sách Cửa Hàng</a>
                                </li>

                                -->

                            <?php
                                    $customer_id = Session::get('id');
                                    if($customer_id!=NULL){
                                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/checkout') }}">Checkout</a>
                            </li>
                            <?php
                                    }else{
                                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/login-checkout') }}">Checkout</a>
                            </li>
                            <?php
                                        }
                                        ?>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                            </li>

                        </ul>
                    </ul>

                </div>
            </div>
            
            <form class="d-flex m-auto " >
                <i class="fa-solid " style="margin-right: 100px;">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 main-section">
                            <div class="dropdown">
                                <button type="button" class="btn btn-info" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                        class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                                class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                        </div>
                                        @php $total = 0 @endphp
                                        @foreach ((array) session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                        @endforeach
                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                        </div>
                                    </div>
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            <div class="row cart-detail">
                                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                    <img src="{{ asset('images/' . $details['image']) }}" width="80"
                                                        height="80" class="img-responsive" />
                                                </div>
                                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                    <p>{{ $details['name'] }}</p>
                                                    <span class="price text-info"> ${{ $details['price'] }}</span>
                                                    <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View
                                                all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </i>
            </form>
        </nav>
    

    @yield('content')

    <!-- footer -->
    <div class="type-1612">
        <div class="container">
            <div class="row">

                

                <div class="information-header">
                    <div class="col-sm-6 col-sm-6 col-md-3 column-information ">
                        <div class="account">
                            <h2 class="title-footer"> Thông tin</h2>
                            <ul>
                                <li>
                                    <a href="#">Võ Văn Duy</a>
                                </li>
                                <li>
                                    <a href="#">Nguyễn Tâm An</a>
                                </li>
                                <li>
                                    <a href="#">Đỗ Ngọc Anh Tài</a>
                                </li>
                                <li>
                                    <a href="#">Nguyễn Quốc Tiên</a>
                                </li>
                                <li>
                                    <a href="#">Võ Thị Hồng Tư</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-6 col-md-3 column-information">
                        <div class="orders">
                            <h2 class="title-footer">Mua Hàng</h2>
                            <ul>
                                <li>
                                    <a href="#">Thanh Toán Nhanh</a>
                                </li>
                                <li>
                                    <a href="#">Giao Hàng Tận Nơi</a>
                                </li>
                                <li>
                                    <a href="#">Hoàn Trả Đầy Đủ</a>
                                </li>
                                <li>
                                    <a href="#">Giá Ưu Đãi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 column-information">
                        <div class="information">
                            <h2 class="title-footer"> Sản Phẩm</h2>
                            <ul>
                                <li>
                                    <a href="#">Đặc Biệt</a>
                                </li>
                                <li>
                                    <a href="#">Mới Nhất</a>
                                </li>
                                <li>
                                    <a href="#">Nhiều Lượt Mua</a>
                                </li>
                                <li>
                                    <a href="#">Thương Hiệu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 column-information">
                        <div class="contact">
                            <h2 class="title-footer">Liên Hệ</h2>
                            <p>
                                <span>
                                    <i class="fa fa-phone"> Võ Văn Ngân, Thủ Đức, TP.HCM</i>
                                </span>
                            </p>
                            <p>
                                <span>
                                    <i class="fa fa-phone"> 1900 150 909</i>
                                </span>
                            </p>
                            <p>
                                <span>
                                    <i class="fa fa-envelope-o"> nhomG_web@gmail.com</i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="letter-follow">
                    <div class="col-md-6 col-sm-12">
                        <div class="letter">
                            <h3>Thư mới</h3>
                            <div class="form-newsletter">
                                <form action="#">
                                    <div class="form-email">
                                        <input type="email" placeholder="Nhập Email....">
                                    </div>

                                    <div class="submit-form">
                                        <input type="submit" value=" ">
                                        <i class="fa fa-envelope-o"></i>

                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="follow">
                            <div class="list-follow">
                                <p class="title-follow">
                                    Theo dõi chúng tôi
                                </p>
                                <div class="icon-follow">
                                    <a href="#">
                                        <i class="fa fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa fa-linkedin"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa fa-pinterest"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa fa-skype"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="col-sm-12">

                        <p>© 2023 VVD store. Được thiết kế bởi </p>
                        <p>
                            <a href="#">Nhóm G</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- footer -->

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>




<br />
<div class="container">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('data')
</div>

@yield('scripts')
