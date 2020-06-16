<?php
include 'connect.php';



$query = "SELECT name, category FROM Requests";
$result = mysql_query ($query,$conn);

if(!$result)
{
    die("Couldn't load requested books".mysql_error());
}

while($row = mysql_fetch_assoc($result))
{
    echo "<tr class='table_data'>";
    echo "<td>".$row['name']."</td>"."<td>".$row['category']."</td>"."<td>Delete <i class='delete fas fa-trash-alt' aria-hidden='true'></i></td>";
    echo "</tr>";

    
}

                  $result = mysql_query( "select count(id) as num_rows from Books" );
                        $row = mysql_fetch_object( $result );
                        $total = $row->num_rows;
                        echo $total;

?>
