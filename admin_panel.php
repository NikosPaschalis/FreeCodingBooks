<!DOCTYPE html>

<html>
    <head>
      <title>FCB_AdminPanel</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link id="themes" rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="fa/css/font-awesome.min.css">
<style>
    .form-control
    {
        margin-bottom:1rem;
        width:50%;
    }
        .form-rounded{
      border-radius:1rem;
    }
</style>
    </head>
    <body>
        
    <h1 align="center">Admin Panel</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
               <h2>Book entry</h2>
               <form action="uploads.php" method="POST" id="form" enctype="multipart/form-data"> 
                 <!---
                  <div class="form-group">
                     <label for="name">Name:</label>
                     <input class="form-control" type="text" name="name"/>
                  </div>
                --> 
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control form-rounded" name="name"  placeholder="Enter Name">
                  </div>
                    <div class="form-group">
                  <label for="category">Category</label>
                  <input type="text" class="form-control form-rounded" name="category"  placeholder="Enter Category">
                  </div>
                    <div class="form-group">
                  <label for="source">Source</label>
                  <input type="text" class="form-control form-rounded" name="source"  placeholder="Enter Source Link">
                  </div>
                  <!---
                  
                   <div class="form-group">
                     <label for="category">Category:</label>
                     <input class="form-control" type="text" name="category"/>
                  </div>
                  <div class="form-group">
                     <label for="source">Source:</label>
                     <input class="form-control" type="text" name="source"/>
                  </div>
                --->
               <div class="form-group">
                  <label for="image">Cover image</label>
                  <input type="file" class="form-control-file" name="image" id="image">
                  <small  class="form-text text-muted">If you won't upload any image, default one will be applied.</small>
                </div>
              <!---
                 <div class="form-group">
                 <label for="image">Cover:</label>
                 <input class="form-control" type="file" name="image"/>
              </div>-->
            <input type="submit" name="submit" class="btn btn-primary form-rounded"></input>
  <!---<input type="submit" name="submit"  class="btn btn-primary"/>-->
            </form>   
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <h2 class="text-center">Site analytics</h2>
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Total number of books
                    <span id="book" class="badge badge-primary badge-pill">
                        <?php
                        include 'connect.php';
                        $result = mysql_query( "select count(id) as num_rows from Books" );
                        $row = mysql_fetch_object( $result );
                        $total = $row->num_rows;
                        echo $total;
                        ?>    
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Requests
                    <span id="request" id="getrequests" class="badge badge-primary badge-pill">
                    <?php
                        include 'connect.php';
                        $result = mysql_query( "select count(id) as num_rows from Requests" );
                        $row = mysql_fetch_object( $result );
                        $total = $row->num_rows;
                        echo $total;
                    ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Clicks
                    <!--- Clicks are calculated since 24/10/2018--->
                    <span id="click" class="badge badge-primary badge-pill">
                        <?php
                        include 'connect.php';
                        $result = mysql_query( "select count(id) as num_rows from Clicks" );
                        $row = mysql_fetch_object( $result );
                        $total = $row->num_rows;
                        echo $total;
                        ?>
                    </span>
                    
                  </li>
                </ul>
        </div>
    </div><!--- row -->
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div id="removed"></div>
        <h2 align="center">Requests queue</h2>
        <table class="table table-striped table-inverse">
            <thead >
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Category
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
        <tbody id="table_results">


        </tbody>
        </table>
    </div>
</div>

</div>
<script>
$.get("fetch_requests.php", //Required URL of the page on server
    function(data) { // Required Callback Function
    // alert("All good"); //"response
    $("#table_results").html(data);
    //$("#book").html(data);
    //$("#request").html(data);
    //("#click").html(data);
    
        });
$("#table_results").on('click','.delete',function()
{
    var $row = $(this).closest("tr");
    $tds = $row.find("td:nth-child(1)");
    $.each($tds,function()
    {
        data = $(this).text();
       // alert($name);
        $.post("delete_requests.php",
        {
          data: data   
        },
        function(data)
        {
            $("#removed").html(data);
            $.get("fetch_requests.php", //Required URL of the page on server
                function(data) { // Required Callback Function
            // alert("All good"); //"response
                $("#table_results").html(data);
                });
        }
            )
    })
});
</script>
</body>
</html>