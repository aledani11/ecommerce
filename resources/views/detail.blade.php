@extends ('layout')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="description" content="Buy LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019): Everything Else - Amazon.com ✓ FREE DELIVERY possible on eligible purchases" />
<meta name="title" content="Amazon.com: LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019): Computers &amp; Accessories" />
<meta name="keywords" content="LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019),LG,34WN80C-B" />
@endsection

@section('link')
@endsection

@section('title','STOREPY')

@section('script')
@endsection

@section('style')

@endsection

@section('content')
<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

    <!-- Single Product Thumb -->
    <div class="single_product_thumb clearfix">
        <div class="product_thumbnail_slides owl-carousel">
            <img src="/img/product-img/individual.jpg" alt="">
            <img src="/img/product-img/individual.jpg" alt="">
        </div>
    </div>
    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        <span>{{$rooms[0]->room_type}}</span>
        <a href="cart.html">
            <h2>{{$rooms[0]->title}}</h2>
        </a>
        <p class="product-price"> ${{$rooms[0]->price}}</p>
        <p class="product-desc">{{$rooms[0]->description}}</p>

        <!-- Form -->
        <form class="cart-form clearfix" method="post">
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>
            <div class="select-box d-flex mt-50 mb-30">
                @foreach($characteristics as $charact)
                    <span style="margin:1%">{{$charact->name}}</span>
                @endforeach
            </div>
        </form>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->
@endsection