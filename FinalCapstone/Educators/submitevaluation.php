<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Evaluation</title>
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
    

    body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #5256ad;
    }
    .drag-area{
    border: 2px dashed #fff;
    height: 500px;
    width: 700px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    }
    .drag-area.active{
    border: 2px solid #fff;
    }
    .drag-area .icon{
    font-size: 100px;
    color: #fff;
    }
    .drag-area header{
    font-size: 30px;
    font-weight: 500;
    color: #fff;
    }
    .drag-area span{
    font-size: 25px;
    font-weight: 500;
    color: #fff;
    margin: 10px 0 15px 0;
    }
    .drag-area button{
    padding: 10px 25px;
    font-size: 20px;
    font-weight: 500;
    border: none;
    outline: none;
    background: #fff;
    color: #5256ad;
    border-radius: 5px;
    cursor: pointer;
    }
    .drag-area img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 5px;
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
<div class="content">
      <div class="header">
      <div class="drag-area">
    <a href="../General/evaluationform.php"><button>Link To Evaluation</button></a>
    <input type="file" hidden>
  </div>

  
</div>

</body>
</html>
