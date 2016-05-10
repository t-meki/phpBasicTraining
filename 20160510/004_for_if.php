<?php
for( $i=0;;$i++ ){
    if( $i===5 ){
        continue;
    }
    if( $i===10 ){
        echo "ループ抜けるよ<br>";
        break;
    }
    echo $i."<br>";
}
?>
