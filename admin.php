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
      <a class="nav-link text-white  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user text-white"></span>  Abdullah Bhutt</a>
   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="changeprofile.php">Change Profile</a>
         <a class="dropdown-item" href="login.php">Log Out</a>
    </li>
    <ul>
</div>
     </div>

<div class="row">
	<div class=" col-md-2  jumbotron bg-dark rounded-0">
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
	<div class="col-md-9 ">
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



   <table class="table border responsive table-striped" >
             	<th>First Name</th>
             	<th>Last Name</th>
             	<th>Address</th>
             	<th>Email</th>
             	<th>SEX</th>
             	<th>Date of Birth</th>
             	<th>City</th>
             	<th>Province</th>
             	<th>Mobile</th>
          <?php
                 

                 $db=mysqli_connect('localhost','root','','college') or die("db not connected");

     $query= "Select * from record;";

         $data=mysqli_query($db,$query);


                   while ($res=mysqli_fetch_array($data)) {
                   	?>

                   	<tr>
                   		<td><?php echo $res['fname'] ;?></td>
                   		<td><?php echo $res['lname'] ;?></td>
                   		<td><?php echo $res['address'] ;?></td>
                   		<td><?php echo $res['email'] ;?></td>
                   		<td><?php echo $res['sex'] ;?></td>
                   		<td><?php echo $res['dob'] ;?></td>
                   		<td><?php echo $res['city'] ;?></td>
                   		<td><?php echo $res['province'] ;?></td>
                   		<td><?php echo $res['mob'] ;?></td>
                   	</tr>


  

                   	<?php
                   }

          ?>

       </table>
	</div>
</div>


 </div>

</body>
</html>