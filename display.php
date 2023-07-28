<!DOCTYPE html>
<html>

<head>
     <title>
          Submited users form
     </title>
     <?php include 'links.php' ?>
     <?php include 'css/style.css' ?>
</head>

<body>
     <div class="main-div">
          <h1>List of candidates for applyed JOB</h1>
          <div class="center-div">
               <div class="table-responsive">
                    <table>
                         <thead>
                              <tr>
                                   <th>id</th>
                                   <th>name</th>
                                   <th>degree</th>
                                   <th>mobile</th>
                                   <th>email</th>
                                   <th>reffer</th>
                                   <th>post</th>
                                   <th colspan="2">operaction</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php

                              include 'connection.php';

                              $selectquery = mysqli_query($con, ' select * from job_regestation');

                              $result = mysqli_fetch_array($selectquery);

                              while ($result = mysqli_fetch_array($selectquery)) {
                              ?>
                                   <tr>
                                        <td><?php echo $result['id'] ?></td>
                                        <td><?php echo $result['name'] ?></td>
                                        <td><?php echo $result['degree'] ?></td>
                                        <td><?php echo $result['mobile'] ?></td>
                                        <td><span class="email-style"><?php echo $result['email'] ?></span></td>
                                        <td><?php echo $result['reffer'] ?></td>
                                        <td><?php echo $result['jobpost'] ?></td>
                                        <td><i class="fa-solid fa-pen-to-square"></i></td>
                                        <td><i class="fa-solid fa-trash"></i></td>
                                   </tr>
                              <?php
                              }
                              ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</body>

</html>