<?php

 if (isset($_POST['reg'])) {

     $fname=$_POST['username'];
     $lname=$_POST['lastname'];
     $address=$_POST['address'];
     $email=$_POST['email'];
     $sex=$_POST['sex'];
     $dob= $_POST['dob'];
     $city=$_POST['city'];
     $province =$_POST['province'];
     $Mobile =$_POST['mob'];

     $db=mysqli_connect('localhost','root','','college') or die("db not connected");

     $query= "Insert into record (fname,lname,address,email,sex,dob,city,province,mob) values 
     ('$fname','$lname','$address','$email','$sex','$dob','$city','$province','$Mobile')";

       mysqli_query($db,$query);


        echo "<script> alert('Successfully');</script>";

 }
 else
 {

 }



?>



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
     <script src="formvalidation.js"></script>

 
</head>


                             
<body style="background-image:url(back.jpg);background-size:cover;">
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
<div class="container-fluid   col-lg-12" style="padding:0px;">
      <div id="slider" class="carousel slide" data-ride="carousel" >

             <!-- Indicators -->
             <ul class="carousel-indicators">

                 <li data-target="#slider" data-slide-to="0" class="active"></li>
                 <li data-target="#slider" data-slide-to="1"></li>
                 <li data-target="#slider" data-slide-to="2"></li>
                 <li data-target="#slider" data-slide-to="3"></li>

             </ul>

             <!-- The slideshow -->

             <div class="carousel-inner " style="height:550px;width:100%">
                 <div class="carousel-item active" >
                     <img src="a.jpg" style="height:550px;width:100%"  >
                     <div class="carousel-caption">
                      <h3 style="color:black">Los Angeles</h3>
                      <p style="color:black">We had such a great time in LA!</p>
                    </div>
                 </div>

                 <div class="carousel-item">
                     <img src="b.jpg" style="height:550px;width:100%">
                 </div>
                 <div class="carousel-item">
                     <img src="c.jpg" style="height:550px;width:100%">
                 </div>
                 <div class="carousel-item" style="background-size:cover">
                     <img src="book.jpg" style="height:550px;width:100%">
                 </div>



             </div>

             <!-- Left and right controls -->
             <a class="carousel-control-prev" href="#slider" data-slide="prev">
                 <span class="carousel-control-prev-icon"></span>
             </a>
             <a class="carousel-control-next" href="#slider" data-slide="next">
                 <span class="carousel-control-next-icon"></span>
             </a>
     </div>





   <div class="row">
    <div class="jumbotron rounded-0 col-md-12 responsive" style="margin:0px;">
      <p class="text-center col-md-12 " style="color:gray;font-size:30px; font-family:italic;"><strong> Why PGC ?</strong></p>
     <p class=" offset-1 col-md-10"> Punjab Group of College was formed on 25 june 2013 ByDirector Aga Tahir Ijaz
        our Managing Director.His borad vision led him in creation of this Coll
        ege.Our Vision is<strong>"Study Focus And Determinatoin"</strong> and we make sure our s-
        tudents to follow these principles.We have confident and hardworking te-
        achers they try to indulge as much wisdom and knowledge as they have. o-
        ur teachers are highly qualified as it is said<strong>"if you want to see a na-
        tion see how their teachers teach".</strong> 
        <br>
        We have 20 vast rooms and study environment enables the students to study
        harder.our library is the biggest in area and its is open for all the ot-
        her colleges of area to take advantage of the library.Our Computer lab h-
        as 220 computers for 200 students currently studying in the college.we w-
        ant our students to be ahead of us.Thanks
        </p>

    </div>
   </div>



    <div class="card-deck" style="position:relative;padding-top:1px;">
       
       <div class="row  col-md-12" style="background-color:gray;padding:20px;">
     
     <div class="offset-md-1  col-md-3 col-sm-4">
          <div class="card" style="background-color:transparent;border:0px"  >
  <p class="card-img-top fa fa-pencil-square-o" style="font-size:70px;margin:0px; padding:0px;text-align:center;color:orange;"></p>
  
  <div class="card-body" >
    <h4 class="card-title text-center ">ADDMISSION</h4>
    <p class="card-text">
      <p>Admissions in Pre-Engineering and
           pre-Medical and programs are
           offered on merit in PGC.
           The merit is determined on
           the basis of academic record...</p>

    </p>
    <a href="#" class="btn btn-outline-warning btn-block"  data-toggle="modal" data-target="#Regform">Apply Now</a>
