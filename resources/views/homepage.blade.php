@extends('dashboard')
@section('content')
    <!-- Start Hero -->
    <div class="type-1602">
        <div class="content">
            <div class="bannervideo">
                <img src="{{ asset('images/FoodVVD.jpg') }}" alt="">
                
            </div>
    
        </div>
    
    </div>
  

    <div class="type-1603">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="{{ asset('images/' . $productBestSale[0]->image) }}" alt="null">
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[0]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[0]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Mua ngay!</a></p>
                            </div>
    
                        </div>
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="{{ asset('images/' . $productBestSale[1]->image) }}" alt="null">
    
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[1]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[1]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Mua ngay!</a></p>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="{{ asset('images/' . $productBestSale[2]->image) }}" alt="null">
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[2]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[2]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Mua ngay!</a></p>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="{{ asset('images/' . $productBestSale[1]->image) }}" alt="null">
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[3]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[3]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Mua ngay!</a></p>
                            </div>
    
                        </div>
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="{{ asset('images/' . $productBestSale[0]->image) }}" alt="null">
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[4]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[4]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Mua ngay!</a></p>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

  
    <div class="type-1611">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="collection">
                        <ul>
                            <li>
                               <div class="image-intagram">
                                   <a href="#">
                                       <i class="fa fa-instagram"></i>
                                       <p>Công ty 1</p>
                                   </a>

                                   <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn1" class="thunho">
                               </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>

                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn2" class="thunho">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>

                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn3" class="thunho">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn4" class="thunho">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn5" class="thunho">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn6" class="thunho">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn7" class="thunho">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn8" class="thunho">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img src="{{ asset('images/FoodVVD.jpg') }}" alt="itn9" class="thunho">
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>


</div>

   
   
@endsection
