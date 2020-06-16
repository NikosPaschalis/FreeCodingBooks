<?php
include 'connect.php';
if($_POST['name'] && $_POST['category'])
{
    $name = $_POST['name'];
    $category = $_POST['category'];
    $query = "INSERT INTO Requests (id,name,category) VALUES (default,'$name','$category')";
    $result = mysql_query($query,$conn);
    if($result)
    {
        echo "Request filed";
    }
    else
    {
        echo "Request failed".$result."".mysql_error($conn);
    }
}



?>