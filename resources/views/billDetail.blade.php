<!DOCTYPE html>
<html lang="en">
{{--  --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết đơn hàng</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .bill-stepper {
            background: aliceblue;
        }
    </style>
</head>

<body>
    {{-- Thông tin đơn hàng --}}
    <div class="container">
        <h1 style="text-align: center">Thông tin đơn hàng</h1>
        <ul>
            <li>
                <b>Mã đơn hàng:</b> {{ $result[0]->id_bill }}
            </li>
            <li>
                <b>Mã voucher: </b>{{ $result[0]->id_voucher }}
            </li>
            <li>
                <b>Địa chỉ giao hàng: </b>{{ $result[0]->address }}
            </li>
            <li>
                <b>Thời gian đặt hàng: </b>{{ $result[0]->created_at }}
            </li>
        </ul>
    </div>

    {{-- stepper --}}
    <div class="bill-stepper">

        <ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0">
            @foreach ($list_status as $item)
                @if ($bill[0]->id_status >= $item->id)
                    <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5">
                        <span
                            class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                            {{ $item->id }}
                        </span>
                        <span>
                            <h3 class="font-medium leading-tight">{{ $item->name }}</h3>
                            <p class="text-sm">{{ $item->describe }}</p>

                        </span>
                    </li>
                @else
                    <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5">
                        <span
                            class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                            {{ $item->id }}
                        </span>
                        <span>
                            <h3 class="font-medium leading-tight">{{ $item->name }}</h3>
                            <p class="text-sm">{{ $item->describe }}</p>
                        </span>
                    </li>
                @endif
            @endforeach
        </ol>

    </div>
    {{-- danh sách đơn hàng --}}
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Đơn giá</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $item)
                    @php
                        $imagePath = asset('images/' . $item->Image);
                        $don_gia = $item->quantity * $item->price;
                    @endphp
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="{{ $imagePath }}" alt="{{ $item->Image }}" style="width: 50px"></td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $don_gia }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</body>

</html>
