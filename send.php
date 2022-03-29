<?php

$j = filter_input(INPUT_GET, 'j', FILTER_SANITIZE_NUMBER_INT);
// The j will return the link with an array which the user has clicked!

?>
<html>
    <head>
    </head>
    <body>
        <?php 
            echo $array[$j];
        ?>
    </body>

</html>