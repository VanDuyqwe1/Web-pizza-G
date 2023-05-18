@extends('dashboard')

@section('content')
<div class="container">
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Sản phẩm</th>
            <th style="width:10%">Giá</th>
            <th style="width:10%">Số lượng</th>
            <th style="width:20%" class="text-center">Tổng cộng</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
       
    
  

       
        <!-- @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('images/'.$details['image']) }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif -->
    </tbody>
    <tfoot>
        <tr>
            <!-- <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td> -->
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ URL::to('/menu') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua sắm</a>

                <?php
                $customer_id = Session::get('id');
                
                if($customer_id!=NULL){

            ?>
            <a href="{{URL::to('/checkout')}}" class="btn btn-primary check_out">Thanh toán</a>
            <?php
                }else{
                    ?>
                    <a href="{{URL::to('/login-checkout')}}" class="btn btn-primary check_out">Thanh toán</a>
                    <?php
                }
                ?>
                
            </td>
        </tr>
    </tfoot>
   

    @foreach($detail_cart as $data)
    
    <tr data-id="">
    @php $total += $data->price * $data->quantity @endphp
                    <td data-th="Product">
                        <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="{{asset('images/'.$data->image)}}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $data->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $data->price }}VNĐ</td>
                    <td data-th="Quantity">
                        
                        <a href="{{url('/cart/update-quantity/'.$data->id_product.'/1')}}" style="font-size:25px;">+</a>
                        <input type="number" size="4" value="{{ $data->quantity }}" min="0" step="1" class="form-control quantity update-cart" />
                        
                        @if($data->quantity>1)
                        <a href="{{url('/cart/update-quantity/'.$data->id_product.'/-1')}}" style="font-size:25px;">-</a>
                        @endif
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $data->price * $data->quantity }}VNĐ</td>
                    <td class="actions" data-th="">
                        <!-- <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button> -->
                        <a href="{{url('/cart/delete-product/'.$data->id_product)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
        
    
    @endforeach
    </tbody>
    
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Thành tiền {{ $total }}VNĐ</strong></h3></td>
        </tr>
    
</div>


    
</table>
</div>
<div class="container">
<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <form action="{{url('/add-cart')}}" method="post" name="addToCart">{{csrf_field()}}
                <input type="hidden" value="{{$product->id}}" name="id">
            <div class="thumbnail">
            <img src="{{asset('images/'.$product->image)}}" width="200" height="100" class="img-responsive" alt="">
                <div class="caption">
                    
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    
                    <p><strong>Price: </strong> {{ $product->price }}VNĐ</p>

                    
                    
                    <button class="btn-holder btn btn-warning btn-block text-cente" type="submit">Thêm vào giỏ hàng</button>
                </div>
            </div>
            </form>
        </div>
        
    @endforeach
    </div>
    </div>

@endsection

<!-- @section('scripts')
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection -->

