
    {{-- {{ $list_bills }} --}}
    
    @extends('dashboard')
@section('content')
        
       
    
    {{-- bỏ nó vào khung --}}
    <div class="container">
        <div class="row">
            {{-- Hình ảnh --}}
            <div class="col-4">
                <img src="{{ asset('images/stock-stracking.png') }}" alt="stock-stracking" id="img-tracking"
                    class="w-100">
            </div>
            {{-- Nội dung --}}
            <div class="col-8">
                <h1 class="mt-5">Theo dõi đơn hàng - Tomato Pizza</h1>
                {{-- các giai đoạn trạng thái --}}
                <div class="item-status mt-5">
                    <ul class="p-0" style=" list-style: none;">
                        @foreach ($list_status as $status)
                            <li class="d-inline-block">
                                {{-- http://127.0.0.1:8000/tracking-2-L%C3%A0m%20b%E1%BB%99t%20 --}}
                                <a
                                    href="{{ route('tracking_custom', [
                                        // 'slug' => Status::convert_name($status->name) ,
                                        'slug' => App\Models\Status::convert_name($status->name),
                                    
                                        'id_status' => Crypt::encryptString($status->id),
                                    ]) }}">
                                    @if ($status->name == 'Huỷ đơn')
                                        <button class="btn btn-danger">{{ $status->name }}</button>
                                    @else
                                        <button class="btn btn-primary">{{ $status->name }}</button>
                                    @endif
                                </a>

                            </li>
                        @endforeach

                    </ul>
                </div>
                {{-- danh sách bills --}}
                <div class="list-bills">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Voucher</th>
                                <th scope="col">Ngày mua</th>
                                <th scope="col">Địa chỉ nhận hàng</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_bills as $bill)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $bill->id }}</td>
                                    <td>{{ $bill->discount }}</td>
                                    <td>{{ $bill->created_at }}</td>
                                    <td>{{ $bill->address }}</td>
                                    {{-- <td>
                                <form action="{{ route('tracking.custom') }}" method="post">
                                    <input type="hidden" name="">
                                </form>
                            </td> --}}
                                    <td>

                                        <a href="{{ route('bill_detail', [
                                            'id_bill' => $bill->id,
                                        ]) }}"
                                            class="btn btn-warning">Xem chi tiết</a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


    @endsection