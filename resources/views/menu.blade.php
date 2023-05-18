@extends('dashboard')
@section('content')
    <div class="type-1605">
        <!--content-->
        <div class="content">
            <div class="container">
                @php
                function temp($categories, $parent_id = 0, $open = '')
                {
                    // mở chuỗi
                    // $open .= '<ul>';
                    // Duyệt mảng
                    foreach ($categories as $item) {
                        // nếu danh mục đó là con của thằng cha
                        if ($item->parent_id == $parent_id) {
                            // tạo
                            $open .= '<li><a href="' . route('category-products-custom', ['id_category' => $item->id]) . '">' . $item->name . '</a>';
                            if ($item->children->isNotEmpty()) {
                                $open .= '<ul class="sub-menu">';
                                $open = temp($item->children, $item->id, $open);
                                $open .= '</ul>';
                            }
                            // đóng thẻ -> xong 1 cấp
                            $open .= '</li>';
                        }
                    }
                    // đóng thẻ -> xong 1 cấp
                    // $open .= '</ul>';
                    echo $open;
                }
                
            @endphp

            <ul class="nav">
                {!! temp($root_category) !!}
            </ul>
            </div>
        </div>

    </div>
   
    {{-- List product --}}
    {{-- {{ $categories_lv_2 }} --}}
    <div class="type-1604">
        <div class="container">

            <div class="product-collateral">
                <ul class="productabtitle nav-pills  ">
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
                                                            <img src="{{ asset('images/' . $i->image) }}" class="tpfclick"
                                                                alt="null">
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
                                                                <li><i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </li>
                                                                <li><i class="fa fa-star-o" aria-hidden="true"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="buttonit">
                                                            <a href="#add-product{{ $i->id }}"
                                                                class="login-window button">ADD TO
                                                                CART</a>
                                                            <a href="#detail-product{{ $i->id }}"
                                                                class="login-window button">MORE DETAIL</a>
                                                        </div>
                                                        <div class="buttonacount">
                                                            <a href="#"><i class="fa fa-heart"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-exchange"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="#"><i class="fa fa-search"
                                                                    aria-hidden="true"></i></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </div>
                                    <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/mark.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
@endsection
