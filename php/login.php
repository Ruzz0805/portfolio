<?php
session_start();
include "db_conn.php";


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

          if (empty($username)) {
            header("Location: index.php?error=UserName is Required");
        }else if (empty($password)) {
            header("Location: index.php?error=Password is Required");
        }else {

            // Hashing the password
          
            
            $sql = "SELECT * FROM user WHERE username='$username' AND role='$role'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1) {
                // the user name must be unique
                $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) === 1){
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['lname'] = $row['lname'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];


                header("Location: home.php");
                
                }else {
                header("Location: index.php?error=Incorect Username or password");
            }
                
                
              
            }else {
                header("Location: index.php?error=Incorect Username or password");
            }
    
        }
        
            
    } 
    
    else {
        header ("Location: index.php");

    }

    if (isset($_POST['submit'])){


        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['iuser']) && !empty($_POST['ipass'])&& !empty($_POST['role'])){
    
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $iuser = $_POST['iuser'];
                $ipass = $_POST['ipass'];
                $role = $_POST['role'];
                    }
    
        $sql = "INSERT INTO `user`(`role`, `username`, `password`, `fname`, `lname`) VALUES ('$role','$iuser','$ipass','$fname','$lname')";
        $result = mysqli_query($conn, $sql);
    
    
        
    }
    else {
        echo " All Fields Required";
    
    }