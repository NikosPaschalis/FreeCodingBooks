<?php
    $host = "127.0.0.1";
    $user = "nikosp";                     
    $pass = "";                                  
    $db = "fcb";                                  
                              
    
    $conn = mysql_connect($host, $user, $pass, $db)or die(mysql_error());
    mysql_select_db($db, $conn) or die(mysql_error());
?>