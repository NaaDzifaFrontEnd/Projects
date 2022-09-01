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

    .content{
        text-align: center;
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
                <li><a href="comments.php"><i class="fas fa-address-book"></i>Comments</a></li>
                <li><a href="logout.php"><i class="fas fa-cog"></i>Log Out</a></li>
            </ul>
     </nav>
    </div>
<div class="content">
      <div class="header" >
      <form action="formprocess.php" id="StudentEvaluation100" method="POST" text-align: center;>
    
        <h1 >Evaluation Form</h1>
        <table style="width:100%;max-width: 700px; border: 0;" cellpadding="4" cellspacing="0">
        <tr> <td colspan="2">
        <br /> <b>Evaluator</b>
        </td> </tr> <tr> <td style="width:50%">
        <label for="EvaluatorName">Evaluator name*:</label><br />
        <input name="EvaluatorName" type="text" maxlength="100" style="width:100%;max-width: 300px;" />
        </td> <td style="width:50%">
        <label for="KnewStudentFor">How long have you known the educator?</label><br />
        <select name="KnewStudentFor">
        <option value="0-1 year">1 year or less</option>
        <option value="1-3 years">1 - 3 years</option>
        <option value="over 3 years">more than 3 years</option>
        </select>
        </td> </tr> <tr> <td>
        <label for="EvaluatorIndexNumber">Evaluator Index Number:</label><br />
        <input name="EvaluatorIndexNumber" type="text" maxlength="50" style="width:100%;max-width: 300px;" />
        </td> <td>
        <label for="EvaluatorEmailAddress">Evaluator E-mail Address:</label><br />
        <input name="EvaluatorEmailAddress" type="email" maxlength="100" style="width:100%;max-width: 300px;" />
        </td> </tr> <tr> <td colspan="2">
        <br /> <b>Educator</b>
        </td> </tr> <tr> <td>
        <label for="EducatorName">Educator name*:</label><br />
        <input name="EducatorName" type="text" maxlength="100" style="width:100%;max-width: 300px;" />
        </td> <td>
        <label for="YearInSchool">Position in school:</label><br />
        <select name="Rank">
        <option value="">- Rank -</option>
        <option value="Freshman">Staff</option>
        <option value="Sophomore">Faculty</option>
        <option value="Junior">Faculty Intern</option>
        </select>
        
        </td> </tr> <tr> <td colspan="2">
        <br /> <b>Performance</b>
        </td> </tr> <tr> <td>
        <select name="Personality" style="width:100%;max-width:155px;">
        <option value="">- Personality -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>  
        <select name="Interactions" style="width:100%;max-width:155px;">
        <option value="">- Interactions -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>
        </td> <td>
        <select name="Creativity" style="width:100%;max-width:155px;">
        <option value="">- Creativity -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>  
        <select name="Dependability" style="width:100%;max-width:155px;">
        <option value="">- Dependability -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>
        </td> </tr> <tr> <td>
        <select name="Initiative" style="width:100%;max-width:155px;">
        <option value="">- Initiative -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>  
        <select name="Teamwork" style="width:100%;max-width:155px;">
        <option value="">- Teamwork -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>
        </td> <td>
        <select name="OrganizationalSkills" style="width:100%;max-width:155px;">
        <option value="">- Organizational skills -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>  
        <select name="ProblemSolving" style="width:100%;max-width:155px;">
        <option value="">- Problem solving -</option>
        <option value="Poor">Poor</option>
        <option value="Below Average">Below Average</option>
        <option value="Average">Average</option>
        <option value="Above Average">Above Average</option>
        <option value="Excellent">Excellent</option>
        <option value="N/A">N/A</option>
        </select>
        </td> </tr> <tr> <td colspan="2">
        <br />
        <label for="WhatDistinguishes">What distinguishes this educator from others?</label>
        <textarea name="WhatDistinguishes" rows="7" cols="40" style="width:100%;max-width: 650px;"></textarea>
        </td> </tr> <tr> <td colspan="2">
        <label for="Describe">How would you describe this educator to others?</label>
        <textarea name="Describe" rows="7" cols="40" style="width:100%;max-width: 650px;"></textarea>
        </td> </tr> <tr> <td colspan="2">
        <label for="Comments">Other relevant comments:</label>
        <textarea name="Comments" rows="7" cols="40" style="width:100%;max-width: 650px;"></textarea>
        </td> </tr> <tr> <td>
        <br />
        * - required fields
        </td> <td>
        <br />
        
        <input name="submit" type="submit" value="Submit" />
        
        </td> </tr>
        </table>
    </form>
</div>
</body>
</html>
