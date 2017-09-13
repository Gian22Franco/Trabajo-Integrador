<?php


function validarInformacion() {
  $arrayDeErrores = [];


  if($_POST["nombre"] == "") {
    $arrayDeErrores["nombre"] = "Che, te equivocaste en el nombre";
  }
  if($_POST["apellido"] == "") {
    $arrayDeErrores["apellido"] = "Che, te equivocaste en el apellido";
  }
  if($_POST["username"] == "") {
    $arrayDeErrores["username"] = "Che, te equivocaste en el username";
  }
  if($_POST["email"] == "") {
    $arrayDeErrores["email"] = "Che, te equivocaste en el email";
  }
  else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores["email"] = "Che, el formato del mail es cualquiera";
  }
  else if ($_POST["email-confirm"] != $_POST["email"])
  {
    $arrayDeErrores["email"] = "Los emails deberian  ser iguales";
  }
  if (strlen($_POST["contrasena"]) < 8) {
    $arrayDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 8 caracteres";
  }
  else if (preg_match('/[A-Z]/', $_POST["contrasena"]) == false) {
    $arrayDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 1 mayuscula";
  }
  else if ($_POST["contrasena"] != $_POST["contrasena_confirm"])
  {
    $arrayDeErrores["contrasena"] = "Las dos contraseñas no verifican";
  }
  if(isset($_POST["genero"]) == false) {
    $arrayDeErrores["genero"] = "Che, te olvidaste completar el genero";
  }
  if(isset($_FILES["Error"]) == UPLOAD_ERR_OK) {
    $arrayDeErrores["file"] = "Necesita subir el avatar";
  }

  //$nombre = $_FILES["name"];
  //pathinfo($nombre, PATHINFO_EXTENSION);

  return $arrayDeErrores;
}

// function armarUsuario($datos){
//   echo "pre";
// }
?>
