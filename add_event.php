<?php

session_start();


$_SESSION['titleerror']="";

$_SESSION['success']="";

if (isset($_POST['sub'])) {
  
       $title=$_POST['title'];
        
       if (empty($title)) {
         
             $_SESSION['titleerror']="Pease Fill The Field";

       }
      
      else
      {

         $db=mysqli_connect('localhost','root','','college') or die("db not connected");

               $query= "insert into events (event) values ('$title')";

         mysqli_query($db,$query);


        $_SESSION['success']="Added Event Successfully";
      }

}




$_SESSION['deletetitleerror']="";
$_SESSION['deletesuccess']="";

if (isset($_POST['del'])) {
  
   $title=$_POST['deltitle'];

     
      if (empty($title)) {
         
             $_SESSION['deletetitleerror']="Pease Fill The Field";

       }
       else
      {

         $db=mysqli_connect('localhost','root','','college') or die("db not connected");

               $query= "delete from events where event='$title' ";

         mysqli_query($db,$query);


         $_SESSION['deletesuccess']="Deleted Successfully";


      }

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
                   $var="Abdullah Bhutt";
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







           <div class="offset-md-1 col-md-10 " style="border:1px solid blue;" >
                <form method="POST" action="add_event.php">
                  <h4 class="offset-5">Post Events</h4>
                  <p class="offset-5" style="color:green;"><?php echo($_SESSION['success']) ?></p>
  <div class="form-group">
    <label for="email">Event:</label>
    <input type="text" class="form-control" id="email" name="title" maxlength="100" placeholder="Less Than 100 Word" >
    <span style="color:red"><?php echo($_SESSION['titleerror']) ?></span>
  </div>
  
  <button type="submit" class="btn btn-block btn-primary" name="sub">Post</button>
</form>
              </div>




 <div class="offset-md-1 col-md-10 " style="border:1px solid orange;margin-top:30px;" >
                <form method="POST" action="add_event.php">
                  <h4 class="offset-5">Delete Events</h4>
                 <p class="offset-5" style="color:green;"><?php echo($_SESSION['deletesuccess']) ?></p>
  <div class="form-group">
    <label for="email">News Tittle</label>
    <input type="text" class="form-control" id="email" name="deltitle" maxlength="50" placeholder="Less Than 50 Word" >
    <span style="color:red"><?php echo($_SESSION['deletetitleerror']) ?></span>
  </div>

  <button type="submit" class="btn btn-block btn-danger" name="del">Delete</button>
</form>
              </div>



            </div>


        

	</div>
</div>


 </div>

</body>
</html>