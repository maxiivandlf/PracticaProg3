<?php
if(isset($_POST['cat']) and isset($_POST['ant'])){
    $cat=$_POST['cat'];
    $ant=$_POST['ant'];
    $montoCat=0;
    if($cat){
        if($cat == 'a'){
            $montoCat=4050.55;
        }elseif($cat=='b'){
            $montoCat=3209.20;
        }elseif($cat=='c'){
            $montoCat=2575.73;
        }elseif($cat=='d'){
            $montoCat=1812.28;
        }
        //calculo total haberes
        if($ant>0){
            $totalAnt=($montoCat*1.1)*$ant;
            $presentismo=$montoCat*1.15;
            $deEspecial=$montoCat*1.5;
            $totalHaberes=$totalAnt+$presentismo+$deEspecial;
            //Descuentos
            $obraSocial=$totalHaberes*0.05;
            $aporteJub=$totalHaberes*0.11;
            $totalDescuentos=$obraSocial+$aporteJub;
            //Neto a cobrar
            $netoHaberes=$totalHaberes-$totalDescuentos;
            echo "<h2>Su categoria es '$cat' y su antiguedad es $ant años</h2>";
            echo "<p>Sueldo basico : $montoCat</p>";
            echo "<p>Antiguedad: $totalAnt</p>";
            echo "<p>Presentismo: $presentismo</p>";
            echo "<p>Dedicación especial: $deEspecial</p>";
            echo "<h2>Descuentos</h2>";
            echo "<p>Aportes jubilatorios: $aporteJub</p>";
            echo "<p>Descuento Obra Social: $obraSocial</p>";
            echo "<h2>Totales</h2>";
            echo "<p>Total de Haberes $totalHaberes</p>";
            echo "<p>Total de Descuentos $totalDescuentos</p>";
            echo "<h3>Neto a cobrar: $netoHaberes</h3>";
        }else{
            echo "Antiguedad no validas";
            }
    }else{
        echo "Categoría no validas";
    }
    
}
