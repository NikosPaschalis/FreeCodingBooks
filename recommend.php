<?php
include 'connect.php';

if($_POST['data'])
{
    $data = $_POST['data'];
    $query = "SELECT name,category FROM Books WHERE name LIKE '%{$data}%'  OR category LIKE '%{$data}%' LIMIT 3";
    $result = mysql_query($query,$conn);
    if(! $result )
    {
         //die('There is no match: ' . mysql_error()); This one is for testing
         die('There is no match.');
    }
    echo "Suggestions:";
    $counter = 0;
    while ($row = mysql_fetch_assoc($result)) {
        if($counter == 0)
        {
            echo "<b style='color:#df691a;'>".$row['name']."</b>";
        }
        else {
            echo "<b style='color:#df691a;'>,".$row['name']."</b>";
        }
        $counter++;
    }
mysql_close($conn);
}


?>