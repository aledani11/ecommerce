@extends ('layout')

@section('meta')
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
#login button:first-of-type{
margin-bottom:1.5rem!important;
}
/*#login a:first-child{
margin-bottom:1.5rem!important;
}
#login a:nth-of-type(1){
margin-bottom:1.5rem!important;
}*/
#form_login{
margin-top:9rem;
margin-bottom:3.5rem;
}
@endsection

@section('content')

<form method="POST" id="form_login" action="{{route('register.store')}}">
    @csrf
    <div class="container">
        <div class="row">

            <div id="login" class="row" style="margin:auto; border:1px solid #e8e8e8;">

                <div class="col-md-12 mb-3 mt-3">
                    <div class="mb-30" style="display:block;text-align:center">
                        <h5>Registrarse</h5>
                    </div>
                </div>

                @if ($errors->any())
                <div class="col-md-12 mb-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                <div class="col-md-12 mb-3">
                    <label for="nya">Nombre y Apellido</label>
                    <input type="text" class="form-control @error('nya') is-invalid @enderror" id="nya" name="nya" value="{{ old('nya') }}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="tel">Telefono</label>
                    <input type="text" class="form-control @error('tel') is-invalid @enderror" id="tel" name="tel" value="{{ old('tel') }}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ old('direccion') }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control @error('pass') is-invalid @enderror" id="pass" name="pass" value="{{ old('pass') }}" required>
                </div>
                <div class="col-md-12 mb-4">
                    <label for="rpass">Repetir Contraseña</label>
                    <input type="password" class="form-control @error('pass') is-invalid @enderror" id="rpass" name="pass_confirmation" value="" required>
                </div>

                <div class="col-md-12 mb-2">
                    <button type="submit" class="btn essence-btn">Registrarse</button>
                </div>

                <div class="col-md-12 mb-2">
                    <a href="{{ route('login') }}" class="link_login">¿Ya tienes una cuenta?</a>
                </div>

            </div>

        </div>
    </div>
</form>
@endsection