<?php 
    
     session_start();

     $_SESSION['error']="";
     if(isset($_POST['submit'])){
     
      $email=$_POST['email'];
      $Password=$_POST['password'];


      $_SESSION['email']=$email;
      $_SESSION['password']=$Password;

      if(empty($email) || empty($Password)) {

         $_SESSION['error']="Please Filled The Field";
        
      }  

      else{

         $db=mysqli_connect('localhost','root','','college') or die("db not connected");

               $query= "select email,password from login where email='$email' and password='$Password'";

              $qr=mysqli_query($db,$query);

               $chk=0;
             
              while ($r=mysqli_fetch_array($qr)) {
                  $chk=1;

                  $_SESSION['idc']=$r['id'];
                  }
  

                if ($chk==0) {
                     
                        $_SESSION['error']="Invalid Email/Password";
                }

                else{

                     header("location:dashbord.php");
                }

      } 
        


  }  
 

 ?>

<html>
<head>
  <title>Log In</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <div class="row"> 
  <div class="jumbotron col-md-12 rounded-0 " style="height:30vh;background-color:#001b36;">
      
  </div>
</div>

<div class="row"> 
<div class="card  rounded-top offset-4 col-md-3 col-sm-5 col-6 " style="padding:0px" >
          <div class="card-header bg-dark rounded-top" style="height:8vh">
             <p class="text-white text-center" style="font-size:25px"> Log In</p>
            </div>
          <div class="card-body bg-muted">
           <form method="post" action="login.php">
            <p style="color:red">
            <?php
                    echo $_SESSION['error'];
            ?>
            </p>
            <label> <strong>Email</strong>:</label>
            <input type="email" name="email" class="form-control">
            <label><strong>Password</strong>:</label>
            <input type="password" name="password" class="form-control"><br>
            <button type="submit"  name="submit" class="btn btn-block btn-info">Log in</button> 
           </form>
            
          </div>
          <div class="card-footer bg-dark">
           
          </div>
        </div>
      </div>



</body>
</html>