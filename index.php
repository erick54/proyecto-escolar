<?php
    require ('header.php');
?>






<?php
$idusuarios=$_COOKIE['id'];

$conectar = mysql_connect('localhost','root','') or die ("Error al conectar con el servidor");
//seleccionar la base de datos para trabajar
$base=mysql_select_db('practica00',$conectar) or die ("Error al conectar la BD".mysql_error);

$sql="select * from usuario where id='$idusuarios'";
$consulta=mysql_query($sql) or die("error en consulta $sql");
$usuario=mysql_result($consulta,0,'usuario');
echo"bienvenido $usuario <br>";

?>


<?php
/*public function showGroups($id_maestro){*/
    $sql04 = "SELECT * FROM usuario WHERE id = $idusuarios";
    $result04 = mysql_query($sql04)or die("No se ejecuta consulta $sql04");
    $existe = mysql_num_rows($result04);
    if ($existe > 0) {
        $nombre = $idusuarios . " ) ";
        $nombre .= mysql_result($result04, 0, 'ApellidoPaterno');
        $nombre .= " " . mysql_result($result04, 0, 'ApellidoMaterno');
        $nombre .= " " . mysql_result($result04, 0, 'nombre');
        $nombre = utf8_decode($nombre);

    }


    echo "<tr><td  align=center><strong>Materias Asignadas<br></strong></td></tr>";
    $sql01 = "SELECT * FROM maestro_materia WHERE id_maestro = $idusuarios GROUP BY id_materia";
    $result01 = mysql_query($sql01)or die("Error $sql01");
    while($field = mysql_fetch_array($result01)){
        $id = $field['id_materia'];
        $sql04 = "SELECT * FROM materia WHERE id = $id";
        $result04 = mysql_query($sql04)or die("No se ejecuta consulta $sql04");
        $nombre = utf8_decode(mysql_result($result04,0,'nombre'));
        echo "<tr><td>$nombre<br></td></tr>";
    }
    echo "</table>";
    echo "</div>";
/*}*/
?>






<?php
require ('footer.php');
?>