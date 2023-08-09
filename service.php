<?php
require_once('connect.php');
$query="select * from data";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prabhat portfolio</title>
    <link rel="stylesheet" href="index.css">
   
</head>
<body style="background-color: beige;">
    
    <div class="containerrr">
    <div class="sidebar sidebarGo">
        <nav>
            <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="intro.html">my skill</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="hamburger">
            <img class="ham" src="horiii.png"alt=""width="32" >
            <img class="cross" src="remove.png" alt="" width="32">
        </div>
        <h1 class="heading">Hi i am a table</h1>
       
        <table class="table">
              <tr>
                <th class="col">Name</th>
                <th class="col">Email</th>
                <th class="col">Phone</th>
                <th class="col">Location</th>
              </tr>
              <tr>
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['location']; ?></td>
              </tr>
              <?php
            }
            ?>
          </table>
        </div>
    </div>
   
    
    <script src="script.js"></script>
</body>
</html>