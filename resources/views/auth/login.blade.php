@extends('layouts.form')

@section('content')

<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="{{ asset('vendors/images/login-page-img.png')}}" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                @if($errors->any())
                    <div class="login-title">
                        <h2 class="text-center text-primary">Se encontro un error.</h2>
                    </div>

                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first()}}
                    </div>
                @else
                    <div class="login-title">
                        <h2 class="text-center text-primary">Iniciar sesión en TAREAS AHORA ingresando tus credenciales</h2>
                    </div>
                @endif
                <div class="login-box bg-white box-shadow border-radius-10">
                    
                    <form role="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- <div class="select-role">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" name="options" id="admin">
                                    <div class="icon"><img src="{{asset('vendors/images/briefcase.svg')}}" class="svg" alt=""></div>
                                    <span>I'm</span>
                                    Manager
                                </label>
                                <label class="btn">
                                    <input type="radio" name="options" id="user">
                                    <div class="icon"><img src="{{ asset('vendors/images/person.svg')}}" class="svg" alt=""></div>
                                    <span>I'm</span>
                                    Employee
                                </label>
                            </div>
                        </div> --}}
                        <div class="input-group custom">
                            <input type="email" class="form-control form-control-lg" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" placeholder = "Contraseña" name="password" required autocomplete="current-password">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input name="remember" type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">Recordar sesión</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password"><a href="{{ route('password.request') }}">Olvidaste tú contraseña</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    
                                        {{-- use code for form submit --}}
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Entra a tus tareas">
                                    
                                    {{-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Entra a tus tareas</a> --}}
                                </div>
                                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">O</div>
                                <div class="input-group mb-0">
                                    <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('register')}}">Crea nueva cuenta</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
