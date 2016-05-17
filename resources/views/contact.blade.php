<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Ludovico Einaudi - Contacto</title>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/ico" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css' />
</head>
<body>
<!--Cabezal-->
<header>
    <h1>Ludovico Einaudi</h1>
</header>
<!--FIN_Cabezal-->
<!-- menú -->
<nav>
    <ol>
        <li>
            <a href="index.html">Inicio</a>
        </li>
        <li>
            <a href="contacto.html">Contacto</a>
        </li>
        <li>
            <a href="trabajos.html">Trabajo</a>
        </li>
    </ol>
</nav>
<!-- FIN menú -->
<div id="cuerpo">
    <div id="contacto">
        <div class="titulobox">Contacto</div>
        <!-- Formulario -->
        <form id="contact" method="post" action="procesa.php">
            <fieldset>
                <legend>Formulario</legend>
                <p>
                    <label for="nombre">Nombre*</label>
                    <input id="nombre" type="text" name="nombre" required="required" autofocus="autofocus" />
                </p>
                <p>
                    <label for="email">Correo Electrónico*</label>
                    <input id="email" type="email" name="email" required="required" />
                </p>
                <p>
                    <label for="telefono">Teléfono</label>
                    <input id="telefono" type="tel" name="telefono" />
                </p>

                <textarea id="mensaje" name="mensaje"  rows="6" cols="50" required="required" placeholder="Escriba su mensaje aquí*"></textarea>

                <br />
                <p>
                    <input id="envio" type="submit" value="Envia" />
                    *Campos obligatorios.
                </p>
            </fieldset>
            <!--Cerramos el fieldset 1 -->
        </form>
    </div>
</div>
<!--FIN_DIV_CUERPO-->
<footer>
    <div id="contenedorlicencias">
        <img src="img/derechos.png" alt="(DERECHOS) Reconocimiento – NoComercial – SinObraDerivada (by-nc-nd): No se permite un uso comercial de la obra original ni la generación de obras derivadas." />
        <p>Sitio web bajo licencia CC.</p>
        <p>Sitio web no oficial.</p>
    </div>
    <a title="HTML5" href="https://validator.w3.org/" target="_blank">
        <img id="icohtml" src="img/html5.PNG" alt="HTML5" />
    </a>
</footer>
</body>
</html>
