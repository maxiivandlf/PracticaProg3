<?php
    require "./conexion.php"; 

    $materia = $_POST['materia'];
    $alumno = $_POST['alumno'];

    if($materia=="AM2"){
        $id_mat="'1'";
    }else if($materia=="PROG3"){
        $id_mat="'2'";
    }else if($materia=="BD"){
        $id_mat="'3'";
    
    }

   // echo $id_mat;

    




   	$sql = "SELECT alumnos.nombre, nota, observacion, materias.materia FROM alumnos, materias, notas
       WHERE id_mat = id_materias and id_materias = $id_mat AND nombre = '$alumno'";


   $resultado = pg_query($sql);


    echo '<div class="item" >Materia</div>';
    echo '<div class="item" >Nombre</div>';
    echo '<div class="item" >Nota</div>';
    echo '<div class="item" >Observacion</div>';


    while($row = pg_fetch_array($resultado))
    {
        
        echo '<div>'.$row['materia'].'</div>';
        echo '<div>'.$row['nombre'].'</div>';
        echo '<div>'.$row['nota'].'</div>';
        echo '<div>'.$row['observacion'].'</div>';
        
        

    }
	pg_close($conexion);

    ?>