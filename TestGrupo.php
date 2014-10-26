<?php

    require ('Alumno.php');
    require ('Grupo.php');
    require ('bd.php');
    require ('header2.php');

    $alumno = new Alumno();
    $grupo = new Grupo();


    if (isset($_GET['accion'])){
     switch($_GET['accion']){
         case 1:
             echo "Alumno asignado.";
             break;
         case 2:
             $grupo->desasignarAlumnoGrupo($_GET['alumno_id']);
             echo "Alumno eliminado.";
             break;
     }
    }

  

                echo "<form action=asignar-grupo.php method=POST>";
				echo "<table>";
                $alumno->readAlumno();
				echo "<br>";
                $grupo->readGrupo();
				echo "<br>";
                echo "<tr><br><td align=center><input type=submit name=opcion value=Insertar></td></tr>";
				echo "<br>";
                echo "</form>";
            echo "</table>";
     


    require ('footer.php');
?>