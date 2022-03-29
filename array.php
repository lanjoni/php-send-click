<?php

$i = 10;
// i can with any number!

for ($j = 0; $j < $i; $j++) {
    echo "<a class='".$j."' href='send.php?j=".$j."'>".$array[$j]."</a> <br/>";
}

?>