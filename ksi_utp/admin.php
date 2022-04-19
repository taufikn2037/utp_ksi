<?php

include_once("koneksi.php");
 

$result = mysqli_query($conn, "SELECT * FROM crud ORDER BY id DESC");
?>

<html>
<head>    
    <title>SMANJUH ATTACK</title>
    <link rel="icon"  href="images/logo1.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
 
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#home">SMANJUH ATTACK</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll">Logout</a>
                    </li>
                </ul>

            </div>
    </nav>

 <br><br><br><br><br>
    <table class="table1" align="center">
 
    <tr>
        <th>Name</th> <th>jumlah tiket</th> <th>mobile</th> <th>email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['tikett']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit1.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>     