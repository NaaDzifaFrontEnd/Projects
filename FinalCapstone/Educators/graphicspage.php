<?php
require ("../Database/core.php");

require ("../Controllers/evaluationcontroller.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Review Report Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    .wrapper{
    height: 100%;
    width: 300px;
    position: relative;
    }
    .wrapper .menu-btn{
    position: absolute;
    left: 20px;
    top: 10px;
    background: #4a4a4a;
    color: #fff;
    height: 45px;
    width: 45px;
    z-index: 9999;
    border: 1px solid #333;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    }
    #btn:checked ~ .menu-btn{
    left: 247px;
    }
    .wrapper .menu-btn i{
    position: absolute;
    transform: ;
    font-size: 23px;
    transition: all 0.3s ease;
    }
    .wrapper .menu-btn i.fa-times{
    opacity: 0;
    }
    #btn:checked ~ .menu-btn i.fa-times{
    opacity: 1;
    transform: rotate(-180deg);
    }
    #btn:checked ~ .menu-btn i.fa-bars{
    opacity: 0;
    transform: rotate(180deg);
    }
    #sidebar{
    position: fixed;
    background: #404040;
    height: 100%;
    width: 270px;
    overflow: hidden;
    left: -270px;
    transition: all 0.3s ease;
    }
    #btn:checked ~ #sidebar{
    left: 0;
    }
    #sidebar .title{
    line-height: 65px;
    text-align: center;
    background: #333;
    font-size: 25px;
    font-weight: 600;
    color: #f2f2f2;
    border-bottom: 1px solid #222;
    }
    #sidebar .list-items{
    position: relative;
    background: #404040;
    width: 100%;
    height: 100%;
    list-style: none;
    }
    #sidebar .list-items li{
    padding-left: 40px;
    line-height: 50px;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid #333;
    transition: all 0.3s ease;
    }
    #sidebar .list-items li:hover{
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    box-shadow: 0 0px 10px 3px #222;
    }
    #sidebar .list-items li:first-child{
    border-top: none;
    }
    #sidebar .list-items li a{
    color: #f2f2f2;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    height: 100%;
    width: 100%;
    display: block;
    }
    #sidebar .list-items li a i{
    margin-right: 20px;
    }
    #sidebar .list-items .icons{
    width: 100%;
    height: 40px;
    text-align: center;
    position: absolute;
    bottom: 100px;
    line-height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    #sidebar .list-items .icons a{
    height: 100%;
    width: 40px;
    display: block;
    margin: 0 5px;
    font-size: 18px;
    color: #f2f2f2;
    background: #4a4a4a;
    border-radius: 5px;
    border: 1px solid #383838;
    transition: all 0.3s ease;
    }
    #sidebar .list-items .icons a:hover{
    background: #404040;
    }
    .list-items .icons a:first-child{
    margin-left: 0px;
    }
    .content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #202020;
    z-index: -1;
    width: 100%;
    text-align: center;
    }
    .content .header{
    font-size: 45px;
    font-weight: 700;
    }
    .content p{
    font-size: 40px;
    font-weight: 700;
    }


    body {
    padding-top: 70px;
    }
    .btn-grey{
        background-color:#D8D8D8;
        color:#FFF;
    }
    .rating-block{
        background-color:#FAFAFA;
        border:1px solid #EFEFEF;
        padding:15px 15px 20px 15px;
        border-radius:3px;
        
    }
    .bold{
        font-weight:700;
    }
    .padding-bottom-7{
        padding-bottom:7px;
    }

    .review-block{
        background-color:#FAFAFA;
        border:1px solid #EFEFEF;
        padding:15px;
        border-radius:3px;
        margin-bottom:15px;
       
    }
    .review-block-name{
        font-size:12px;
        margin:10px 0;
    }
    .review-block-date{
        font-size:12px;
    }
    .review-block-rate{
        font-size:13px;
        margin-bottom:15px;
    }
    .review-block-title{
        font-size:15px;
        font-weight:700;
        margin-bottom:10px;
    }
    .review-block-description{
        font-size:13px;
    }
  </style>

  <body>
  <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">
            Menu</div>
            <ul class="list-items">
                <li><a href="rateprof.php"><i class="fas fa-home"></i>Rate A Professor</a></li>
                <li><a href="submitevaluation.php"><i class="fas fa-sliders-h"></i>Evaluation Platform</a></li>
                <li><a href="comments.php"><i class="fas fa-address-book"></i>Comments</a></li>
				        <li><a href="graphicspage.php"><i class="fas fa-stream"></i>Overview</a></li>
                <li><a href="../General/logout.php"><i class="fas fa-cog"></i>Log Out</a></li>
            </ul>
     </nav>
    </div>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Review</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../General/logout.php">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<?php
     echo"<div class='container'>
    			
		<div class='row'>
			<div class='col-sm-3'>
				<div class='rating-block'>
					<h4>Average Rating</h4>
					<h2 class='bold padding-bottom-7'>3 <small>/ 5</small></h2>
					<button type='button' class='btn btn-warning btn-sm' aria-label='Left Align'>
					  <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
					</button>
					<button type='button' class='btn btn-warning btn-sm' aria-label='Left Align'>
					  <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
					</button>
					<button type='button' class='btn btn-warning btn-sm' aria-label='Left Align'>
					  <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
					</button>
					<button type='button' class='btn btn-default btn-grey btn-sm' aria-label='Left Align'>
					  <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
					</button>
					<button type='button' class='btn btn-default btn-grey btn-sm' aria-label='Left Align'>
					  <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
					</button>
				</div>
			</div>
			<div class='col-sm-3' style='float: right;'>
				<h4>Rating Breakdown</h4>
				<div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Personality <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='5' aria-valuemin='0' aria-valuemax='5' style='width: 100%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class='pull-right' style='margin-left:10px;'>3</div>
				</div>
				<div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Interaction <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='4' aria-valuemin='0' aria-valuemax='5' style='width: 80%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class='pull-right' style='margin-left:10px;'>3</div>
				</div>
				<div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Creativity <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow='3' aria-valuemin='0' aria-valuemax='5' style='width: 60%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class='pull-right' style='margin-left:10px;'>3</div>
				</div>
				<div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Dependability <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow='2' aria-valuemin='0' aria-valuemax='5' style='width: 40%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class='pull-right' style='margin-left:10px;'>3</div>
				</div>
				<div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Initiative <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='1' aria-valuemin='0' aria-valuemax='5' style='width: 20%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
              </div>
              </div>
              <div class='pull-right' style='margin-left:10px;'>3</div>
              </div>
              <div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Teamwork <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='1' aria-valuemin='0' aria-valuemax='5' style='width: 40%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
              </div>
              </div>
              <div class='pull-right' style='margin-left:10px;'>3</div>
              </div>
              <div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Organizational skills  <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow='1' aria-valuemin='0' aria-valuemax='5' style='width: 60%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
              </div>
              </div>
              <div class='pull-right' style='margin-left:10px;'>3</div>
              </div>
              <div class='pull-left'>
					<div class='pull-left' style='width:45px; line-height:1;'>
						<div style='height:9px; margin:5px 0;'>Problem Solving <span class='glyphicon glyphicon-star'></span></div>
					</div>
          <br>
          <br>
					<div class='pull-left' style='width:200px;'>
						<div class='progress' style='height:9px; margin:8px 0;'>
						  <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow='1' aria-valuemin='0' aria-valuemax='5' style='width: 80%'>
							<span class='sr-only'>80% Complete (danger)</span>
						  </div>
						</div>
					</div>
					<div class='pull-right' style='margin-left:10px;'>3</div>
				</div>
			</div>			
		</div>"; 

		?>


    <?php

    $reviewlist = viewAll();

    $inputdiff = "";
    $inputdesc = "";

    foreach ($reviewlist as $value){
      $inputdiff = $value['different'];
      $inputdesc = $value['userdescription'];


  
                echo"<div class='row' >
                  <div class='col-sm-7'>
                    <hr/>
                    <div class='review-block' >
                      <div class='row'>
                        <div class='col-sm-3'>
                          <img src='http://dummyimage.com/60x60/666/ffffff&text=No+Image' class='img-rounded'>
                          <div class='review-block-name'><a href='frateprof.php'>M.X.</a></div>
                        </div>
                        <div class='col-sm-9'>
                          <div class='review-block-rate'>
                            <button type='button' class='btn btn-warning btn-xs' aria-label='Left Align'>
                              <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
                            </button>
                            <button type='button' class='btn btn-warning btn-xs' aria-label='Left Align'>
                              <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
                            </button>
                            <button type='button' class='btn btn-warning btn-xs' aria-label='Left Align'>
                              <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
                            </button>
                            <button type='button' class='btn btn-default btn-grey btn-xs' aria-label='Left Align'>
                              <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
                            </button>
                            <button type='button' class='btn btn-default btn-grey btn-xs' aria-label='Left Align'>
                              <span class='glyphicon glyphicon-star' aria-hidden='true'></span>
                            </button>
                          </div>
                          <div class='review-block-title'>$inputdiff</div>
                          <div class='review-block-description'>$inputdesc</div>
                        </div>
                      </div>
                      <hr/>
		</div>
		</div>
		</div>
    </div>
		
    </div> <!-- /container -->";

    }
    ?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
