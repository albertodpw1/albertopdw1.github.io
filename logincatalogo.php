<?php


$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$presentacion = $_GET['presentacion'];
$precio = $_GET['precio'];
$cantidad = $_GET['cantidad'];

if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$presentacion = $_GET['presentacion'];
$precio = $_GET['precio'];
$cantidad = $_GET['cantidad'];


try{
  
            $campos=array();
            if($nombre=="" || strlen($nombre) < 3 ||strlen($nombre) > 20){
                echo "Error";
            array_push($campos, "El nombre debe tener más de 3 letras y menos de 20");
            }
            
            if($descripcion == "" || $descripcion > 200){
                array_push($campos,"La descripción no puede exceder los 100 caracteres");
            }
            
            if($presentacion=="" || strlen($presentacion) < 3 ||strlen($presentacion) > 20){
            array_push($campos, "La descripcion debe tener más de 3 letras y menos de 20");
            }
            
            if($precio == ""  || strlen($precio) > 2000){
                array_push($campos,"El precio no puede sobrepasar la cifra de $20 000 y debe ser más de 1");
            }
            
            if($cantidad == "" || strlen($cantidad) < 1 || strlen($cantidad) > 500){
                array_push($campos,"La cantidad no puede rebasar los 500 productos ");
            }
            if(count($campos) > 0){
    echo "<div class='error'>";
    for($i=0;$i < count($campos);$i++){
        echo "<li>".$campos[$i]."</i>";
    }
}
        else {
            
            echo         "datos correctos";
            echo "<h2>Información recibida desde PHP</h2>";
        echo "<table border=2>";
        echo "<tr>";
        echo "<td rowspan=3></td>";
        echo "<td>Nombre</td><td>Descripción</td><td>Presentación</td><td>Precio</td><td>Cantidad</td>";
        echo "</tr>";
        echo "<td>$nombre</td><td>$descripcion</td><td>$presentacion</td><td>$precio</td><td>$cantidad</td>";
        echo "</tr>;";
        
        echo "</table>";
      
        }
               
          
            }
           
        
catch(Exception $ex){
    echo "Excepción ocurrida:: ", $ex->getMessage()."</br>";
    }

}


?>