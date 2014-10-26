<?php
Session_start();
$id2=$_SESSION['id'];
$acceso2=$_SESSION['acceso'];
if($id2=="" or $acceso2=="")
{
			
	exit;
}
$id=$_COOKIE['id'];
$acceso=$_COOKIE['acceso'];
if($id=="" or $acceso=="")
{
			
	exit;
}

?>


<?php
$idusuarios=$_COOKIE['id'];

$conectar = mysql_connect('localhost','root','') or die ("Error al conectar con el servidor");
	//seleccionar la base de datos para trabajar
$base=mysql_select_db('practica00',$conectar) or die ("Error al conectar la BD".mysql_error);
	
$sql="select * from usuario where id='$idusuarios'";
$consulta=mysql_query($sql) or die("error en consulta $sql");
$usuario=mysql_result($consulta,0,'usuario');
$ruta=mysql_result($consulta,0,'ruta');
echo"bienvenido $usuario <br><img src='$ruta' height='45' width='45'>";
?>
