<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/perfil.css" />
    <title>Perfil</title>
</head>
<?php
    // session_start();
    if(!isset($_SESSION['usuario'])){
      // header("Location:login.php");
    }
?>


<body>
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Imagen de Perfil"
                                    class="rounded-circle" width="150" />
                                <div class="mt-3">
                                    <h4>Manuel Vázquez</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Vivo en mi casa etc</p>
                                    <button class="btn btn-primary">Seguir</button>
                                    <button class="btn btn-outline-primary">Mensaje</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <h6 class="d-flex align-items-center justify-content-center mb-3 mt-2">
                                <i class="material-icons text-info mr-2">Mis redes</i>
                            </h6>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path
                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg>Website
                                </h6>
                                <span class="text-secondary">https://sherpax.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                        <path
                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>Github
                                </h6>
                                <span class="text-secondary">sherpax</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>Twitter
                                </h6>
                                <span class="text-secondary">@sherpax</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram
                                </h6>
                                <span class="text-secondary">sherpax</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>Facebook
                                </h6>
                                <span class="text-secondary">sherpax</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <form class="card-body" action="" method="post">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Alias</h6>
                                </div>
                                <input type="text" name="alias" class="non-editable" class="col-sm-5 text-secondary"
                                    readonly>
                                </input>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre</h6>
                                </div>
                                <input type="text" name="nombre" class="non-editable" class="col-sm-5 text-secondary"
                                    readonly>

                                </input>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Apellidos</h6>
                                </div>
                                <input type="text" name="apellidos" class="non-editable" class="col-sm-5 text-secondary"
                                    readonly>

                                </input>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <input type="text" name="email" class="non-editable" class="col-sm-5 text-secondary"
                                    readonly>

                                </input>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Biografía</h6>
                                </div>
                                <textarea name="biografia" class="col-sm-8 text-secondary non-editable" cols="10"
                                    rows="5" maxlength="600" readonly></textarea>
                            </div> 
                            <input type="submit" class="btn btn-info" name="guardar" id="btn-guardar"
                                 value="Guardar cambios"></input>
                        </form>
                        <hr />
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-info" id="btn-editar" onclick="editarCampos()">Editar</button>

                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3">
                                        <i class="material-icons text-info mr-2">Mis listas</i>Más recientes
                                    </h6>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3">
                                        <i class="material-icons text-info mr-2">Mis libros</i>Más queridos
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/perfil.js"></script>

    <?php
        if(!empty($_POST['guardar'])){
          echo "<script>alert('a');</script>";
          $conexion = new mysqli("localhost","root","","myshelf");
          $usuario = $_POST['alias'];
          $nombre = $_POST['nombre'];
          $apellidos = $_POST['apellidos'];
          $email = $_POST['email'];
          $biografia = $_POST['biografia'];
          $sqlQuery = "UPDATE usuario
                      SET nombre='$nombre',
                          apellidos='$apellidos',
                          email='$email',
                          biografia='$biografia'
                      WHERE alias='$usuario'";
          $conexion->query($sqlQuery);
          //Renovamos la sesión
          $_SESSION['usuario'] = $usuario;
          $conexion->close();
      }

    ?>


</body>

</html>