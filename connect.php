<?php
    $host = "";
    $user = "";                     
    $pass = "";                                  
    $db = "fcb";                                  
                              
    
    $conn = mysql_connect($host, $user, $pass, $db)or die(mysql_error());
    mysql_select_db($db, $conn) or die(mysql_error());
?>
