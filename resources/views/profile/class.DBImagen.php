<?php
class DBImagen
{
    private $DBConexion;

    function __construct($conexion)
    {
        $this->DBConexion = $conexion;
    }

    public function uploadImage($Imagen){
        $ruta = 'imagenes/'.$Imagen['imagen']['name'];
        move_uploaded_file($Imagen['imagen']['tmp_name'], $ruta)
        $SQLStatement = $this->DBConexion-> prepare ("INSERT INTO comentarios_table (imagen) VALUES (:url)");
        $SQLStatement->bindParam(':imagen', $Imagen);
        $SQLStatement->execute();
    }

    public function viewImages(){
        $SQLStatement = $this->DBConexion-> prepare ("SELECT * FROM comentarios_table");
        $SQLStatement->execute();

        while($img =$SQLStatement->fetch(PDO::FETCH_ASSOC))
        { ?>
            <tr>
                <td><?php print ($img['id'); ?></td>
                <td><center><img src="<?php print($img['imagen']); ?>" width="2"></center></td>
                <td><?php print ($title['title'); ?></td>
                <td><left><title src="<?php print($title['title']); ?>" width="2"></center></td>
                
            </tr>
        }
    }

}
?>