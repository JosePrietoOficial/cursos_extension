@extends('layouts.layout')
@section('title', 'Bienvenido')
@section('meta')
    <link rel="stylesheet" href="{{asset('css/welcome.css') }}">
@endsection

@section('contents')
    <div class="contenedor">
        <div class="header">
            <h1 class="title"> <span style="display: flex; align-items: center; gap: 7px;"><img src="{{asset('image/corsaje.png') }}" alt="Corsaje"> I.E Sagrado Corazón De Jesús </span> <p>Sistema institucional para preinscripciones</p> </h1>
        </div>

        <div class="principal">
            <h1 class="titulo-main">Bienvenido al Sistema SPICOR</h1>
            <p class="titulo-sub">Por favor ingresa tus datos de usuario para iniciar sesión.</p>
            <fieldset class="fieldset-login">
                <legend>Inicia sesión</legend>
                <form name="frm_login" id="frm_login" action="{{route('login')}}" method="post" enctype="multipart/form-data">

                    @csrf <!-- Token de seguridad -->
                    <p class="titulo-sub-form">Administra tus preinscripciones y descubre los cursos extra curriculares que ofrece nuestra institución.</p>
                    <div class="columnas">
                        <div class="columna-label">
                            <label class="label" for="login"> Correo: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="password"> Contraseña: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                        </div>
                        <div class="columna-input">
                            <input class="input" id="login" type="text" required placeholder="Correo asociado">
                            <input class="input" id="password" type="password" required placeholder="Contraseña">
                        </div>
                    </div>

                    <button class="button" type="submit">Ingresar</button>
                </form>
                <div class="form-info">
                    <a href="{{route('registro-user')}}">Crear Usuario - Estudiante</a> &nbsp;|&nbsp; <a href="{{route('registro-docente')}}">Crear Usuario - Docente</a> &nbsp;|&nbsp; <a href="">¿Olvidaste tu contraseña?</a> &nbsp;|&nbsp; <a href="">¿Olvidaste tu usuario?</a>
                </div>
            </fieldset>
        </div>
        <div class="footer">
            <fieldset class="footer-fieldset">
                <p>Sistema de preinscripciones integradas Corsaje&nbsp; | &nbsp;Todos los derechos reservados I.E Sagrado Corazón De Jesús 2025 &copy;</p>
            </fieldset>
        </div>
    </div>
@endsection