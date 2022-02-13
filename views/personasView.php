<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de personas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
               <td>ID</td>
               <td>NOMBRE</td>
               <td>APELLIDO</td> 
               <td>EDAD</td>
               <td>TELEFONO</td>
               <td>CORREO</td>
            </tr>
        </thead>
        <tbody>
            <?php            
            foreach($registro as $dato){
                $id = $dato['id'];
                $nombre = $dato['name'];
                $apellido = $dato['lastname'];
                $edad = $dato['age'];
                $numero = $dato['phonenumber'];
                $correo = $dato['email'];
                echo "<tr>";
                echo "<td>".$dato['id']."</td>";
                echo "<td>".$dato['name']."</td>";
                echo "<td>".$dato['lastname']."</td>";
                echo "<td>".$dato['age']."</td>";
                echo "<td>".$dato['phonenumber']."</td>";
                echo "<td>".$dato['email']."</td>";                
                echo "</tr>";       
            }
            ?>
        </tbody>
    </table>    
</body>
</html>