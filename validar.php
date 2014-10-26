<?php
$Usuario=$_POST['Usuario'];
$Contrasena=$_POST['Contrasena'];
$contra=($Contrasena);

foreach ($_POST as $key => $value)
 {
        if (empty($value))
        {
               echo "<strong>El campo $key esta vacío</strong>";
               break;
echo "<a href='iniciouser.php'><strong>Regresar al login</strong></a>";
exit;
}
}
//conexion con el servidor de base de datos MySQL
	$conectar = mysql_connect('localhost','root');
	//seleccionar la base de datos para trabajar
	$base=mysql_select_db('practica00',$conectar);
	
$sql="select * from usuario where Usuario='$Usuario' and Contrasena='$contra'";
$consulta=mysql_query($sql) or die("error en consultaaaaaaaaa");
$filas=mysql_num_rows($consulta);
if($filas==0)
{
	echo "usuario o password no validoooooooooo";
		echo "<br> <a href='iniciouser.php'>Regresar al login</a>";
	
	exit;
}

	else
	{
        $id=mysql_result($consulta,0,'id');
				print"<meta http-equiv='refresh' content='0;
	url=accesos.php?id=$id'>";
	exit;
	}

?>



