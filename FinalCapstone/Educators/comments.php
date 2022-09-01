<?php
require_once("../Controllers/commevalcontroller.php");
require_once("../Controllers/userscontroller.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments Page</title>
	<link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

	#comment{
		height: 200px;
		width: 600px;
	}

	#name{
		height: 100px;
		width: 400px;
	}

     
	.animated {
		-webkit-transition: height 0.2s;
		-moz-transition: height 0.2s;
		transition: height 0.2s;
	}

		.stars
	{
		margin: 20px 0;
		font-size: 24px;
		color: #d17581;
	}
		.card-inner{
		margin-left: 4rem;
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
                    <li><a href="rateprofessorpage.php"><i class="fas fa-home"></i>Rate A Professor</a></li>
					<li><a href="submitevaluation.php"><i class="fas fa-sliders-h"></i>Evaluation Platform</a></li>
                    <li><a href="comments.php"><i class="fas fa-sliders-h"></i>Comments</a></li>
					<li><a href="graphicspage.php"><i class="fas fa-stream"></i>Overview</a></li>
                    <li><a href="logout.php"><i class="fas fa-address-book"></i>Log Out</a></li>
        
                </ul>
        </nav>
    </div>

            <div class= "container">
			<h2 class="text-center">Leave A Review</h2>
            <div class="row" id="post-review-box" >
                <div class="col-md-12">
                    <form action="commentprocess.php" method="POST">
						<input id="name" type="text"  name="name" placeholder="Enter faculty or staff name"> <br>
						<br>
                        <input id="comment" type="text"  name="comment" placeholder="Enter your review here..."> 
                        <button class="btn btn-success btn-lg" name="submit" id= "submit" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
		</div>
         
		</div>
	</div>
</div>


<!--To Work with icons-->
<link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>

<div class='container'>
	<h2 class='text-center'>Comment Forum</h2>

<?php


		$commlist = viewComment();

		$usercomment = "";


		foreach ($commlist as $value){
			$usercomment = $value['comment'];

		
			echo "<div class='card'>
				<div class='card-body'>
					<div class='row'>
						<div class='col-md-2'>
							<img src='https://image.ibb.co/jw55Ex/def_face.jpg' class='img img-rounded img-fluid'/>
							<p class='text-secondary text-center'>15 Minutes Ago</p>
						</div>
						<div class='col-md-10'>
							<p>
								<a class='float-left' href='rateprofessorpage.php'><strong>M. X.</strong></a>
								<span class='float-right'><i class='text-warning fa fa-star'></i></span>
								<span class='float-right'><i class='text-warning fa fa-star'></i></span>
								<span class='float-right'><i class='text-warning fa fa-star'></i></span>
								<span class='float-right'><i class='text-warning fa fa-star'></i></span>

						</p>
						<div class='clearfix'></div>
							<p>$usercomment<p>
								<a class='float-right btn btn-outline-primary ml-2'> <i class='fa fa-reply'></i> Reply</a>
								<a class='float-right btn text-white btn-danger'> <i class='fa fa-heart'></i> Like</a>
						</p>
						</div>
					</div>

				";

		}

?>



	        	


</body>
</html>