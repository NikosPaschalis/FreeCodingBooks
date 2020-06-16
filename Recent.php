
<?php
require 'connect.php';
include 'GoogleUrlApi.php';
$query = 'SELECT name,source,category,date FROM Books ORDER BY date Desc limit 5';
$result = mysql_query($query,$conn);
if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
$i=1;
// Create instance with key
$key = 'AIzaSyCneqUElXTbEnApyLZOQnpdj5aaK_74Ncc';
$googer = new GoogleURLAPI($key);

// Test: Shorten a URL

while ($row = mysql_fetch_assoc($result)) {
    $shortDWName = $googer->shorten($row['source']);
 
    echo '<tr>
    <th scope="row">'.$i.'</th>
    <td>'."<i class='fa fa-book fa-lg' aria-hidden='true'></i>"." ".$row['name'].'</td>
   <td>'."<i class='fa fa-external-link fa-lg' aria-hidden='true'></i>"." ".'<a href="'.$shortDWName.'">'.$shortDWName.'</a></td>
    <td>'."<i class='fa fa-tag fa-lg' aria-hidden='true'></i>"." ".$row['category'].'</td>
   </tr>';
    $i++;
}
mysql_close($conn);
?>
 