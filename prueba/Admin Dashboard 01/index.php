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
    <link rel="stylesheet" href="style.css">
    <title>ServiLimp|Usuarios</title>
</head>

<body class="Fondo">
    <div class="container">
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.jpg">
                    <h2>Servi<span class="danger" style="color: #efb810;">Limp</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                    </span>
                </div>
            </div>
            <div class="sidebar">

                <a href="#"  class="active">
                    <span class="material-icons-sharp">
                 
                    </span>
                    <h3>Usuarios</h3>
                </a>
                <a href="Servicio.php" >
                    <span class="material-icons-sharp">
                    </span>
                    <h3>SERVICIOS</h3>
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
            <h1>Usuarios</h1>
        
            <!-- New Users Section -->
            <div class="new-users">
                <h2>Nuevos Usuarios</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="images/profile-2.jpg">
                        <h2>Usuario 1</h2>
                    </div>
                    <div class="user">
                        <img src="images/profile-3.jpg">
                        <h2>Usuario 2</h2>
                    </div>
                    <div class="user">
                        <img src="images/profile-4.jpg">
                        <h2>Usuario 3</h2>
                    </div>
                    <div class="user" id="Agregar">
                        <img src="images/plus.png">
                        <h2>Agregar</h2>
                        <p>Nuevo Usuario</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="table-container my-4" >
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <table id="datatable_users" class="table table-striped table-bordered">
                            <caption>
                                DataTable.js Demo
                            </caption>
                            <thead >
                                <tr>
                                    <th class="text-center">DNI</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Apellido</th>
                                    <th class="text-center">NroTelefono</th>
                                    <th class="text-center">Rol</th>
                                    <th class="text-center">Options</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody_users">
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
                        <small class="text-muted">Administrador</small>
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


    </div>
    <section class="modal">
        <div class="ventana">
            <header>Registar Usuario
                <a href="#" class="modal_close">X</a>
            </header>
            <form action="#" id="form" method="post">
                <div class="Registar Empleado">
                    <div class="Detalle">
                        <span class="title"> Datos personales</span>
                        <div class="Campos">
                            <label Class="Datos">
                            <span class="texto">Nombre </span>
                                <input type="text" id="entrada" autocomplete="off" name="nombreuser">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                            <label class="Datos">
                            <span class="texto"> Apellido</span>
                                <input type="text" id="entrada" autocomplete="off" name="apellido">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                        </div>
    
                        <div class="Campos">
                            <label class="Datos">
                            <span class="texto">DNI</span>
                                <input  type="text" id="entrada" autocomplete="off" name="DNI">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                            <label class="Datos" >
                            <span class="texto" >Nro de celular</span>
                                <input type="text" id="entrada" autocomplete="off" name="telefono">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                        </div>
    
                        <div class="Campos">
                            <input class="fecha" type="date">
                            <div class="seleccion">
                            <label class="opcion" for="Rols" >Rol</label>
                                <select class="selector" name='roles'>
                                  <option value="">Seleccione una opcion</option>  
                                  <option value="Administrativo">Administrativo</option>
                                  <option value="Limpieza">Limpieza</option>
                                  <option value="Encargado">Encargado</option>
                                </select>
                            </div>  
                        </div>
                        <div class="Sexo">
                            <label class="opcion" for="Rol">Sexo</label>
                            <input type="radio" name="size" id="Hombre">
                            <label class="tag" for="Hombre">Hombre</label>
                            <input type="radio" name="size" id="Mujer">
                            <label class="tag" for="Mujer">Mujer</label>
                            <input type="radio" name="size" id="Otro">
                            <label class="tag" for="Otro">Otro</label>   
                        </div>

                          <div class="Campos">
                            <label class="Datos">
                            <span class="texto">Barrio</span>
                                <input  type="text" id="entrada" autocomplete="off" name="usuario">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                            <label class="Datos" >
                            <span class="texto" >Celular</span>
                                <input type="text" id="entrada"  autocomplete="off" name="usuario">
                                <i class="fas fa-check-circle"  id="iconoverdea"></i>
                                <i class="fas fa-exclamation-circle"  id="iconorojoa"></i>
                            </label>
                        </div>
                        
                            <div class="Campos">
                                <div class="seleccion" style=" left: 20%; margin-top: 15px;">
                                <label class="opcion" for="Estado" style="width: 100px; margin-top: 10px;">Estado Civil</label>
                                    <select class="selector">
                                        <option value="">Seleccione una opcion</option>  
                                        <option value="Soltero/a">Soltero/a</option>
                                        <option value="Casado/a">Casado/a</option>
                                        <option value="Viduo/a">Viduo/a</option>
                                         <option value="Viduo/a">Viduo/a</option>
                                    </select>
                                </div>  
                            </div>
                            <button class="Boton-Registrar" type="submit" name="registrarusuario">Registrar</button>
                            </div>
                        </div>
                    </div>
            </form>    
        
        </div>
    </section>
       <!-- Bootstrap-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
       <!-- jQuery -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       <!-- DataTable -->
       <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
       <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

       <?php
include(__DIR__ . "/RegistrarUsuarios.php");
?>


    <script src="orders.js"></script>
    <script src="index.js"></script>
    <script src="script.js"></script>
    <script src="main.js"></script>
   

</body>

</html>