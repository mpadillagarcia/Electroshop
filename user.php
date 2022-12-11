<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/electroicon.ico" />
   
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-danger" id="carrito">0</span></a>
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">ELECTROSHOP</a>
                <ul class="navbar-nav">
                        <a href="user.php" class="nav-link " category="all">Login</a>
                        <a href="user.php" class="nav-link " category="all">Register</a>
                    </ul>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-4 my-2">
            <div class="text-center text-white">
                <img src="assets/img/electroshop.png" width=40%>
            </div>
        </div>
    </header>
    <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image">
                        <img class="img-thumbnail" src="assets/img/electroshop.png" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                <?php echo (isset($alert)) ? $alert : ''; ?>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="usuario" name="usuario" placeholder="Usuario" autocomplete="on">
                                </div><br>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="clave" name="clave" placeholder="Password" autocomplete="off">
                                </div><br>
                                <button type="submit" class="btn btn-primary-login btn-user btn-block">
                                    Login
                                </button>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">REGISTER</h1>
                                <?php echo (isset($alert)) ? $alert : ''; ?>
                            </div>
                            <form class="user" method="POST" action="registrarCliente.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="Nombre" autocomplete="on">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="usuario" name="usuario" placeholder="Usuario" autocomplete="on">
                                </div><br>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="clave1" name="clave1" placeholder="Password" autocomplete="off">
                                </div><br>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="clave2" name="clave2" placeholder="Confirm password" autocomplete="off">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary-register btn-user" name="registrar">
                                    Register
                                </button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Electroshop 2022</p>
        </div>
    </footer>

</body>

</html>