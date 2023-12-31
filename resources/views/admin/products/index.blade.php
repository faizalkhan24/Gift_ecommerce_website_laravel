<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
  <section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Latest Products</h2>
        </div>
        <div class="row">
          <?php
          $products = Product::all();
?>
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="#">
                            <div class="img-box">
                                <img src="images/{{ $product->photo }}" alt="{{ $product->name }}">
                            </div>
                            <div class="detail-box">
                                <h6>{{ $product->name }}</h6>
                                <h6>
                                    Price
                                    <span>${{ $product->price }}</span>
                                </h6>
                            </div>
                            <div class="new">
                                <span>New</span>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="btn-box">
            <a href="{{ route('all.products') }}">View All Products</a>
        </div>
    </div>
</section>
</body>
</html>