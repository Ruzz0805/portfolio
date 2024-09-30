<?php 
 session_start();
 include "db_conn.php";
 if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Gym Admin </title>
        <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
        <link rel="stylesheet"  href="style.css">
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
<?php if($_SESSION['role'] == 'admin'){ ?>
  
<div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
      <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark ">
        <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column 
          flex-row align-items-center py-2 text-center sticky-top " id="sidebar"> 
          <div class="text-center p-2">
              <img src="images/logo-login.png" width="80px" height="80px" alt="admin picture" class="img-fluid rounded circle my-4 p-1 d-none d-md-block ">
              <a href="home.php" title="button" class="navbar-brand mx-0 font-weight-bold text-nowrap"> <h6>WELCOME <br><?=$_SESSION['fname'] ?>
            </h6> </a>
          </div>
          <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation"></button>
            <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-last" id="nav">
            <ul class="navbar-nav flex-column w-100 justify-content-center">
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> New Registration</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Payments</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Members</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Health Status</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Plan </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Overview </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Excercise Routine </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-dark w-100 rounded-pill"> Profile </a>
                </li>
                <li class="nav-item">
                   <a href="index.php?Logout" class="btn btn-dark w-100 rounded-pill"> Logout </a>
                </li><br><br>
            </ul>
        </div> 
              <ul class="nav justify-content-center"> 
                <li class="nav-item">
                <a href="#" class="nav-link text-white"> <i class="fa-brands fa-facebook fa-lg"></i> </a>
                </li>
</ul>



        </nav>
      </aside>
      
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
<?php }   else { ?>
    <div class="card" >
        <img src="images\admin_icon.png"  width="60" height="60" class="card-img-top" alt="admin image">
        <div class="card-body">
            <h6> WELCOME <?=$_SESSION['fname'] ?>
            </h6><br>
            
            <a href="index.php?Logout" class="btn btn-dark w-100"> Logout </a>
        </div>
        </div>
 
    <?php }?>
    <?php }   else {
        header ("Location: index.php");

    }
    ?>
