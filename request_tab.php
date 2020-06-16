<!DOCTYPE html>
<html>
    <head>
  <title>FreeCodingBooks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css" >
    <link rel="stylesheet" href="fa/css/font-awesome.min.css">
    <style> 
    html,body
    {
        height: 100%;
        margin: 0;
    }

.container-fluid
{
    height: 100%;
    margin: 0;
}
/* Overline From Center */
.hvr-overline-from-center {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  overflow: hidden;
}
.hvr-overline-from-center:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 50%;
  right: 50%;
  top: 0;
  background: white;
  height: 4px;
  -webkit-transition-property: left, right;
  transition-property: left, right;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-overline-from-center:hover:before, .hvr-overline-from-center:focus:before, .hvr-overline-from-center:active:before {
  left: 0;
  right: 0;
}
li
{
    padding-left: 1rem;
}
.navbar
{
    margin-bottom: 0px;
}

    .form-rounded{
      border-radius:1rem;
    }
    </style>
</head>
<body>
<?php include 'navbar.php' ?>
<div style="padding-top:5rem;"   class="container-fluid">
    <div class="row">
        <div  class="col-xs-12 col-sm-12 col-md-12">
            <h4><kbd>You didn't found what you need? Sent us a request!</kbd></h4>
            <form>
                <div class="form-group">
                    <label for="name"><kbd>Name:</kbd></label>
                    <input type="text" class="form-control form-rounded" id="name" placeholder="Book name" required/>    
                </div>
                <div class="form-group">
                    <label for="category"><kbd>Category:</kbd></label>
                    <input type="text" class="form-control form-rounded" id="category" placeholder="Category"/>
                    <p class="help-block">Optional *</p>
                </div>
                <button id="request_book" type="button" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
    <script>
            $("#request_book").click(function()
            {
                var name = $("#name").val();
                var category = $("#category").val();
                $.post("request.php",
                {
                    name : name,
                    category : category
                },function(data) {
                    alert(data);
                    //Reset from input data
                    $('#myform').trigger('reset');
                   
                });
            });        
    </script>
</body>
</html>