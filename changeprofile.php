<?php

session_start();

if (isset($_POST['change'])) {
  
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $id= $_SESSION['idc'];

          echo($id);
         
  $db=mysqli_connect('localhost','root','','college') or die("db not connected");

                        $query= "update login set name='$name',email='$email',password='$password' where id=1";

                           mysqli_query($db,$query);

                          



}


?>


<html>
<head>
	<title>DASHBORD</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <script src="formvalidation.js"></script>
</head>
<body>

 <div class="container-fluid" style="padding:0px;">
     
     <div class="row">
         <div class="col-md-12">
     	<ul class="nav bg-dark justify-content-end ">
    <li class="nav-item dropdown">
      <a class="nav-link text-white  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
       <?php
 
                 $email=$_SESSION['email'];
                 $Password=$_SESSION['password'];

             $db=mysqli_connect('localhost','root','','college') or die("db not connected");
            $query= "select * from login where email='$email' and password='$Password'";
                 $qr=mysqli_query($db,$query);

                           $var="";
                 while ($w=mysqli_fetch_array($qr)) {
                    
                      $var=$w['name'];
                 }

            ?>
        <span class="fa fa-user"></span> <?php echo $var ?></a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Change Profile</a>
          
          <a class="dropdown-item" href="login.php">Log Out</a>

        </div>
    </li>
    <ul>
</div>
     </div>

<div class="row">
	<div class=" col-md-2  jumbotron  bg-dark rounded-0">
            <ul class="nav flex-column">
            	<a class="navbar-brand text-center" href="#">
    <img src="abc.jpg"  class="rounded-circle" alt="Logo" style="width:150px;">
  </a>
    <li class="nav-item">
      <a class="nav-link" href="dashbord.php"><span class="fa fa-dashboard"></span> DashBord</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin_addnews.php"><span class="fa fa-edit"> </span> Add News</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add_event.php"><span class="fa fa-calendar-plus-o"> </span> Add Events</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="admin.php"><span class="fa fa-eye"> </span> View Reg</a>
    </li>
    
    
  </ul>
     </div>




	<div class="col-md-9" >

         <div class="row" style="margin-top:40px;">
            <div class="jumbotron offset-1 col-md-11 rounded-0 bg-light" style="padding:0px;">
               <div class="row">
               
                <div class="col-md-3 btn-outline-info text-center" style="padding:10px">
                      <span class="fa fa-newspaper-o" style="font-size:130px"></span><br>
                      <b>Total News:</B>
                      <?php
                      $db=mysqli_connect('localhost','root','','college') or die("db not connected");

                        $query= "select postno from news";

                           $var=mysqli_query($db,$query);

                                 $count=0;

                           while ($t=mysqli_fetch_array($var)) {

                                 $count++;
                           }


                             
                          ?>
                       <span><?php echo($count)?></span>
              


                </div>

                <div class=" offset-1 col-md-3 btn-outline-primary text-center" style="padding:10px">
                      <span class="fa fa-list" style="font-size:130px"></span><br>
                      <b>Total Events:</B>
                        <?php
                      $db=mysqli_connect('localhost','root','','college') or die("db not connected");

                        
                         $query= "select  id from events";

                           $var=mysqli_query($db,$query);

                                 $counte=0;

                           while ($t=mysqli_fetch_array($var)) {

                                 $counte++;
                           }


                             
                          ?>
                       <span><?php echo($counte)?></span>
                </div>

                <div class="col-md-3 offset-1 btn-outline-success text-center" style="padding:10px">
                      <span class="fa fa-database" style="font-size:130px"></span><br>
                      <b>Total Registration:</B>
                         <?php
                      $db=mysqli_connect('localhost','root','','college') or die("db not connected");

                        $query= "select fname from record";

                           $var=mysqli_query($db,$query);

                                 $countr=0;

                           while ($t=mysqli_fetch_array($var)) {

                                 $countr++;
                           }


                             
                          ?>
                       <span><?php echo($countr)?></span>
                </div>
             </div>
             </div>
         </div>

  <div class="jumbotron">
       <form  name="registration" method="POST" action="changeprofile.php">
         <div class="form-group">
                                     <label for="name">Name:</label><br>
                                     <input type="text" class="form-control" name="name" id="name"  placeholder="Please Enter Name"
                                            onblur="namevalidate()"
                                            required>
                                     <p id="nameerror" style="color: orangered;margin-left:10px"></p>
                          </div>
                           <div class="form-group">

                                   <label for="email">Email address:</label>
                                   <input type="email" class="form-control" placeholder="Email"  name="email" id="email"
                                          onblur="emailvalidation()" required>
                                   <p id="emailerror" style="color: orangered;"></p>
                               </div>

                               <div class="form-group">

                                   <label for="pass">Password:</label>
                                   <input type="text" class="form-control" placeholder="Password"  id="pass" name="password"
                                           required>
                                   </div>
                                    <Button type="submit"  name="change"  class="btn btn-danger">SAVE</button>
      </form>

  </div>


  </div>


        

	</div>
</div>


 </div>

</body>
</html>