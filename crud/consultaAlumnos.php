<?php
    require "./conexion.php";

   	$sql = "SELECT * FROM alumnos ORDER BY id_alumnos ASC";

    $resultado = pg_query($sql);
    echo '<div class="item" >ID</div>';
    echo '<div class="item" >Nombre</div>';
    echo '<div class="item" >DNI</div>';
    echo '<div class="item" >Email</div>';

    while($row = pg_fetch_array($resultado))
    {
        echo '<div>'.$row['id_alumnos'].'</div>';
        echo '<div>'.$row['nombre'].'</div>';
        echo '<div>'.$row['dni'].'</div>';
        echo '<div>'.$row['email'].'</div>';

    }
	pg_close($conexion);

    ?>