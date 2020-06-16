<?php
include "connect.php";
if($_POST['data'])
{
    $name = $_POST['data'];
    $query = "DELETE FROM Requests WHERE name='$name'";
    $result = mysql_query($query,$conn);
    if($result)
    {
        echo " Request removed successfully!";
    }
    else
    {
        echo "Request failed".$result."".mysql_error($conn);
    }
}


?>