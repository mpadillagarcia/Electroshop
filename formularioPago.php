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
    
    <!-- Navigation-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                
                <a class="navbar-brand" href="index.php">ELECTROSHOP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link text-info" category="all">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                </div>
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
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row justify-content-center">
                  
            <h2>Formulario del pedido</h2>
            <div class="col-md-8">
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="payment.php"><br>
            <div class="form-group">
            <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="First Name" name="firstName" required /><br>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Last Name" name="lastName" required /><br>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-6">
            <textarea class="form-control" rows="5" placeholder="Address" name="address" required ></textarea><br>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-6">
            <input type="number" class="form-control" min="9" placeholder="Contact number" name="contactNumber" required /><br>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-6">
            <input type="email" class="form-control" placeholder="Email" name="emailAddress" required /><br>
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-4">
            <input class="btnpaypal btn-primary" type="submit" name="proceedPayment" value="Pagar con Paypal">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" height ="50" width="50"></img>

            </div>
            </div>
            </form>
            </div>
            

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Electroshop 2022</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>