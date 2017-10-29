<?php
echo '<link href="estilo.php" rel="stylesheet" type="text/css">';
$array = array(1,2,3,4,5,6,7,8,"&nbsp&nbsp");

//reordenar elementos de array

shuffle($array);
$n=0;
echo'<body>';
//asignar a array multimensional
echo'<div >';
echo"<table id='object' class='slideUp' style='margin: 0 auto;'>";
for ($i = 0; $i < 3; $i++) {
   echo"<tr>";
  for ($j = 0; $j < 3; $j++) {
    $op[$i][$j]= $array[$n];
    echo "<td class='column' id=e$i$j>"; echo $op[$i][$j]; echo"</td>";
    if ($op[$i][$j]==="&nbsp&nbsp") {
      //guardar posición del espacio en blanco
      $espacio_blanco[$i][$j]=$op[$i][$j];
    }
    $n++;
   }
   echo "</tr>";
 }
 echo "</table>";

echo'</div>';
echo'</body>';
