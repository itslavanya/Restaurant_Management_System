<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styledash.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<h1>Welcome To Restaurant Management System</h1>
<a href="logout_process.php"><div><button class="logbtn">Logout</button></div></a>
  <div class="center">
   
    <ul>
         <div class="rolehover" data-hover="Manage and View Roles">
        <li><a href="roles.php"><img src="https://www.flaticon.com/premium-icon/icons/svg/2211/2211615.svg" alt=""> <br>Roles</a></li>
        </div>
        <div class="userhover" data-hover="Manage and View Users">
        <li><a href="users.php"><img src="https://www.flaticon.com/svg/static/icons/svg/921/921347.svg"><br>Users</a></li>
        </div>
        <div class="customerhover" data-hover="Manage and View Customers">
        <li><a href="customers.php"><img src="https://www.flaticon.com/svg/static/icons/svg/1373/1373259.svg"><br> Customers</a></li>
        </div>
      </ul>
      <ul>
        <div class="foodcathover" data-hover="Manage and View Tables">
        <li><a href="tables.php"><img src="https://www.flaticon.com/svg/static/icons/svg/1012/1012421.svg"><br>Tables</a></li>
        </div>
        <div class="foodmenuhover" data-hover="Manage and View Food Menu">
        <li><a href="foodmn.php"><img src="https://www.flaticon.com/svg/static/icons/svg/2934/2934025.svg"><br>Food Menu</a></li>
        </div>
        <div class="orderhover" data-hover="Manage and View Orders">
        <li><a href=""><img src="https://www.flaticon.com/svg/static/icons/svg/3143/3143128.svg"><br>Orders</a></li>
        </div>
      </ul>
      </div>
</body>
</html>