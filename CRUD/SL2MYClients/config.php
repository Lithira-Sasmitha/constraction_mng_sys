<?php
$con = new mysqli("localhost", "root" , "" , "sl2my" );

if($con->connect_error)
{
    die("Connection failed" .$con->connect_error);
}
/*else
{
    echo "Successful";
}*/

?>