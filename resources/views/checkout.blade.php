@extends ('layout')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="description" content="Buy LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019): Everything Else - Amazon.com ✓ FREE DELIVERY possible on eligible purchases" />
<meta name="title" content="Amazon.com: LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019): Computers &amp; Accessories" />
<meta name="keywords" content="LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019),LG,34WN80C-B" />
@endsection

@section('link')
<link rel="stylesheet" href="/css/core-style.css">

@endsection

@section('title','STOREPY')

@section('script')
<script src="https://www.paypal.com/sdk/js?client-id=AWLN5cVOq9rSpM4sBut_g5RigSUBjhqaxRu4gDQo48nf4JMXym0GssefjQNoBK61lwUSsgXbrOB4B4u-"></script>
@if (session('user') !== null)
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '{{$total}}',
                        currency_code: 'USD',
                        breakdown: {
                            item_total: {
                                value: '{{$total}}',
                                currency_code: 'USD'
                            }
                        }
                    },
                    items: {!! str_replace('"','',json_encode($items)) !!}
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                alert('Transaction completed by ' + details.payer.name.given_name);
                console.log(details);
            });
        }
    }).render('#paypal-button-container')
</script>
@endif
@endsection

@section('style')
a[class="link_"] {
font-size: 12px;
font-weight: 600;
margin-bottom: 0;
color: #0315ff;
text-transform: uppercase;
margin-bottom: 10px;
}
@endsection

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>Checkout</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Checkout Area Start ##### -->
<div class="checkout_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto m-auto">
                <div class="order-details-confirmation">

                    <div class="cart-page-heading">
                        <h5>Tus Reservas</h5>
                        <p>Detalles</p>
                    </div>

                    @if (!isset($results))
                    <div class="col-md-12 mb-3">
                        <div class="alert alert-danger">
                            <ul>
                                <li>El carrito de compras está vacío</li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    <ul class="order-details-form mb-4">
                        <li><span>Habitacion</span> <span>Total</span></li>
                        @isset($results)
                        @foreach($results as $result)
                        <li><span>{{$result->title}}</span> <span>${{$result->price}}</span></li>
                        @endforeach
                        @endisset
                        <li><span>Total</span> <span>${{$total}}</span></li>
                    </ul>

                    <div id="accordion" role="tablist" class="mb-4">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>Paypal</a>
                                </h6>
                            </div>

                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (session('user') === null)
                    Necesita <a class="link_" href="{{route('login')}}">iniciar sesión</a> para pagar.
                    @else
                    <div id="paypal-button-container"></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Checkout Area End ##### -->
@endsection