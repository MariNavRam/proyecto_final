<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="../assents/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="../assents/img/barras.svg" alt="Icono Menu">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="nosotros">Nosotros</a>
                    <a href="anuncios">Anuncios</a>
                    <a href="blog">Blog</a>
                    <a href="contacto">Contacto</a>
                </nav>
            </div>
        </div> <!-- contenedor -->
    </header>

    <h1 class="fw-300 centrar-texto">Contacto</h1>
    <img src="../assents/img/destacada3.jpg" alt="Imagen Principal">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>

        <form class="contacto" action="">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Tu Nombre">

                <label for="email">E-mail: </label>
                <input type="email" id="email" placeholder="Tu Correo electrónico" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tu Teléfono" required>

                <label for="mensaje">Mensaje: </label>
                <textarea id="mensaje"></textarea>

            </fieldset>


            <fieldset>
                <legend>Información sobre Propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="cantidad">Cantidad:</label>
                <input type="number" min="0" max="100" step="5">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser Contactado:</p>

                <div class="forma-contacto">
                    <label for="telefono">Teléfono</label>
                    <input type="radio" name="contacto" value="telefono" id="telefono">

                    <label for="correo">E-mail</label>
                    <input type="radio" name="contacto" value="correo" id="correo">
                </div>

                <p>Si eligió Teléfono, elija la fecha y la hora</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">


            </fieldset>

            <input type="submit" value="Enviar" class="boton boton-verde">

        </form>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros">Nosotros</a>
                <a href="anuncios">Anuncios</a>
                <a href="blog">Blog</a>
                <a href="contacto">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados&copy; </p>
        </div>
    </footer>
</body>

</html>
