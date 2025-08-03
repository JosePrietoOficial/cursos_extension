@extends('layouts.layout')
@section('title', 'Registro')
@section('meta')
    <link rel="stylesheet" href="{{asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{asset('css/registros.css') }}">
    <script src="{{asset('js/preview_foto.js') }}"></script>
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
                <form name="frm_login" id="frm_login" action="{{route('register.docente')}}" method="post" enctype="multipart/form-data">

                    @csrf <!-- Token de seguridad -->
                    <p class="titulo-sub-form">¡Descubre todos los beneficios que ofrece nuestro sistema para ti como docente!</p>
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
                            <label class="label" for="asignatura"> Asignatura: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="password"> Contraseña: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                            <label class="label" for="password_confirmation"> Confirmar contraseña: <span class="required-asterisk">*<span class="tooltip">Este campo es obligatorio</span></span></label>
                        </div>

                        <div class="columna-input">
                            <label class="custom-upload-file" for="image">
                                <span class="custom-upload-message">Seleccionar un archivo</span>
                                <input class="input" id="image" name="imagen" type="file" accept="image/*" style="display: none;" onchange="mostrarVistaPrevia(this)">                            
                            </label>
                            <div id="imagen-preview" style="margin: 10px 0; text-align: center; display: none;">
                                <img id="preview" src="#" alt="Vista previa de la imagen" style="max-width: 200px; max-height: 200px; border: 1px solid #ddd; border-radius: 4px; padding: 5px;">
                            </div>
                            <input class="input" name="name" id="name" type="text" required placeholder="José Alejandro">
                            <input class="input" name="last_name" id="last_name" type="text" required placeholder="Prieto Salcedo">
                            <input class="input" name="email" id="email" type="email" required placeholder="ejemplo@corsaje.edu.co">
                            <input class="input" name="phone" id="phone" type="text" required placeholder="12345678">
                            <input class="input extenso" name="fecha_nacimiento" id="fecha_nacimiento" type="date" required>
                            <select class="input extenso" name="tipo_documento" id="tipo_documento" required>
                                <option value="" disabled selected>Tipo de documento</option>
                                <option value="cc">Cédula de Ciudadanía</option>
                                <option value="ce">Cédula de Extranjería</option>
                            </select>
                            <input class="input" name="documento" id="documento" type="text" required placeholder="12345678">
                            <select class="input" name="asignatura" id="asignatura" required>
                                <option value="" disabled selected>Seleccione su asignatura</option>
                                <option value="edicacion_tecnica">Educación Técnica</option>
                                <option value="educacion_fisica">Educación Física</option>
                                <option value="ciencias_sociales">Ciencias Sociales</option>
                                <option value="ciencias_naturales">Ciencias Naturales</option>
                                <option value="lengua_castellana">Lengua Castellana</option>
                                <option value="matematicas">Matemáticas</option>
                                <option value="ingles">Inglés</option>
                            </select>
                            <input class="input" name="password" id="password" type="password" required placeholder="Contraseña">
                            <input class="input" name="password_confirmation" id="password_confirmation" type="password" required placeholder="Confirmar contraseña">
                            <input class="input" type="text" value="docente" id="role" name="role" hidden>
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
