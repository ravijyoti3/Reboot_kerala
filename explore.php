<?php
session_start();
error_reporting(0);
include 'database.php';
if($_SESSION['flag']=="pro")
  include 'nav_login_pro.php';

  elseif($_SESSION['flag']=="user")
  include 'nav_login_user.php';

  else
  include 'nav_no_login.php';

$select_ser = mysqli_query($conn,"SELECT * FROM service");
$ser = mysqli_fetch_assoc($select_ser);


?>

<html>
    <head>
      </head>
    <body>
    <?php while($ser = mysqli_fetch_assoc($select_ser)){?>
    <center><div style="display:flex;"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $ser['s_name']; ?></h5>
    <p class="card-text"><?php echo $ser['s_desc']; ?></p>
    <p class="card-text"><?php echo $ser['s_price']; ?></p>
    <p class="card-text"><?php echo $ser['s_place']; ?></p>
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
    </div><?php }?></div></center>
    </body>
</html>