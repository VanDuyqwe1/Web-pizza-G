
@extends('dashboard')
    @section('content')
    <div class="type-1602">
        <div class="content">
            <div class="bannervideo">
                <img src="./blocks/1602/images/FoodVVD.png" alt="">      
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
                                <img src="./images/<?php echo $productBestSale[0]->image ?>" alt="null">
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[0]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[0]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Shop now!</a></p>
                            </div>
    
                        </div>
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="./images/<?php echo $productBestSale[1]->image ?>" alt="null">
    
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[1]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[1]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Shop now!</a></p>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="./images/<?php echo $productBestSale[2]->image ?>" alt="null">
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[2]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[2]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Shop now!</a></p>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="./images/<?php echo $productBestSale[0]->image ?>" alt="null">
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[0]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[0]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Shop now!</a></p>
                            </div>
    
                        </div>
                        <div class="item">
                            <a href="#" class="imga">
                                <img src="./images/<?php echo $productBestSale[2]->image ?>" alt="null">
    
                            </a>
                            <div class="banner-info">
                                <p><a href="#"><?php echo $productBestSale[2]->name ?></a></p>
                                <h4>SL: <?php echo $productBestSale[2]->quantity ?></h4>
                                <p><a class="shop-button" href="#">Shop now!</a></p>
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

                                   <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn1">
                               </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>

                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn2">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>

                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn3">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn4">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn5">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn6">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn7">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn8">
                                </div>
                            </li>
                            <li>
                                <div class="image-intagram">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        <p>Công ty 2</p>
                                    </a>
                                    <img style="width:120px; height:120px;" src="{{ asset('images/PC-Cinnamon-Roll-1.jpg') }}" alt="itn9">
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>


</div>

    @endsection