</div>
</div>
      </div>


      <div class="modal fade" id="Regform" role="dialog">
               <div class="modal-dialog">


                   <div class="modal-content">
                       <div class="modal-body">

       <form  name="registration" method="POST" action="Home.php">

                          <div class=" form-inline">
                                   <div class="form-group" style="width:50%;">
                                     <label for="name">Name:</label><br>
                                     <input type="text" class="form-control" name="username" id="name"  placeholder="Please Enter Name"
                                            onblur="namevalidate()"
                                            required>
                                     <p id="nameerror" style="color: orangered;"></p>
                          </div>

                           <div class="form-group" style="width:48%">
                                       <label for="lastname">Last Name:</label>
                                       <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last Name"
                                              onblur="lastnamevalidate()"
                                              required><br>
                                       <span id="lasterror" style="color: orangered;"></span>
                                       </div>
                           </div>


                               <div class="form-group">
                                   <label for="address">ADDRESS:</label>
                                         <input type="text" class="form-control" placeholder="Enter Address"  name="address"  id="address"
                                          onblur="addressvalidation()"
                                          required>
                                   <p id="addresserror" style="color: orangered;"></p>
                               </div>
                               <div class="form-group">

                                   <label for="email">Email address:</label>
                                   <input type="email" class="form-control" placeholder="Email"  name="email" id="email"
                                          onblur="emailvalidation()" required>
                                   <p id="emailerror" style="color: orangered;"></p>
                               </div>

                       <div class="form-group ">
                              <label class="radio-inline" class="form-control"><b>Gender</b>:</label>
                                  <label class="radio-inline">
                               <input type="radio" name="sex" id="gender_Male" value="male" onclick="gendervalidation()" >Male
                                  </label>

                                   <label class="radio-inline">
                              <input type="radio" name="sex"  id="gender_Female" value="female" onclick="gendervalidation()">FeMale
                                   </label>

                          </div>

                               <div class="form-group">
                                   <label for="dob">Date OF Birth:</label>
                                   <input type="date" id="dob" name="dob" class="form-control" onblur="dobvalidate()">
                                   <p id="doberror" style="color: orangered;"></p>
                               </div>

                               <div class=" form-inline">
                                   <div class="form-group" style="width:50%;">
                                       <label for="city">City:</label><br>
                                       <input type="text" class="form-control" name="city" id="city"  placeholder="Enter City Name"
                                              onblur="cityvalidate()" required>
                                       <p id="cityerror" style="color: orangered;"></p>
                                   </div>

                                   <div class="form-group" style="width:48%">
                                       <label for="pro"> State/Province:</label>
                                       <input type="text" class="form-control" id="pro" name="province" placeholder="Enter Province"
                                              onblur="provincevalidate()"
                                              required>
                                       <p id="proerror" style="color: orangered;"></p>
                                   </div>

                               </div>

                               <div class="form-group">
                                   <label for="mob">Mobile Number:</label>
                                   <input type="text" id="mob" class="form-control" name="mob" placeholder="Mobile Number"
                                    onblur="numbervalidate()"
                                   >
                                   <p id="moberror" style="color: orangered;"></p>
                               </div>



                               <Button type="submit"  name="reg"  class="btn btn-info">Submit</button>
  </form>


                       </div>
                       <div class="modal-footer">
                           <a  class="btn btn-warning"  data-dismiss="modal">Close</a>
                       </div>
                   </div>

               </div>
           </div>




<div class="offset-md-1  col-md-3 col-sm-4 ">
          <div class="card " style="background-color:transparent;border:0px">
  <p class="card-img-top fa fa-building text-center " style="font-size:60px;color:orange"></p>
  <div class="card-body">
    <h4 class="card-title text-center">FACULTIES & DEPARTMENTS</h4>
    <p class="card-text">
