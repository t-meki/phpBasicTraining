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

?>
