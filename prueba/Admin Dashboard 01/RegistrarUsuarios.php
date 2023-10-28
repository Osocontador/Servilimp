<?php
 include(__DIR__ . "/conectar.php");

if (isset($_POST["registrarusuario"])) {
  $nameusu = trim($_POST['nombreuser']);
  $ape = trim($_POST['apellido']);
  $dni = trim($_POST['DNI']);
  $telefonousu = trim($_POST['telefono']);
  $correo=trim($_POST['telefono']);
  $rol = $_POST['roles'];
  
  echo "Nombre: $nameusu<br>";
  echo "Apellido: $ape<br>";
  echo "DNI: $dni<br>";
  echo "Teléfono: $telefonousu<br>";
  echo "Rol: $rol<br>";
  $insertar = "INSERT INTO templeado(DNI,Nombre,Apellido,NroTelefono,Rol) VALUES ('$dni','$nameusu','$ape', '$telefonousu','$rol')";
  $insercion=mysqli_query($conex, $insertar);
 
        
}
?>