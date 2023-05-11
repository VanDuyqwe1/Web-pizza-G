<!DOCTYPE html>
<html lang="en">

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


</body>

</html>
