<?php
$child = true;
$senior = false;
$ticket = null;

if($child || $senior){
  $ticket = 10;
}
else{
  $ticket = 15;
}
echo "The ticket price is \${$ticket}";
?>