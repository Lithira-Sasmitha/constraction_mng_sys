<?php

$con = new mysqli('localhost', 'root', '', 'sl2my');

if ($con) {
    echo "";
} else {
    die(mysqli_error($con));
}

?>
