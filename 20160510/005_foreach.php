<?php
$a = [1,'Hello',12,'あああ',2];
var_dump($a);
echo "<br>";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br>";
}
?>
