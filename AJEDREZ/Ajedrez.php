<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // i para repetir las filas horizontales
        $i=1;
        // col para las celdas 
        $col=1;
        // el tamaño va a ser el doble del que le pidas 
        $var=9;
        // con esta variable se arregla las dobles casillas
        $tam=$var;
        //tamaño de celda/img 
        $tamc=40;
        $color=1;

        //inicio tabla
        echo "<table border = 1 >";
        // repetir las filas 
        for($i=1; $i<=$tam; $i++)
        {
            echo "<tr>";
                // para repetir celdas 
                for($col=1; $col<=$tam ; $col++)
                {
                    if($color=1)
                    {
                        echo "<td>";
                        echo '<img src="./blanco.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                        $color++;
                        echo $color;
                        echo "</td>";
                        if($col!=$tam)
                        {
                            $color--;
                        }
                    }

                    if($color=2)
                    {
                        echo "<td>";
                        echo '<img src="./negro.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';  
                        $color--; 
                        echo $color;   
                        echo "</td>";      
                        if($col!=$tam)
                        {
                            $color--;
                        }        
                    }
                }
           echo "</tr>";
        }

        echo "</table>";
    ?>
</body>
</html> 