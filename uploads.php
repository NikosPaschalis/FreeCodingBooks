<?php
include "connect.php";
    if(isset($_POST['submit']))
    {
       $book_name = $_POST['name'];
       $category = $_POST['category'];
       $source = $_POST['source'];
       $file_name = $_FILES['image']['name']; 
       $file_size = $_FILES['image']['size'];
       $type = strtolower(end(explode('image/',$_FILES['image']['type'])));
       $tmp_name = $_FILES['image']['tmp_name']; // temporary location after upload
       $extensions = array("jpg","jpeg","png");
       if((in_array($type,$extensions) === true) && ($file_size<=5000000) )
       {
            $file_path = "uploads/".$file_name;
            
            $query = "INSERT INTO Images (book_name,category,file_name,path) VALUES ('$book_name','$category','$file_name','$file_path')";
            $result = mysql_query($query,$conn);
            if(!$result)
            {
                echo "Error: " . $query . "<br>" . mysql_error($conn);  
            }
            else
            {
                move_uploaded_file($tmp_name,"uploads/".$file_name);
                echo $file_name." uploaded successfully";
            }
       }
       else
       {
            echo "This type is not supported  or exceeds the 5MB size limit"+"$type"+"$file_size";
        
       }
       $query = "INSERT INTO Books (id,name,category,source) VALUES (default,'$book_name','$category','$source')";
       $result = mysql_query($query,$conn);
       if(!$result)
       {
            echo "Error: " . $query . "<br>" . mysql_error($conn);     
       }
       else
       {
           echo "Data uploaded successfully";
       }
    }// end isset submit
?>