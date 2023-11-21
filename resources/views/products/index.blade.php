<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>

<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
<!-- responsive style -->
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <title>Products</title>

</head>
<body>
<div class="hero_area">
        @include('_navbar')
    </div>

    <h1>Products</h1>



    <section class="shop_section layout_padding">
    <div class="container" >
    @foreach ($products as $product)

      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/p1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                {{ $product->name }}
                </h6>
                <h6>
                  Price
                  <span>
                  Price: ${{ $product->price }}
                </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
          <a href="">
              View All Products
            </a>
        </div>
     @endforeach
    </div>
  </section>

</body>
</html>
