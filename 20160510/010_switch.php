<?php
for($x = 1;$x<5;$x++){
    echo $x ."<br>";
    switch($x){
        case 1:
        echo "値は1だね。<br>";
        break;
    case 2:
    case 3:
        echo "値は2か3だね。<br>";
        break;
    default:
        echo "1でも2でも3でもないね。<br>";
    }
}
?>
