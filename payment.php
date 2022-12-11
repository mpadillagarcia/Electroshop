<?php
require_once "config/conexion.php";
if(!empty($_POST["proceedPayment"])) {
$member_id = $_POST ['contactNumber'];
$firstName = $_POST ['firstName'];
$lastName = $_POST ['lastName'];
$address = $_POST ['address'];
$contactNumber = $_POST ['contactNumber'];
$emailAddress = $_POST ['emailAddress'];
$insertOrderSQL = "INSERT INTO pedidos(member_id, name, address, mobile, email, order_at, payment_type)VALUES('".$member_id."', '".$firstName." ".$lastName."', '".$address."', '".$contactNumber."', '".$emailAddress."', '".date("Y-m-d H:i:s")."', 'PAYPAL')";
mysqli_query($conexion, $insertOrderSQL) or die("database error:". mysqli_error($conexion));
$order_id = mysqli_insert_id($conexion);
}
?>

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
                  
            <form name="formTPV" method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
			<input type="hidden" name="cmd" value="_cart">
			<input type="hidden" name="upload" value="1">
			<input type="hidden" name="business" value="CE2018-facilitator@gmail.com">
			<input type="hidden" name="item_name_1" value="Articulo 1111">
			<input type="hidden" name="item_number_1" value="1111">
			<input type="hidden" name="amount_1" value="388">			
			<input type="hidden" name="return" value="http://localhost/pagoconexito.php">
			<input type="hidden" name="cancel_return" value="http://localhost/pagocancelado.html">
			<input type="hidden" name="no_note" value="1">
			<input type="hidden" name="currency_code" value="EUR">
			<input type="hidden" name="first_name" value="nombrecomprador">
			<input type="hidden" name="last_name" value="apellidocomprador">
			<input type="hidden" name="address1" value="avda. Espa">
			<input type="hidden" name="city" value="albacete">
			<input type="hidden" name="zip" value="02004">
			<input type="hidden" name="lc" value="es">
			<input type="hidden" name="country" value="ES">
            <button class="btnpaypal btn-primary" name="submit" type="submit" id="btnPagar" alt="Pagos con PayPal: Rápido, gratis y seguro"
                >Confirmar pago con  <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" height ="50" width="50"></img>
            </button>
        </form>
            
             
           
        </div>
</div>
</form>
            

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