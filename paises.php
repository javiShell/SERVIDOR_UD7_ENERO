<!DOCTYPE html>
<html>
    <head>
    <style>
        td{
            text-align: center;
        }
    </style>
    </head>
    <body>
    <table style="border: black 5px solid;">
    <?php

        $mysqli = new mysqli("127.0.0.1", "root", "",
        "paises", 3306);
        if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")
        " . $mysqli->connect_error;
        }
        echo $mysqli->host_info . "\n";
?>

            <?php 
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>NOMBRE</th>";
                echo "<th>CONTINENTE</th>";
                echo "</tr>"; 
            
                   echo "<tr>";
                   $query = $mysqli->query("SELECT * FROM pais");
                   for($i=0;$i<$query->num_rows;$i++){
                    $fila1 = $query->fetch_assoc();
                    echo "<td>".$fila1['id']."</td>";
                    echo "<td>".$fila1['nombre']."</td>";
                    echo "<td>".$fila1['continente']."</td>";
                    echo "</tr>";
                }     
                    
                  
                    
                    
                
            ?>
    </table>
    </body>
</html>