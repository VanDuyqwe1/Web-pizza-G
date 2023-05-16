<!DOCTYPE HTML>
<?php

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
}
?>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>

    <link href="{{ asset('css/1604.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/1605.css') }}" rel="stylesheet" type="text/css" />


    <script src="{{ asset('js/1604.js') }}"></script>
    <script src="{{ asset('js/1608.js') }}"></script>

    <link rel="stylesheet" href="../css/app.css">

</head>

<body>
    {{-- {{ $categories_lv_2 }} --}}
    <div class="type-1604">
        <div class="container">
            <div class="product-collateral">
                <ul class="productabtitle nav-pills  ">

                    {{-- ID Đầu --}}
                    @foreach ($categories_lv_1 as $item)
                    <li><a href="{{ route('category-products-custom', ['id_category' => $item->id]) }}"><span>
                                <?php echo $item->name; ?>
                            </span></a></li>
                    @endforeach

                </ul>
                <br>
                <ul class="productabtitle nav-pills  ">
                    @foreach ($categories_lv_2 as $item)
                    <li>
                        <a href={{ route('category-products-custom', ['id_category'=> $item->id]) }}>
                            <span>
                                {{ $item->name }}
                            </span>
                        </a>
                    </li>
                    @endforeach

                </ul>

                <div class="tabs">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active ">
                            <div class="frameswiper">
                                <!-- Swiper -->
                                <div class="swiper-container s1">
                                    <div class="swiper-wrapper">

                                        @foreach ($products as $i)
                                        <div class="swiper-slide">

                                            <div class="item">
                                                <div class="imageitem">
                                                    <a href="#">
                                                        <img src="{{ asset('images/'.$i->image) }}"
                                                            class="tpfclick" alt="null">
                                                        <span>5%</span>
                                                    </a>

                                                </div>
                                                <div class="infoitem">
                                                    <div class="title">
                                                        <h3><a href="#">{{ $i->name }}</a></h3>
                                                    </div>
                                                    <div class="price">
                                                        <p>
                                                            <del><span>10.0 £</span></del>
                                                            <ins><span>7.0 £</span></ins>
                                                        </p>
                                                    </div>
                                                    <div class="starrating">
                                                        <ul>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="buttonit">
                                                        <a href="#">ADD TO CART</a>
                                                        <a href="#">MORE DETAIL</a>
                                                    </div>
                                                    <div class="buttonacount">
                                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-exchange"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <a href="#" class="viewall">VIEW ALL</a>
            </div>
        </div>
    </div>
    <div class="type-1605">
        <!--content-->
        <div class="content">
            <div class="container">
                <div class="row ">

                    <div class="col-sm-12">
                        <div class="context">
                            <div class="contextcontent">
                                <h2>Ưu đãi lớn</h2>

                                <p>Giảm giá mạnh. Mọi người nhanh tay bấm mua nào!</p>
                            </div>
                            <div id="clockdiv">
                                <div class="textDiv_Days">
                                    <span class="days"></span>
                                    <span class="text">Ngày</span>
                                </div>
                                <div class="textDiv_Hours">
                                    <span class="hours"></span>
                                    <span class="text">Giờ</span>
                                </div>
                                <div class="textDiv_Minutes">
                                    <span class="minutes"></span>
                                    <span class="text">Phút</span>
                                </div>
                                <div class="textDiv_Seconds">
                                    <span class="seconds"></span>
                                    <span class="text">Giây</span>
                                </div>
                            </div>

                            <a class="shop-button" href="#">Danh sách ưu đãi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>