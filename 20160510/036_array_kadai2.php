<?php
$d = [2, 3, 5, 7, 11];

for( $i = 0 ; $i < 2 ; $i++ ){
    echo '-----<br>';
    if( $i===0  ){
        foreach ( $d as $value ) {
            echo $value."<br>";
        }
    }
}

$d[5] = "研修";
for( $i = 0 ; $i < 2 ; $i++ ){
    echo '-----<br>';
    if( $i===0  ){
        foreach ( $d as $value ) {
            echo $value."<br>";
        }
    }
}
var_dump($d);

?>
