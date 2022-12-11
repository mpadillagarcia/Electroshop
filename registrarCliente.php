<?php
session_start();

// initializing variables
$usuario = "";
$nombre    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'electroshop');

// REGISTER USER
if (isset($_POST['registrar'])) {
  // receive all input values from the form
  $usuario = mysqli_real_escape_string($db, $_POST['usuario']);
  $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
  $clave1 = mysqli_real_escape_string($db, $_POST['clave1']);
  $clave2 = mysqli_real_escape_string($db, $_POST['clave2']);

  if (empty($usuario)) { array_push($errors, "usuario is required"); }
  if (empty($nombre)) { array_push($errors, "nombre is required"); }
  if (empty($clave1)) { array_push($errors, "Password is required"); }
  if ($clave1 != $clave2) {
    echo (isset($alert)) ? $alert : 'Las contraseñas deben ser iguales.';
    
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM usuarios WHERE usuario='$usuario' OR nombre='$nombre' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['usuario'] === $usuario) {
      array_push($errors, "usuario already exists");
    }

    if ($user['nombre'] === $nombre) {
      array_push($errors, "nombre already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO usuarios (usuario, nombre, clave) 
  			  VALUES('$usuario', '$nombre', '$clave')";
  	mysqli_query($db, $query);
  	$_SESSION['usuario'] = $usuario;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}