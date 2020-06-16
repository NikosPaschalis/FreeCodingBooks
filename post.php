
<?php

include 'connect.php';
include 'GoogleUrlApi.php';
$default_pic = "uploads/nopic.jpg";
if($_POST["data"])
{
$data = $_POST["data"];
$query = "SELECT Books.name,Books.category,Books.source,Images.book_name,Images.path
 FROM Books LEFT JOIN Images
ON Books.name = Images.book_name 
WHERE Books.name LIKE '%{$data}%'  OR Books.category LIKE '%{$data}%' ";
// name LIKE '%{$data}%'  OR category LIKE '%{$data}%'

$result = mysql_query($query,$conn);
if(! $result )
{
  //die('Could not get data: ' . mysql_error()); This line is for testing 
  die('Could not get data: Please enter a valid book name or category');
}
$key = 'AIzaSyCneqUElXTbEnApyLZOQnpdj5aaK_74Ncc';
$googer = new GoogleURLAPI($key);

?>
<?php
$counter = 0;
while ($row = mysql_fetch_assoc($result)) {
    $counter ++;
    $shortDWName = $googer->shorten($row['source']);
    if(!isset($row['path']))
    {
        $row['path'] = $default_pic;
    }

    echo "<figure>
    <img src=".$row['path']."  width='200' height='250'/>
    <figcaption>"."<i class='fa fa-book fa-lg' aria-hidden='true'></i>Name:".$row['name']."</figcaption>
    <figcaption>"."<i class='fa fa-tag fa-lg' aria-hidden='true'></i>Category:".$row['category']."</figcaption>
    <figcaption>"."<i class='fa fa-external-link fa-lg' aria-hidden='true'></i>Source:"." "."<a href='".$shortDWName."'>".$shortDWName."</a>"."</figcaption>
    </figure>";
   /*
    echo"
    <div class='card'>
  <h3 class='card-header'>".$row['name']."</h3>
  <img style='width='200'; height='250'; display: block;' src=".$row['path']." alt='Book image'>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>".$row['name']."</li>
    <li class='list-group-item'>".$row['category']."</li>
  </ul>
  <div class='card-body'>
    Source"
    ."<a href='".$shortDWName."'>".$shortDWName."</a>".
  "</div>
  <div class='card-footer text-muted'>
    2 days ago
  </div>
</div>
    ";*/
}
mysql_close($conn);
}
?>




