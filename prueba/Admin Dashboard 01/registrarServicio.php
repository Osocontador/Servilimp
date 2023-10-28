<?php

include(__DIR__ . "/conectar.php");


 if (isset($_POST["registarcliente"])) {
  $namecli = trim($_POST['nombrecliente']);
  $tel = trim($_POST['telefonocliente']);
  $barrio = trim($_POST['barrio']);
  $calle = trim($_POST['calle']);
  $correo = trim($_POST['correo']);

  $insertar = "INSERT INTO tcliente(Nombre, Telefono,Correo,Barrio, Calle) VALUES ('$namecli', '$tel', '$barrio', '$calle', '$correo')";
  $insercion=mysqli_query($conex, $insertar);
 
  
 
  // Obtener el IDCliente generado
        
        $nameser = trim($_POST['nombre_servicio']);
        $can = trim($_POST['cantidad']);
        $barrioSer = trim($_POST['barrio_ser']); // Corregido el nombre de la variable
        $calleSer = trim($_POST['calle_ser']); // Corregido el nombre de la variable
        $des = trim($_POST['des']);
        $idCliente = $conex->insert_id;
        // Corregido el nombre de la columna IDCliente y de las variables $barrioSer y $calleSer
        $consulta = "INSERT INTO tservicio(Nombre, Barrio, Calle, Descripcion, Cantidad, IDCliente) VALUES ('$nameser', '$barrioSer', '$calleSer', '$des', '$can', '$idCliente')";
        $resultado = mysqli_query($conex, $consulta);
        
  }
?>