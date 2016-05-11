<?php
$a = array(
    0 => array(
        0 => 'AA',
        1 => 'AB',
    ),
    1 => array(
        0 => 'BA',
        1 => 'BB',
    ),
    2 => array(
        0 => 'CA',
        1 => 'CB',
    ),
);

for( $i=0 ; $i<3 ; $i++ ){
    foreach ($a[$i] as $key => $value) {
        echo $i ." " .$key ." " .$value . "<br>";
    }
}

?>
