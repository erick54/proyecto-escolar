
<?php

require ('Usuario.php');
require ('bd.php');









echo "<form method='POST' action='validar.php'>";
echo "Usuario <input type='text' name='Usuario'/><br/>";
echo "Password <input type='password' name='Contrasena'/><br/>";
echo "<input type='submit' value='Ingresar'/>";
echo "</form>";


require ('footer.php');
?>
