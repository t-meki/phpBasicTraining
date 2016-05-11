<?php
$a = ['A'=>1, 3=>2, 'Z'=>'Hello', 1=>'ああ'];
var_dump($a);
echo"<br><br>";
foreach ( $a as $key => $value ) {
  echo $value ."<br>";
}
?>
