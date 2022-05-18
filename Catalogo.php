<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo5.css">
</head>
<body>
    <br>
    <br>

    <div id="tablacatalogo">
        <h2 align="center">CATÁLOGO DE PRODUCTOS</h2>

            <ul>
                <li>
                    <!--implementación de tabla para los atributos del producto-->
                
                    <table id="produc" border="1">           
                            <tr>
                                <th>
                                    Clave del producto
                                </th>
                                <th>Nombre del producto</th>
                                <th>Precio</th>
                
                            </tr>		
                                <td>123</td>
                                <td>Bolso</td>
                                <td>1500.00 MXN</td>
                            <tr>
                                <td>456</td>
                                <td>Pulsera</td>
                                <td>269.00 MXN</td>			
                            </tr>		
                                <td>478</td>
                                <td>Llavero</td>
                                <td>500.00 MXN</td>			
                            </tr>
                                
                                <td>187</td>
                                <td>Anillo</td>
                                <td>150.00 MXN</td>			
                            </tr>
                                    
                                <td>612</td>
                                <td>Aretes</td>
                                <td>350.00 MXN</td>			
                            </tr>

                        </table> 

                </li>

            </ul>
        <br>
        <?php 
        $nombre1="Coca cola 600 ml";
        $descripcion1="Refresco gasificado";
        $present1="Envase con 600 ml";
        $precio1="$20";
        $cant1="235";
        
        $nombre2="Jabon zote";
        $descripcion2="Jabón de pastilla";
        $present2="Piezal";
        $precio2="$15";
        $cant2="896";
         
            echo "<h2>       OTROS PRODUCTOS</h2>";
        echo "<table border=2>";
        echo "<tr>";
        echo "<td rowspan=3></td>";
        echo "<td>Nombre</td><td>Descripción</td><td>Presentación</td><td>Precio</td><td>Cantidad</td>";
        echo "</tr>";
        echo "<td>$nombre1</td><td>$descripcion1</td><td>$present1</td><td>$precio1</td><td>$cant1</td>";
        echo "</tr>;";
        echo "<td>$nombre2</td><td>$descripcion2</td><td>$present2</td><td>$precio2</td><td>$cant2</td>";
        echo "</tr>;";
        echo "</table>";
        ?>
       

    <li><a align="center" href="busqueda.php" ><h2>Buscar producto</h2></a></li>
<br>
<br>


</form>
    </div>
  
</body>
</html>