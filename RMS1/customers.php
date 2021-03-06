<?php

require_once("../RMS1/php/component.php");
require_once("../RMS1/php/operationcust.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styleroles.css">
</head>

<body>
<main>
<div class="container text-center">
    <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-user-friends"></i> Customers</h1>

    <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50">
            <div class="pt-2">
            <?php inputElement("<i class='fas fa-id-badge fa-2x'></i>","ID","id",setID()); ?>

            </div>
            <div class="pt-2">
             <?php inputElement("<i class='fas fa-user-edit fa-2x'></i>","First Name","first_name",""); ?>
            </div>
            <div class="pt-2">
             <?php inputElement("<i class='fas fa-id-card fa-2x'></i>","Last Name","last_name",""); ?>
            </div>
            <div class="pt-2">
             <?php inputElement("<i class='fas fa-envelope fa-2x'></i>","Email","email",""); ?>
            </div>
            <div class="row">
                <div class="col">
                <?php inputElement("<i class='fas fa-mobile-alt fa-2x'></i>","Phone","phone",""); ?>
                </div>
                <div class="col">
                <?php inputElement("<i class='fas fa-map-marker-alt fa-2x'></i>","Address","address",""); ?>
                </div>
            </div>
            


            <div class="d-flex button justify-content-center">
                <?php buttonElement("btn-add","btn btn-success","<i class='fas fa-plus'></i>","add","data-toggle='tooltip' data-placement='bottom' title='Add'");    ?>
                <?php buttonElement("btn-read","btn btn-primary","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'");    ?>
                <?php buttonElement("btn-update","btn btn-light border","<i class='fas fa-pen-alt'></i>","update","data-toggle='tooltip' data-placement='bottom' title='Update'");    ?>
                <?php buttonElement("btn-danger","btn btn-danger","<i class='fas fa-trash-alt'></i>","delete","data-toggle='tooltip' data-placement='bottom' title='Delete'");    ?>
                <?php deleteBtn(); ?>
            </div>
        </form>
    </div>

    <div class="d-flex table-data" style=" margin: 1em 10em;">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Edit</th>
                </tr>
            </thead>
           <tbody id="tbody">
           <?php 
              if(isset($_POST['read'])){

               $result = getData();

               if($result){
                   while($row = mysqli_fetch_assoc($result)){
                       ?>

                       <tr>
                       <td data-id="<?php echo $row['id'];?>"><?php echo $row['id'];?></td>
                       <td data-id="<?php echo $row['id'];?>"><?php echo $row['first_name'];?></td>
                       <td data-id="<?php echo $row['id'];?>"><?php echo $row['last_name'];?></td>
                       <td data-id="<?php echo $row['id'];?>"><?php echo $row['email'];?></td>
                       <td data-id="<?php echo $row['id'];?>"><?php echo $row['phone'];?></td>
                       <td data-id="<?php echo $row['id'];?>"><?php echo $row['address'];?></td>
                       <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id'];?>" style="color:lightsalmon; cursor:pointer;"></i></td>
                       </tr>
                       <?php
                   }
               }
              }
              ?>
           </tbody>
        </table>

    </div>


</div>

</main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="../RMS/php/maincust.js"></script> 
</body>
</html>