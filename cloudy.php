<?php
$temp = 0;
$cloudy = false;

if ($temp < 0 || $temp > 30){
  echo "The weather is bad. </br>";
}else{
  echo "the weather is good. </br>";
}

if (!$cloudy){
  echo "It's sunny.";
}else{
  echo "it's cloudy.";
}

?>