<p class="card-text">PGC Islamabad has  faculties, ten Departments </p>
    </p>
    <br><br>
    <a href="#" class="btn btn-block btn-outline-warning">Read More</a>
  </div>
</div>
      </div>



        <div class=" offset-md-1 col-md-3 col-sm-4 ">
          <div class="card" style="background-color:transparent;border:0px" >
  <p class="card-img-top fa fa-users text-center " style="font-size:60px;color:gold"></p>
  <div class="card-body">
    <h4 class="card-title text-center">INTERNATIONAL STUDENTS</h4>
    <p class="card-text">
<p class="card-text">International Students. International Students Affairs (ISA) of Pcg would be excited to welcome you to join pgc</p>
    </p>
    <a href="#" class="btn btn-outline-warning btn-block">Read More</a>
  </div>
</div>
      </div>




</div>
 </div>
</div>
</div>
</div>
<div>
</div>

<div class="row" style="background-image:url('black.jpg');">
 
 <div class="col-md-6 text-white" style="padding:70px">

   <h3>Director  Aga Tahir Ijaz</h3>
 
Punjab Group of Colleges
Established 1985
Chairman  Mian Amer Mehmood
Director  Aga Tahir Ijaz
Location  Pakistan Campus  3 chartered universities, 330 college campses in 100 cities, 15 Resource Academia Schools, 700 plus Allied Schools and nearly 300 EFA Schools.Affiliations  Board of Intermediate and Secondary Education, Lahore, Pakistan Engineering Council, Higher Education Commission
Mascot  Punjabians
The Punjab Group of Colleges (also known as The Punjab Group) (PGC)has its roots in a Commerce College set up. The chairman of PGC network is Mian Amer Mahmood. The Network laid its foundation in Lahore in 1985. Over a period of last 31 years, PGC has become the Largest Educational Network in Pakistan. PGC has head office in 64-E/1, Gulberg III, Lahore, Pakistan.

PGC Family consists of Educational Excellence Limited, National Communications Services.Limited and. Tower Technologies. Limited is a hi-tech company of the Group which provides technical expertise and tailor made IT solutions. National Educational Network (Pvt.) Limited, takes care of franchising Elementary, Secondary and Higher Secondary Education across the country in the form of Schools and Colleges.
  </div>
<div class="col-md-6">

<img src="download.jpg" class="rounded-circle" style="width:70%;height:80%;margin-top:5%;">

</div>
</div>



<div class="jumbotron rounded-0" style="height:100vh;margin-bottom:0px;">
  <div class="row">
    
    <div class="col-md-7">
         <p style="border-bottom:1px solid grey;font-size:60px;">
        <i class="fa fa-newspaper-o"></i> <span> Latest News</span>
         </p>

    <div class="list-group bg-info" style="height:55vh;overflow:auto">
  
 
         <?php

          $db=mysqli_connect('localhost','root','','college') or die("db not connected");

               $query= "select * from news";

              $qr=mysqli_query($db,$query);
             
              while ($r=mysqli_fetch_array($qr)) {
                

                ?>
                 <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
    <div class="d-flex w-100 justify-content-between">
                
                 <h5 class="mb-1"><?php echo($r['title']) ?></h5>

              </div>
    <p class="mb-1"><?php echo($r['des']) ?></p>
                  </a>

            <?php

                              }

           ?>
    


  </div>
    </div>
    
    <div class="col-md-offset-1 col-md-4">
      <p style="border-bottom:1px solid grey;font-size:60px;"><span> Events</span>
        <i class="fa fa-calendar"></i>
         </p>
         <ul class="list-group list-group-flush">
  
   <?php

          $db=mysqli_connect('localhost','root','','college') or die("db not connected");

               $query= "select * from events";

              $qr=mysqli_query($db,$query);
             
              while ($r=mysqli_fetch_array($qr)) {
                

                ?>

  <li class="list-group-item"><?php echo($r['event']) ?></li>

  <?php

                              }

           ?>
    
  
</ul>
    </div>
 
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