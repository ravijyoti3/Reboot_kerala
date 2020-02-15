<?php
session_start();
if($_SESSION['flag']=="pro")
  include 'nav_login_pro.php';

  elseif($_SESSION['flag']=="user")
  include 'nav_login_user.php';

  else
  include 'nav_no_login.php';
$select_pro = mysqli_query($conn,"SELECT * FROM provider where pro_email='$_SESSION[pro_email]'");
$row_pro = mysqli_fetch_assoc($select_pro);


?>

<html>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Archivo|Roboto|Rubik&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>

<!--USER DETAIL-->

<section id="user_det" style="text-align:center;align-items:center;"> 
<center><div class="jumbotron mt-3"">
                <div class="dboard_user ">
                                            <div id="dboard_user_det"> 
                                <h1 id="dboard_name"><?php echo $_SESSION['pro']['pro_name'];?></h1>
                                <div style="background: #178BDD;width:100%;line-height:20px;"><?php echo $_SESSION['pro']['pro_email'];?></div>
                                <p style="font-weight: 300;font-size: 22px;line-height: 48px;"><?php echo $_SESSION['pro']['pro_phone'];?></p>
                                </div>
                        </div>
                </div>
</center>
</section>

        <!--JOB APPLIED-->

<section id="job_app" style="text-align:center;align-items:center;">
                <center><div style="text-align:left;width:70%;margin-left:5%"><h1 id="dboard_work">Prior posted services</h1></div></center> 
                <center><div class="jumbotron mt-3" style="padding:0%;border: 0.4px solid lightgray;box-sizing: border-box;border-radius: 5px;">
                        <table style="width:100%;text-align:center;">
                           <tr style="background: #178BDD;line-height:40px;box-shadow: 0 2px 3px gray;">
                              <th>Service Name</th>
                              <th>Service Detail</th>
                              <th>Location</th>
                              <th>Service Provider</th>
                           </tr>
                        </table>      
                </div></center>
                </section>

</body>
</html>