@extends ('layout')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('link')
@endsection

@section('title','STOREPY')

@section('script')
@endsection

@section('style')
a[class="link"] {
display: block;
font-size: 12px;
font-weight: 600;
margin-bottom: 0;
color: #0315ff;
letter-spacing: 1.5px;
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
                    <h2>Perfil de usuario</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Checkout Area Start ##### -->
<div class="checkout_area section-padding-80">
    <div class="container" style="margin-left: 0%">
        <div class="row">

            <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                <div class="order-details-confirmation">

                    <div class="cart-page-heading">
                        <h5>Perfil</h5>
                        @isset($results)
                        <ul class="order-details-form mb-4">
                            <li><span>Detalle</span> <span><a href="" class="link">Editar</a></span></li>
                        </ul>
                        <p>{{$results[0]->name}}</p>
                        <p>{{$results[0]->email}}</p>
                        <p>{{$results[0]->address}}</p>
                        <p>{{$results[0]->contact}}</p>
                        @endisset
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="checkout_details_area mt-30 clearfix">

                    @if (session('success')!==null)
                    <div class="col-md-12 mb-3">
                        <div class="alert alert-success">
                            <ul>
                                <li>{{ session('success') }}</li>
                            </ul>
                        </div>
                    </div>
                    @endif

                    <div class="cart-page-heading mb-30">
                        <h5 style="text-align:center">Historial de transacciones</h5>
                    </div>

                    <div>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Cliente</th>
                                    <th>Fecha</th>
                                    <th>Id transacción</th>
                                    <th>Detalle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- ##### Checkout Area End ##### -->
@endsection