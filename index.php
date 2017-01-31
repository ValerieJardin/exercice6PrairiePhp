<?php

function tableau($parameter)
{
  sort ($parameter);
  return ($parameter);
}
$langage = array("HTML", "CSS", "Javascript", "PHP");
$result = tableau ($langage);
foreach ($result as $key => $value)
{
  echo $value . " ";# code...
}
function fusion($parameter1)
{
  $imp = implode ($parameter1);
  return ($imp);
}
$langage = array("HTML", "CSS", "Javascript", "PHP");
$result1 = fusion ($langage);
  echo $result1

 ?>
