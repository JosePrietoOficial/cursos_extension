@extends('layouts.layout')
@section('title', 'Registro')
@section('meta')
    <link rel="stylesheet" href="{{asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{asset('css/registros.css') }}">
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
                    <p class="titulo-sub-form">¡Descubre todos los beneficios que ofrece nuestro sistema para ti ahora!</p>
                    <div class="columnas">
                        <div class="columna-label">
                            <label class="label" for="image"> Imagen: <span class="required-asterisk" style="color: #3276a3">*<span class="tooltip">Este campo es opcional</span></span></label>
                            <label class="label" for="name"> Nombres: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="last_name"> Apellidos: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="email"> Correo: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio y debe rellenarse con el correo institucional</span></span></label>
                            <label class="label" for="phone"> Telefono: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="fecha_nacimiento"> Fecha de nacimiento: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="tipo_documento"> Tipo de documento: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="documento"> Documento: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="asignatura"> Grado: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="password"> Contraseña: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                        </div>

                        <div class="columna-input">
                            <div class="custom-upload-file">
                                <span class="custom-upload-message">Seleccionar un archivo</span>
                                <input class="input" id="image" type="file" placeholder="Selecciona una imagen">
                            </div>
                            <input class="input" id="name" type="text" required placeholder="José Alejandro">
                            <input class="input" id="last_name" type="text" required placeholder="Prieto Salcedo">
                            <input class="input" id="email" type="email" required placeholder="ejemplo@corsaje.edu.co">
                            <input class="input" id="phone" type="text" required placeholder="12345678">
                            <input class="input extenso" id="fecha_nacimiento" type="date" required>
                            <select class="input extenso" name="tipo_documento" id="tipo_documento" required>
                                <option value="" disabled selected>Tipo de documento</option>
                                <option value="ti">Tarjeta de Identidad</option>
                                <option value="cc">Cédula de Ciudadanía</option>
                                <option value="ce">Cédula de Extranjería</option>
                            </select>
                            <input class="input" id="documento" type="text" required placeholder="12345678">
                            <select class="input" name="asignatura" id="asignatura" required>
                                <option value="" disabled selected>Seleccione su grado educativo</option>
                                <option value="4">Cuarto Grado</option>
                                <option value="5">Quinto Grado</option>
                                <option value="6">Sexto Grado</option>
                                <option value="7">Septimo Grado</option>
                                <option value="8">Octavo Grado</option>
                                <option value="9">Noveno Grado</option>
                                <option value="10">Decimo Grado</option>
                                <option value="11">Undecimo Grado</option>
                            </select>
                            <input class="input" id="password" type="password" required placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="navegacion">
                        <button type="button" class="button" onclick="window.location.href='{{ route('welcome') }}'">Volver</button>
                        <button class="button" type="submit">Registrar usuario</button>
                    </div>
                </form>
            </fieldset>
        </div>
        <div class="footer">
            <fieldset class="footer-fieldset">
                <p>Sistema de preinscripciones integradas Corsaje&nbsp; | &nbsp;Todos los derechos reservados I.E Sagrado Corazón De Jesús 2025 &copy;</p>
            </fieldset>
        </div>
    </div>
@endsection
