<?php
$id=$_GET['id'];
if($id=="")
{

		echo "idusuario es igual a vacio";
	exit;
}
if($id==20)
{


        print"<meta http-equiv='refresh' content='0;url=index2.php'>";

}









else
{
	setCookie('id',$id);
	setCookie('acceso',1);
	session_start();
$_SESSION['id']=$id;
$_SESSION['acceso']=1;
			print"<meta http-equiv='refresh' content='0;url=index.php'>";
	exit;
}

?>



