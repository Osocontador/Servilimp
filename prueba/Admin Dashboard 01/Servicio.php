<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>ServiLimp|Usuarios</title>
</head>

<body class="Fondo">

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.jpg">
                    <h2>Servi<span class="danger" style="color: #efb810;">Limp</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">

                <a href="index.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Usuarios</h3>
                </a>
                <a href="Servicio.php" class="active">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Servicios</h3>
                </a>
                <a href="#" >
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Analisis</h3>
                </a>
                <a href="Servicio.html">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Productos </h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Reportes</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Opciones</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Cerrar Sesion</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Servicio</h1>
            <!-- Analyses -->
            
            <!-- End of Analyses -->

            <!-- New Users Section -->
            <div class="new-users">
                <h2>Nuevos Servicios</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="images/profile-2.jpg">
                        <h2>Servicio 1</h2>

                    </div>
                    <div class="user">
                        <img src="images/profile-3.jpg">
                        <h2>Servicio 2</h2>
                    </div>
                    <div class="user">
                        <img src="images/profile-4.jpg">
                        <h2>Servicio 3</h2>
                    </div>
                    <div class="user" id="Agregar">
                        <img src="images/plus.png">
                        <h2>Agregar</h2>
                        <p>Nuevo Servicio</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="table-container my-4" >
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <table id="datatable_servicios" class="table table-striped table-bordered">
                            <caption>
                                DataTable.js Demo
                            </caption>
                            <thead >
                                <tr>
                                    <th class="text-center">IDServicio</th>
                                    <th class="text-center">Cliente</th>
                                    <th class="text-center">Servicio</th>
                                    <th class="text-center">Barrio</th>
                                    <th class="text-center">Calle</th>
                                    <th class="text-center">Options</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody_servicios">
                                <!-- Aquí van los datos de la tabla -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
            
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hola, <b>Luis</b></p>
                        <small class="text-muted">Administador</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/profile-1.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="images/logo.jpg">
                    <h2>Servi<span class="danger" style="color: #efb810; font-weight: 400;
    font-size: 1.4rem;">Limp</span></h2>
                    <p>Servicio de Limpieza</p>
                </div>
            </div>
        </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    <section class="modal">
        <div class="ventana" id="Servicio">
            <header>Registar Servicio
                <a href="#" class="modal_close">X</a>
            </header>
            <form action="#" method="post" id="form" >
                <div class="Botones">
                <a href="#" class="Boton" id="nuevo">Nuevo Cliente</a>
                <a href="#" class="Boton" id="buscar">Buscar cliente</a>
                </div>
                <div class="Registar Empleado">
                    <div class="Detalle" id="detalles">
                        <span class="title"> Datos del cliente</span>
                        <div class="Campos">
                            <label Class="Datos">
                            <span class="texto">Nombre del cliente </span>
                                <input type="text" class="dato" id="entrada" autocomplete="off" name="nombrecliente">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                            <label class="Datos">
                            <span class="texto"> Telefono</span>
                                <input type="text" class="dato" id="entrada" autocomplete="off" name="telefonocliente">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                        </div>
                        <div class="Campos">
                            <label Class="Datos">
                            <span class="texto">Barrio </span>
                                <input type="text"  class="dato" id="entrada" autocomplete="off" name="barrio">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                            <label class="Datos">
                            <span class="texto">Calle</span>
                                <input type="text" class="dato" id="entrada" autocomplete="off" name="calle">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                        </div>
                        <div class="Campos">
                            <label Class="Datos">
                            <span class="texto">Correo </span>
                                <input type="text" class="dato" id="entrada" autocomplete="off" name="correo">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                  
                        </div>
                        
                        <span class="title"> Datos del Servicio</span>
                        <div class="Campos">
                            <label Class="Datos">
                            <span class="texto">Nombre de Servicio </span>
                                <input type="text" id="entrada" autocomplete="off" name="nombre_servicio">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                            <label class="Datos">
                            <span class="texto"> Cantidad Empleados</span>
                                <input type="text" id="entrada" autocomplete="off" name="cantidad">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                        </div>


                          <div class="Campos">
                            <label class="Datos">
                            <span class="texto">Barrio</span>
                                <input  type="text" id="entrada" autocomplete="off" name="barrio_ser">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                            <label class="Datos" >
                            <span class="texto" >Calle</span>
                                <input type="text" id="entrada"  autocomplete="off" name="calle_ser">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                        </div>
                        <div class="Campos">
                            <label class="Des">
                            <span class="texto">Descripcion</span>
                                <textarea  id="entrada" autocomplete="off" name="des" >
                                </textarea>
                               
                            </label>
                        </div>
                            
                            <button class="Boton-Registrar" type="submit" name="registarcliente" >Registrar</button>
                            </div>
                        </div>
                    </div>
            </form>    
        
        </div>
        
    </section>
    
    <div class="clientes">
        <div class="ventanaclientes">
            <header>Cliente
                <a href="#" class="modal_close" id="cerrarbuscar">X</a>
            </header>
               <div class="table my-4" >
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <table id="datatable_clientes" class="table table-striped table-bordered">
                            <caption>
                                
                            </caption>
                            <thead >
                                <tr>
                                    <th class="center">ID Cliente</th>
                                    <th class="center">Nombre</th>
                                    <th class="center">Telefono</th>
                                    <th class="center">Correo</th>
                                    <th class="center">Barrio</th>
                                    <th class="center">Calle</th>
                                    <th class="center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody_clientes" >
                                <!-- Aquí van los datos de la tabla -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include(__DIR__ . "/registrarServicio.php");
?>

       <!-- Bootstrap-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
       <!-- jQuery -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <!-- DataTable -->
       <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

 
    <script src="orders.js"></script>
    <script src="index.js"></script>
    <script src="script1.js"></script>
    <script src="tablaclientes.js"></script>
    <script src="tablaservicios.js"></script>

</body>

</html>