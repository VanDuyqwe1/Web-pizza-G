



    

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

<!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

@extends('dashboard')


@section('content')




            
        
        

<div class="container">
<main>


<div class="row g-5">
  <div class="col-md-5 col-lg-4 order-md-last">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-primary">Your cart</span>
      @php $total = 0 @endphp
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            @php $total += $details['price'] * $details['quantity'] @endphp
    </h4>
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-sm">
        <div>
          <h6 class="my-0">{{ $details['name'] }}</h6>
          <small class="text-muted">Quantity: {{$details['quantity']}}</small>
        </div>
        <span class="text-muted">${{ $details['price'] }}</span>
      </li>
      @endforeach
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong>${{ $total }}</strong>
      </li>
    </ul>
    
    
    @endif
    <form class="card p-2">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Promo code">
        <button type="submit" class="btn btn-secondary">Redeem</button>
      </div>
    </form>
  </div>
  <div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Billing address</h4>
    
    <form action="{{URL::to('/save-checkout-customer')}}" method="POST" class="needs-validation" novalidate>
        {{csrf_field()}}
        <div class="col-12">
          <label for="username" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" id="username" placeholder="Username" name="name" required>
          <div class="invalid-feedback">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
          
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="col-12">
          <label for="phone" class="form-label">Phone <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="phone" placeholder="113" name="phone" required>
          
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        
        <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
      

      

      <hr class="my-4">
      
      <button class="w-100 btn btn-primary btn-lg destroyCart" type="submit" name="send_order">Send</button>
      
    </form>
    
  </div>
</div>
</main>


@endsection

</div>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="form-validation.js"></script>
</body>
</html>



