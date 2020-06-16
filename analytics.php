<?php
include 'connect.php';

$result = mysql_query( "select count(id) as num_rows from Books" );
$row = mysql_fetch_object( $result );
$total = $row->num_rows;

$result2 = mysql_query( "select count(id) as num_rows from Requests" );
$row2 = mysql_fetch_object( $result2 );
$total2 = $row2->num_rows;
?>