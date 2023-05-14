{{-- dashboard --}}
@extends('dashboard')
{{-- Nội dung list of users --}}
@section('content')
<main class="listofusers">

    

    {{-- <div class="container"> --}}


    <table class="table">
        <!-- Tieu de in dam -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Avatar</th>
                <!-- <th>Email_verified_at</th> -->
                <th>Password</th>
                <!-- <th>Remember_token</th> -->
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <!-- Liet ke danh sach -->
        <tbody>
            <!-- <tr> -->

                <!-- index -->
                @if(isset($data) && $data->count() >0 )
                    
                    @foreach($data as $i)
                        <tr>
                        <td>{{ $i->id }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->email }}</td>
                <td>{{ $i->phone }}</td>
                <td>{{ $i->avatar }}</td>
                <td style="overflow-x: scroll; max-width: 350px">{{ $i->password }}</td>
                <!-- <td>{{ $i->remember_token }}</td> -->
                <td>{{ $i->created_at }}</td>
                <td>{{ $i->updated_at }}</td>
                <td style="display: flex; justify-content: center; align-items: center;">
                    <button type="button" class="btn btn-info" style="display: inline-block;">Info</button>
                    <a href="{{route('users.edit', $i->id)}}" class="btn btn-warning ms-1" style="display: inline-block;">Edit</a>
                    

                    

                </td>
                </tr>
                    
                    @endforeach
                
                 <!-- search -->
                @else 
                @if(isset($user) && $user->count() >0)

@foreach($user as $i)
    <tr>
        <td>{{ $i->id }}</td>
        <td>{{ $i->name }}</td>
        <td>{{ $i->email }}</td>
        <td>{{ $i->phone }}</td>
        <td>{{ $i->avatar }}</td>
        <td style="overflow-x: scroll; max-width: 350px">{{ $i->password }}</td>
                <!-- <td>{{ $i->remember_token }}</td> -->
                <td>{{ $i->created_at }}</td>
                <td>{{ $i->updated_at }}</td>
                <td style="display: flex; justify-content: center; align-items: center;">
                    <button type="button" class="btn btn-info" style="display: inline-block;">Info</button>
                    <a href="{{route('users.edit', $i->id)}}" class="btn btn-warning ms-1" style="display: inline-block;">Edit</a>
                    

                    

                </td>
    </tr>

@endforeach

                @endif
                @endif
            <!-- </tr> -->
        </tbody>
    </table>

    {{-- div container  --}}
    {{-- </div> --}}
    {{-- Phân trang --}}
    <!--  -->
</main>
@endsection