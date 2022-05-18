<?php

$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$correo = $_GET['correo'];
$descripcion = $_GET['descripcion'];

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$correo = $_GET['correo'];
$descripcion = $_GET['descripcion'];
try{
    $campos=array();
if($nombre=="" || strlen($nombre) < 3 ||strlen($nombre) > 20){
    echo "Error";

array_push($campos, "El nombre debe tener más de 3 letras y menos de 20");
}

if($edad =="" ||strlen($edad) < 1 ||strlen($edad) > 2){
    array_push($campos,"Edad = Debe ser mínimo de un dígito y máximo de dos dígitos");
}
else if(strlen($edad<18) || strlen($edad>60) ){
    array_push($campos,"Edad = Debe ser mínimo una edad de 18 años (mayores de edad)
    y máximo de 60 años");
}
if($correo == "" || strpos($correo,"@")=== false){
    array_push($campos,"Ingresa un correo electrónico válido");
}

if($descripcion == "" || $descripcion > 200){
    array_push($campos,"La descripción no puede exceder los 200 caracteres");
}

if(count($campos) > 0){
    echo "<div class='error'>";
    for($i=0;$i < count($campos);$i++){
        echo "<li>".$campos[$i]."</i>";
    }
}

else{
    echo "<table border=3>";

    echo "<div class='correcto'>
            datos correctos";
            echo "<h2>Información recibida desde PHP</h2>";
            echo " | Nombre |","    Edad |" ,  "    Correo |", " Descripcion |","<br/>";
            echo "</div>";

            $cantfila=3;
            $cantcolumn=1;
            echo "<table border=2>";
            for($fila=1;$fila<=$cantfila;$fila++){
            }
            echo  "<tr>";
            for($col=1;$col<=$cantcolumn;$col++){
        
            }
            echo "<td>|$nombre   |  $edad | $correo |  $descripcion </td>  ";
        }
            echo "<tr>";
        
        echo "</table>";

echo "</div>";

}
catch(Exception $ex){
echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
}
}

?>