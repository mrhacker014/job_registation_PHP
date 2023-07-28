<!DOCTYPE html>
<html lang="en">

<head>
     <title>Apply JOB</title>
     <?php include 'links.php' ?>
     <?php include 'css/style.css' ?> 
</head>

<body>
     <div class="container register">
          <div class="row">
               <div class="col-md-3 register-left">
                    <img src="" alt="" />
                    <h3>Welcome</h3>
                    <p>Please fill all the details carefully. this form can chenge your life.</p>
                    <a href="display.php">Check Form</a> <br />
               </div>
               <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="home" role="tabpanel" area-labelledby="home-tab">
                              <h3 class="register-heading">Apply for web Developer post</h3>
                              <form action="" method="POST">
                                   <div class="row register-form">
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                  <input type="text" class="form-control" placeholder="enter your name *" name="user" value="" required />
                                             </div>
                                             <div class="form-group">
                                                  <input type="tel" class="form-control" placeholder="enter mobile number *" name="mobile" value="" required />
                                             </div>
                                             <div class="form-group">
                                                  <input type="text" class="form-control" placeholder="Any referances *" name="refer" value="" required />
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                  <input type="text" class="form-control" placeholder="enter your qualification *" name="degree" value="" required />
                                             </div>
                                             <div class="form-group">
                                                  <input type="email" class="form-control" placeholder="enter email id *" name="email" value="" required />
                                             </div>
                                             <div class="form-group">
                                                  <input type="text" class="form-control" placeholder="post name *" name="jobprofile" value="" required />
                                             </div>

                                             <input type="submit" class="btnRegister" name="submit" value="Register" />
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</body>

</html>

<?php

include 'connection.php' ;

if(isset($_POST['submit'])){
     $name = $_POST['user'];
     $degree = $_POST['degree'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
     $refer = $_POST['refer'];
     $jobprofile = $_POST['jobprofile'];


     $res = mysqli_query($con,
     " INSERT INTO job_regestation(name, degree, mobile, email, reffer, jobpost) 
     VALUES ('$name','$degree','$mobile','$email','$refer','$jobprofile') ");

     if($res){
          ?>
          <script>
               alert ("data insert success");
          </script>
          <?php
     }else{
          ?>
          <script>
               alert ("data insert unsuccess");
          </script>
          <?php 
     }
}

?>