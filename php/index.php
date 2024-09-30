

<!DOCTYPE html>
<html>
    <head>
        <title> Gym Login </title>
        <link rel="stylesheet" type="text/css" href="css\bootstrap.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

    
<body>
    <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      <div class="card w-30 my-auto shadow">
            <div class="card-header bg-danger" style="text-align: left;">
                <img src="images/logo-login.png" width="70" height="70"> 
                    <h5>   RJNM Manila <br>   Login Form </h5>
            
            </div>
        <form class="border shadow p-3 rounded" 
                action="login.php"
                method="post"
                style="width: 450px;"
                >
                <!-- Username Password Error messages!-->
                <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
            <div class="mb-3">
                <label for="username" class="form-label"> Username</label>
                <input type="text" class="form-control" name="username" id="username">
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"> Password</label>
                <input type="password" class="form-control" name="password" id="password">
                
            </div>
          
            <div class="mb-1">
                <label class="form-label"> Select User: </label>

            <select class="form-select mb-3"  name="role" aria-label="Default select example" >

                <option selected value="user"> Member </option>
                
                <option value="admin"> Admin </option>
                
                </select>
                
             <button type="submit"class="btn btn-dark w-100 " > Login </button>
           
    </form>
    <div class="card-footer" >
        <div class="text-end">
                        <small><cite title="Source Title">&copy; John Melvin </cite>  </small>
                   </div></div>
    </div>
</div>
</body>
</html>

