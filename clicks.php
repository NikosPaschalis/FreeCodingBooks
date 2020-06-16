<?php
include 'connect.php';

if($_POST['data'])
{
    $click = $_POST['data'];
    $query = "INSERT INTO Clicks (id,click) VALUES (default,'$click')";
    $result = mysql_query($query,$conn);
    if(!$result)
       {
            echo "Error: " . $query . "<br>" . mysql_error($conn);     
       }
    else
       {
           echo "Data uploaded successfully";
       }
}
mysql_close($conn);
?>