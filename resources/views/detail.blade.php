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
            <img src="/img/product-img/{{$rooms[0]->photo}}" alt="">
            <img src="/img/product-img/{{$rooms[0]->photo1}}" alt="">
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
            <div class="row">
            <div class="col-6">
                <div class="select-box d-flex mt-50">
                    <label for="check_in" style="display:block;">Entrada</label>
                </div>
                <div class="select-box d-flex mb-30">
                    <input type="date" style="margin-right:10%" name="check_in" id="check_in" value="{{\Carbon\Carbon::now(new DateTimeZone('America/Asuncion'))->format('Y-m-d')}}">
                </div>
            </div>
            <div class="col-6">
                <div class="select-box d-flex mt-50">
                    <label for="check_out" style="display:block;">Salida</label>
                </div>
                <div class="select-box d-flex mb-30">
                    <input type="date" name="check_out" id="check_out" value="{{\Carbon\Carbon::tomorrow(new DateTimeZone('America/Asuncion'))->format('Y-m-d')}}">
                </div>
            </div>
            </div>
            <!-- Cart & Favourite Box -->
            <div class="col-md mb-2" id="message">
                    
                </div>
            <div class="cart-fav-box d-flex align-items-center mt-50">
                <!-- Cart -->
                <button type="submit" id="addtocart" path="{{route('cart.add')}}" room="{{$rooms[0]->id}}" name="addtocart" class="btn essence-btn">Reservar</button>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="" class="favme fa fa-heart"></a>
                </div>
            </div>
        </form>
        <div class="select-box d-flex mt-50 mb-30">
            @foreach($characteristics as $charact)
            <span style="margin:1%">{{$charact->name}}</span>
            @endforeach
        </div>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->
@endsection