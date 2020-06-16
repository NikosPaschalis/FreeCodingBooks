<!DOCTYPE html>
<html>
    <head>
      <title>FreeCodingBooks</title>
      <link rel="shortcut icon" href="/favicon.ico" type="ico">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <link id="themes" rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css" >
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
      <link rel="stylesheet" href="fa/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="index_style.css" />
      <style>
      a{
        color:white;
      }
    figure {
        width: 210px;
        font-size:14px;
        padding:1px;
        display: inline-block;
        margin-top: 1em;
        margin-bottom: 1em;
        margin-left: 10px;
        margin-right: 40px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    figcaption {
        text-align: left;
    }
    @media(max-width: 480px) {
        h4,h1  {
        font-size: 2.3rem;
        text-align: left;
      }
    }
    .form-rounded{
      border-radius:1rem;
    }
    </style>
</head>
<body>
<nav id="navclose" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><i class="fas fa-code"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
     <a class="hvr-overline-from-center" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="hvr-overline-from-center" href="request_tab.php">Request</a>
      </li>
      <li class="nav-item">
        <li ><a class="hvr-overline-from-center" href="contact.php">Contact</a></li>
      </li>
    </ul>
  </div>
</nav>
	<div class="container-fluid" style="margin-top:5rem;">
		<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						
							<h1>Free<kbd style="color:orange;">Coding</kbd>Books</h1>
							<h4 ><kbd>Fun based project providing links for programming relative books in pdf form.</kbd></h4>
							<div align="center">
							<div id="inputwidth" style="padding-top:3rem;">
								<input class="form-control form-rounded" id="search" placeholder="Search by name or category"  type="text" value="">
								<div id="rec" style=""></div>
							</div>
							<div id="result" >
								
							</div>
						</div>
					</div>
			
		</div>
	</div><!---Modal-->
<div id="modal0" class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Admin login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action = "" method = "post">
          <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
  
  $("#result").on('click','a',function(){
    var data = 1;
    console.log("yooooo");
          $.post("clicks.php", //Required URL of the page on server
        { // Data Sending With Request To Server
          data: data
        },
        function(data){ // Required Callback Function
          console.log(data);
        });
    
  });
  
  /*$(".fa-code").on('click',function()
  {
      /*"https://bootswatch.com/cyborg/bootstrap.min.css";
      "https://bootswatch.com/cerulean/bootstrap.min.css";
      "https://bootswatch.com/cosmo/bootstrap.min.css";
      "https://bootswatch.com/darkly/bootstrap.min.css";
      "https://bootswatch.com/journal/bootstrap.min.css";
      "https://bootswatch.com/paper/bootstrap.min.css";
      "https://bootswatch.com/readable/bootstrap.min.css";
      document.getElementById("themes").setAttribute('href','cyborg.css');
     
  });*/
    $("#search").keyup(function()
    {
      var data = $('#search').val();
      var string = data.replace(/[^a-zA-Z0-9]/g,'');
      console.log(data);
      $.post("post.php", //Required URL of the page on server
        { // Data Sending With Request To Server
          data: string
        },
        function(data){ // Required Callback Function
          $("#result").html(data);
        });
      $.post("recommend.php", //Required URL of the page on server
        { // Data Sending With Request To Server
          data: string
        },
        function(data){ // Required Callback Function
          $("#rec").html(data);
        });
    });
  </script>
</body>
</html>