<?php
header('Content-Type: text/css');

$color =   array
(
            array('#FA5858', '#ACFA58', '#CC2EFA'),
            array('#FAAC58', '#2ECCFA', '#FA58D0'),
            array('#F7D358', '#2E64FE', '#FE2E64')
          );

shuffle($color);

echo 'table {
    text-align:center;
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 62px;
    height:500px;
    width: 500px;
    }';

echo 'th {
    padding: 8px;
    border-bottom: 20px
    }';


for ($i=0; $i < 3; $i++) {
  for ($j=0; $j <3 ; $j++) {
    $c=$color[$i][$j];
  echo "#e$i$j{
    background-color:$c;
    color: white;
   }";
  }
}

?>
