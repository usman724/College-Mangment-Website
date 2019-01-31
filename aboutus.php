<html>
<head>
  <title>Home</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
    @keyframes abcd {

   from{margin:0px} to {margin-left:430px}
} 
    </style>

 
</head>



<body>
<div class="row" >
<nav class="navbar  col-md-12 navbar-expand-lg" style="background-color:#001b36;"><!--#001b36-->
  <a class="navbar-brand" href="#"><span><img src="logo.png" width=30px></span></a>

  <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color:white;"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="Home.php">Home </a>
      </li>
      <li class="nav-item dropdown">
       
        <a class="nav-link text-white" href="aboutus.php">
          About Us
        </a>
       
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fee
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="fee.php">Fee Structure</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="contactus.php">Contact Us</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto" style="outline-style: none;">
    <li class="nav-item" style="outline-style: none;">
       <a class="nav-link text-white " href="login.php">
       Log-in  <span class="fa fa-sign-in" style="font-size:25px"></span> </a></li>
    </ul>


 
  </div>
</nav>

</div>

<div class="row">
  <div class="col-md-12" style="background-image:url('bookbb.jpg');background-size:cover;height:350px;">
    <div style="width:100%;height:100%;background-color:#001b36a1;">
    <div class="row">
        <h3 class="offset-md-4 col-md-6"style="margin-top:10%;font-size:45px;color:white; animation-name:abcd;
     animation-duration:10s;">About Us</h3>

    </div>
   

    </div>
  </div>
 
</div>


  <div class="container">
  <div class="row">
     <div class="jumbotron rounded-0 col-md-8 responsive" style="margin:0px;">
      <p class="text-center col-md-12 " style="color:gray;font-size:25px; font-family:italic;"><strong> ABOUT PGC </strong></p>
     <p class=" offset-1 col-md-10"> 

      The inception of one of the best colleges and universities in Pakistan in 1985, laid the foundation of the Punjab Group with the aim of academic excellence at all levels for the purpose of shaping the future of its students. Over the span of almost 32 years, it has successfully emerged as the largest educational system in Pakistan, with nearly 460,000 students nationwide. It has firmly evolved in a wide range of educational, technological, media and communicational institutes. Significant and growing developments under the umbrella of this group are Punjab Colleges, University of Central Punjab, Mohammad Ali Jinnah University, Capital University of Science and Technology, Allied Schools, Education for All (EFA) schools, Dunya TV, Lahore News TV, Roznama Dunya and Tower Technologies.
        </p>

    </div>

     
   <div class="jumbotron rounded-0   col-md-4 responsive" style="margin:0px;padding-bottom:0px;">
   <button type="button" style="font-size:20px" class="list-group-item list-group-item-action active text-warning text-center">
   NEWS
  </button>
    <div class="list-group" style="height:40vh;overflow:auto;">
  
   <?php

          $db=mysqli_connect('localhost','root','','college') or die("db not connected");

               $query= "select * from news";

              $qr=mysqli_query($db,$query);
             
              while ($r=mysqli_fetch_array($qr)) {
                

                ?>
    <a  class="list-group-item list-group-item-action"><?php echo($r['des']) ?></a>
     <?php

         }

           ?>
    
 
</div>
</div>
<div class="jumbotron rounded-0   col-md-8 responsive" style="margin:0px;padding:0px;">
   <p class=" offset-1 col-md-10"> 

        <strong> Mission Statement:</strong><br><br> 
To train students to develop their skills to think cogently: to act rationally; to express themselves coherently; to work diligently and to function compassionately in all avenues of life as they strive to build a cohesive, proud and sovereign nation.
</p>
 </div>


 <div class="jumbotron rounded-0   col-md-4 responsive" style="margin:0px;padding-top:0px;">
  <button type="button" style="font-size:20px" class="list-group-item list-group-item-action active text-warning text-center">
   Events
  </button>
    <div class="list-group" style="height:40vh;overflow:auto;">
  
   <?php

          $db=mysqli_connect('localhost','root','','college') or die("db not connected");

               $query= "select * from events";

              $qr=mysqli_query($db,$query);
             
              while ($r=mysqli_fetch_array($qr)) {
                

                ?>
  <a type="button" class="list-group-item list-group-item-action"><?php echo($r['event']) ?></a>
   <?php

         }

           ?>
