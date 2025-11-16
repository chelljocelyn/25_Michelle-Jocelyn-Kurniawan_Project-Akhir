<?php
include 'koneksi.php';
if(isset($_POST['login'])){
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];

    $query="SELECT * FROM register WHERE Username='$Username'";
    $result=mysqli_query($koneksi,$query);
    $data = mysqli_fetch_assoc($result);
     
    if (mysqli_num_rows($result) > 0) { 
    // username ditemukan apa ga

        if ($Password == $data['Password']) {
            // cek password apakah udah sama
            $_SESSION['Username'] = $data['Username']; 
            // biar bisa langsung otomatis nanti muncul setelah udah sign up
            echo "<script>
                alert('Login berhasil!');
                window.location='datas.php';
            </script>";
        } else {
            echo "<script>alert('Password salah!');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit-login.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">
    <img src="logo.png" class="nav-logo">
</a>

    </div>
<ul class="nav navbar-nav">
    <li>
        <a href="logout.php">Home</a>
    </li>

    <li>
        <a href="about.php">About Us</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>

  </div>
</nav>


<div class="container">   
<div class="box">
    <h2 class="title"> LOGIN </h2>
    <form method="POST" class="form">
        <fieldset class="fs">
    
        <table class="table">
            <tr>
                <td>
        <label for="Username">Username</label>
    </td>
        <td>
            <label>:</label>
</td>
    <td>
        <input type="text" name="Username" placeholder="Username" required class="input"><br>
    </td>
</tr>



<tr>
    <td>
        <label for="Password">Password</label>
    </td>
        <td>
        <label>:</label>
</td>
    <td>
        <input type="password" name="Password" placeholder="Password" required class="input"><br>
    </td>
</tr>
<!-- area button -->
</table>


<div style="text-align:center; margin-top:10px;">
    <button class="button" type="submit" name="login">Login</button>
</div>
</fieldset>
</form>
<br>
<p class="link"> 
    Don't have account? <a href="register.php">Sign Up</a>
</p>
</div>
</div>

<footer class="sfooter">
    <p>©️ 2025 MyLibrary</p>
    <p>`Dedicated to providing access to knowledge, stories, and lifelong learning.`.</p>

    <div class="flinks">
        <a href="about.php">About</a>
        <span>•</span>
        <a href="contact.php">Contact</a>
        <span>•</span>
        <a href="stats.php">Stats</a>
    </div>
</footer>

</body>
</html>