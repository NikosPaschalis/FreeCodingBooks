<!DOCTYPE html>
<html>
    <head>
      <title>FreeCodingBooks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css" >
        <link rel="stylesheet" href="fa/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="index_style.css" >    
        <style>
    html,body
    {
        height: 100%;
        margin: 0;
    }
    .container-fluid
    {
        height: 100%;
        /*background-color: #252830;*/
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
    ul{
        list-style-type:none;
    }
        </style>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container-fluid" style="margin-top:5rem;">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <h2><kbd>&lt;Contact&gt;</kbd></h2>
        <h3>
            Feel free to send an e-mail on <a href="mailto:nikospasxalis94@gmail.com">nikospasxalis94@gmail.com</a><br>
            You can also find me on:
        </h3>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <i class="fab fa-facebook-f fa-3x"></i><a style="" href="https://www.facebook.com/nikos.pasxalis.5">Like me on Facebook</a>  
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-linkedin-in fa-3x"></i><a style="" href="https://www.linkedin.com/in/nikospasxalis/">Connect on LinkedIn</a>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-twitter fa-3x"></i><a style="" href="https://twitter.com/NikosPasxalis94">Follow me on Twitter</a>
                </li>
            </ul>
            <h2><kbd>&lt;/Contact&gt;</kbd></h2>
            </div>
            </div>
        </div>
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
        <form>
          <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your username">
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password">
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
    </body>
</html>