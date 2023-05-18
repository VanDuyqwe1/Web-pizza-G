@extends('dashboard')
@section('content')
<section id="form">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form">
                        <h2>Login to your accoount</h2>
                        <form action="{{URL::to('/login-customer')}}" method="POST">
                        {{csrf_field()}}
                            <input type="email" name="email_account" placeholder="Email Address" />
                            <input type="text" name="password_account" placeholder="password" />
                            <span>
                                <input type="checkbox" class="checkbox">
                                Keep me signed in
                            </span>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form">
                        <h2>New User Signup</h2>
                        <form action="{{URL::to('/add-customer')}}" method="POST">
                            
                            {{csrf_field()}}
                            <input type="text" name="usersname" placeholder="Name" />
                            <input type="email" name="email" placeholder="Email Address" />
                            <input type="password" name="password" placeholder="Password" />
                            <input type="text" name="number_phone" placeholder="Phone" />
                            <div class=""></div>
                            <button type="submit" class="btn btn-primary">Signup</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection