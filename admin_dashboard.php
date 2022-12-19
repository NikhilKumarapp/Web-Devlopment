<?php
include ("dbcon.php");
$query="SELECT * FROM user2";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
session_start();




if($total!=0){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin.css">
    <title>Users dashboard</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Welcome </h1>
        </div>
        <ul>
            <li><img src="dashboard_img/dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <a href="admin_dashboard.php">
            <li><img src="dashboard_img/reading-book (1).png" alt="">&nbsp;<span>Home</span> </li>
            </a>
            <a href="admin.html">
            <li><img src="dashboard_img/teacher2.png" alt="">&nbsp;<span>User login</span> </li>

            </a>
            <a href="Login.php">
            <li><img src="dashboard_img/help-web-button.png" alt="">&nbsp; <span>Switch to user login</span></li>
</a>
    
        <a href="admin.html">
            <li><img src="dashboard_img/help-web-button.png" alt="">&nbsp; <span>Logout</span></li>
</a>
            <li><img src="dashboard_img/settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="dashboard_img/search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="admin_product_show.php" class="btn">View all Product</a>
                    
                    <div class="img-case">
                        <img src="dashboard_img/user.png" alt="">
                        <span><?= $_SESSION['email']; ?></span>
                    </div>
                    <img src="dashboard_img/notifications.png" alt="">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?= $_SESSION['id']; ?></h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="dashboard_img/students.png" alt="">
                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?=$_SESSION['username']." ".$_SESSION['username1'];?></h1>
                        <h3>Information</h3>
                    </div>
                    <div class="icon-case">
                        <img src="dashboard_img/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Oraganization</h3>
                    </div>
                    <div class="icon-case">
                        <img src="dashboard_img/schools.png" alt="">
                    </div>
                </div>
              
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Users details</h2>

                        
                    </div>
                    <table border="1">
                        <tr>
                           <th width="10%">Firstname</th>
        <th width="10%">Lastname</th>
        <th width="10%">Email</th>
        <th width="10%">Phone</th>
        <th width="10%">Password</th>
        <th width="10%">DOB</th>
        <th width="10%">Bio</th>
        <!-- <th width="10%">Operations</th> -->

                        </tr>
                            <?php
    
    while($result=mysqli_fetch_assoc($data)){
        echo"<tr>
        
        <td>".$result['Firstname']."</td>
        <td>".$result['Lastname']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Phone']."</td>
        <td>".$result['Password']."</td>
        <td>".$result['DOB']."</td>
        <td>".$result['Bio']."</td>
       
        </tr>";
        

    }
}
else{
    echo "no records founds";
}
?>
                      
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</body>

</html>