</div>
</div>
</div>


<div class="row">
    
   

</div>







  </div>


<div class="row">
  <iframe class="col-md-12"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.273466655069!2d73.22525021483865!3d34.1649252805754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38de3109968bc54d%3A0x75f2a3f1f2e83ca6!2sPunjab+Group+Of+Colleges!5e0!3m2!1sen!2s!4v1531173267690" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>









<div class="row">
<div class="card  col-md-12 rounded-0 " style="padding:0px;background-color:transparent;">
      <div style="background-image:url(c.jpg);background-size:cover;">
      <div class="card-header border-0  row  rounded-0" style="height:auto;overflow:auto;background-color: #0000003b;">
          
           <div class="row col-md-12 text-light" style="margin:0px">
              <div class="offset-4" style="font-size:55px;" >
                <span class="fa fa-facebook-official col-sm-2"></span>
                <span class="fa fa-skype col-sm-2"></span>
                <span class="fa fa-twitter col-sm-2"></span>
                <span class="fa fa-google-plus col-sm-2"></span>
           </div>
           </div>
        
      </div>
      
      <div class="card-body row" style="background-color:#001b36a1;">
       
       <div class="col-md-8">
      <div class="row offset-1 text-white col-md-11"> 
       <strong >CMS  Official  Facebook page:</strong> <br>
       </div>
      <div class="row offset-1 col-md-11">
       <p class="col-md-12"><a  href="#" style="color:#e0faff;">https://www.facebook.com/collegemanagemetsystemofficial</a></p>
      </div>
     <div class="row offset-1  col-md-11 text-white">
        <strong >CMS  Official  Twitter Link:</strong> <br>
        </div>
      <div class="row offset-1 col-md-11">
       <p class="col-md-12"><a href="#" style="color:#e0faff;">https://www.twitter.com/collegemanagemetsystemofficial</a></p>
      </div>
      <div class="row offset-1 col-md-11">
        <strong class="text-white ">Disclaimer:</strong> 
      </div>
      <div class="row offset-1 col-md-11">
        <span class="col-md-12"style="color:#e0faff;">The above-mentioned social media links are official. Other than these are unofficial.</span>
      </div>
      </div>

      <div class="col-md-4">
           <div class="row offset-1 col-md-11">
       <p class="col-md-12"><a href="#" style="color:#e0faff;font-size:25px;">
        Menu</a>
      </p>

       <p class="col-md-12"><a href="Home.php" style="color:#e0faff;text-decoration:none;"> <span class="fa fa-angle-right"></span> Home</a>
      </p>
      <p class="col-md-12"><a href="aboutus.php" style="color:#e0faff;text-decoration:none;"> <span class="fa fa-angle-right"></span> About us</a>
      </p>
       <p class="col-md-12"><a href="fee.php" style="color:#e0faff;text-decoration:none;"> <span class="fa fa-angle-right"></span> Fee Structure</a>
      </p>
       <p class="col-md-12"><a href="contactus.php" style="color:#e0faff;text-decoration:none;"> <span class="fa fa-angle-right"></span> Contact Us</a>
      </p>
       <p class="col-md-12"><a href="login.php" style="color:#e0faff;text-decoration:none;"> <span class="fa fa-angle-right"></span> LOG In</a>
      </p>



      </div> 

      </div>

       

     <div class="row offset-9 col-md-3  ">
         <p  class="text-white col-md-12"> <strong >&copy </strong>2010-2018 Punjab Group of College</p>
      </div>
   <div class="row offset-9 col-md-3">
    <p class="text-white col-md-12"><strong>Desinged by:</strong> Usman Pervaiz</p>
      </div>
      <div class="row col-md-12" style="border-top:1px solid white; height:10px;">
      <p class="text-center text-white offset-3 col-md-5" >Copyright © 2018 , CMS. All Rights Reserved.</p>
   </div>
</div>
   </div>
    </div>

</div>


</body>
</html>