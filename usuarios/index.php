<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "localhost:3306"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "covid19";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);


// Consulta datos y recepciona una clave para consultar dichos datos con dicha clave
if (isset($_GET["consultar"])){
    $sqlUsers = mysqli_query($conexionBD,"SELECT * FROM usuario WHERE id=".$_GET["consultar"]);
    if(mysqli_num_rows($sqlUsers) > 0){
        $empleaados = mysqli_fetch_all($sqlUsers,MYSQLI_ASSOC);
        echo json_encode($empleaados);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//borrar pero se le debe de enviar una clave ( para borrado )
if (isset($_GET["borrar"])){
    $sqlUsers = mysqli_query($conexionBD,"DELETE FROM usuario WHERE id=".$_GET["borrar"]);
    if($sqlUsers){
        echo json_encode(["success"=>1]);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//Inserta un nuevo registro y recepciona en método post los datos de nombre y correo
if(isset($_GET["insertar"])){
    $data = json_decode(file_get_contents("php://input"));
    $nombres=$data->nombres;
    $apellidos=$data->apellidos;
    $puntaje=$data->puntaje;
    $resultado=$data->resultado;
        if(($nombres!="")&&($apellidos!="")&&($puntaje!="")&&($resultado!="")){
      
    $sqlUsers = mysqli_query($conexionBD,"INSERT INTO usuario(nombres,apellidos,puntaje,resultado) VALUES('$nombres','$apellidos','$puntaje','$resultado') ");
    echo json_encode(["success"=>1]);
        }
    exit();
}
// Actualiza datos pero recepciona datos de nombre, correo y una clave para realizar la actualización
if(isset($_GET["actualizar"])){
    
    $data = json_decode(file_get_contents("php://input"));

    $id=(isset($data->id))?$data->id:$_GET["actualizar"];
    $nombres=$data->nombres;
    $apellidos=$data->apellidos;
    $puntaje=$data->puntaje;
    $resultado=$data->resultado;
    
    $sqlUsers = mysqli_query($conexionBD,"UPDATE usuario SET nombres='$nombres',apellidos='$apellidos',puntaje='$puntaje',resultado='$resultado' WHERE id='$id'");
    echo json_encode(["success"=>1]);
    exit();
}
// Consulta todos los registros de la tabla empleados
$sqlUsers = mysqli_query($conexionBD,"SELECT * FROM usuario ");
if(mysqli_num_rows($sqlUsers) > 0){
    $empleaados = mysqli_fetch_all($sqlUsers,MYSQLI_ASSOC);
    echo json_encode($empleaados);
}
else{ echo json_encode([["success"=>0]]); }


?>
