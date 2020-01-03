@extends ('layout')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="description" content="Buy LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019): Everything Else - Amazon.com ✓ FREE DELIVERY possible on eligible purchases" />
<meta name="title" content="Amazon.com: LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019): Computers &amp; Accessories" />
<meta name="keywords" content="LG 34WN80C-B 34 inch 21:9 Curved UltraWide WQHD IPS Monitor with USB Type-C Connectivity sRGB 99% Color Gamut and HDR10 Compatibility, Black (2019),LG,34WN80C-B" />
@endsection

@section('link')
@endsection

@section('title','Login')

@section('script')
@endsection

@section('style')
        a[class="link_login"] {
            display: block;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 0;
            color: #0315ff;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        #login a:first-of-type{
            margin-bottom:1.5rem!important;
        }
        /*#login a:first-child{
            margin-bottom:1.5rem!important;
        }
        #login a:nth-of-type(1){
            margin-bottom:1.5rem!important;
        }*/
@endsection

@section('content')

    <form action="#" method="post">
        <div class="container col-md-4">
            <div class="row">

                <div id="login" class="row" style="margin:auto; border:1px solid #e8e8e8;">

                    <div class="col-md-12 mb-3 mt-3">
                        <div class="mb-30" style="display:block;text-align:center">
                            <h5>Login</h5>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="state">Province</label>
                        <input type="text" class="form-control" id="state" value="">
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="email_address">Email Address</label>
                        <input type="email" class="form-control" id="email_address" value="">
                    </div>

                    <div class="col-md-12 mb-2">
                        <a href="#" class="btn essence-btn">Place Order</a>
                    </div>

                    <div class="col-md-12 mb-2">
                        <a href="#" class="link_login">¿Has olvidado la contraseña?</a>
                    </div>

                    <div class="col-md-12 mb-2">
                        <a href="#" class="link_login">Registrarse</a>
                    </div>

                </div>

            </div>
        </div>
    </form>
    @endsection