
<!--Conexion para guardar el archivo-->
<?php
include 'config2.php';
if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
     
      // creamos las variables para subir a la db
        $ruta = "imagenes/"; 
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
        $upload= $ruta . $nombrefinal;  



        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
                    
                    echo "<b>Upload exitoso!. Datos:</b><br>";  
                    echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";  
                    echo "<br><hr><br>";  
                         
                   $nombre  = $_POST["nombre"]; 
                   $description  = $_POST["description"]; 


                   $query = "INSERT INTO comentarios (name,description,ruta) 
                            VALUES ('$nombre','$description','".$nombrefinal."','".$_FILES['fichero']['type'].")"; 

       mysql_query($query) or die(mysql_error()); 
       echo "El archivo '".$nombre."' se ha subido con éxito <br>";       
        }  
    }  
 } 
?> 

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



    <main class="contenedor seccion contenido-centrado">
        <h1 class="fw-300 centrar-texto">Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="../assents/img/blog1.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada">
                    <h4>Terraza en el techo de tu casa</h4>
                </a>
                <p>Escrito el: <span> 20/11/2021 </span> por: <span> Admin </span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando
                    dinero</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="../assents/img/blog2.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada">
                    <h4>Construye una alberca en tu hogar</h4>
                </a>
                <p>Escrito el: <span> 20/11/2021 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="../assents/img/blog3.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                <p>Escrito el: <span> 20/11/2021 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="../assents/img/blog4.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada">
                    <h4>Guía para la decoración de tu habitación</h4>
                </a>
                <p>Escrito el: <span> 20/10/2019 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>
        <?php
            if (isset($_SESSION['message']) && $_SESSION['message'])
            {
                printf('<b>%s</b>', $_SESSION['message']);
                unset($_SESSION['message']);
            }
        ?>

            <div class="container">
                <div class="row comentarios justify-content-center">
                    <div class="col-6">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form_comentarios  d-flex justify-content-end flex-wrap " method="post" enctype="multipart/form-data">
                            <input type="text" name="nombre" placeholder="Titulo"></textarea>
                            <textarea name="description"  placeholder="Descripción"></textarea>
                            <div class="form-group">
                            <span>Imagen:</span>
                                <input type="file" name="fichero", class="imagen">
                            </div>
                            <input type="submit" name="uploadBtn" value="Enviar" class="btn btn-primary">
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    

        
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros">Nosotros</a>
                <a href="anuncios">Anuncios</a>
                <a href="blog">Blog</a>
                <a href="contacto">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados &copy; </p>
        </div>
    </footer>
</body>

</html>
