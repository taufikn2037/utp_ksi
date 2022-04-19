<?php

include_once("koneksi.php");
 

if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $tiket=$_POST['tiket'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
   
    $result = mysqli_query($conn, "UPDATE crud SET name='$name',email='$email',mobile='$mobile',tiket='$tiket' WHERE id=$id");
    
    
    header("Location: admin.php");
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($conn, "SELECT * FROM crud WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $tiket = $user_data['tiket'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
<head>    
    <title>Edit User Data</title>
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
                        <a href="admin.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link smoothScroll">Logout</a>
                    </li>
                </ul>

            </div>
    </nav>
    <br><br><br><br><br>
    
    
    <form name="update_user" method="post" action="edit1.php">
        <table border="0" class="table2" >
            <tr> 
                <th>Name</th>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
             <tr> 
                <th>Tiket</th>
                <td><input type="text" name="tiket" value=<?php echo $tiket;?>></td>
            </tr>

            <tr> 
                <th>Email</th>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <th>Mobile</th>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>