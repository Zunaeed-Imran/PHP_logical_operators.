<?php
  $age = 18;
  $citizen = true;
  
  if (!$age >= 18 || !$citizen){
    echo "You can't vote";
  }else{
    echo "You can vote";
  }
?>