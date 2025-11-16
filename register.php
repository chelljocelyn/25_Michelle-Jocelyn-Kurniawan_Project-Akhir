<?php
include 'koneksi.php';
if(isset($_POST['Sign_Up'])){
    $Full_Name = $_POST['Full_Name'];
    $Username = $_POST['Username'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    
    // CEK USERNAME SUDAH ADA ATAU BELUM
    
    $check = mysqli_query($koneksi, "SELECT * FROM register WHERE Username='$Username'");
    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Username Already Taken!'); 
        window.location='register.php';</script>";
        exit(); 
    }

    $query = "INSERT INTO register (Full_Name, Username, Date_of_Birth, Email, Password) 
              VALUES ('$Full_Name', '$Username', '$Date_of_Birth', '$Email', '$Password')";
    $result = mysqli_query($koneksi,$query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        echo "Gagal Mendaftar! Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit-regis.css">

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
    <li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>

  </div>
</nav>


<div class="container">
    <div class="one">
    <div class="left-img">
        <img src="book.jpeg">
    </div>
    
<div class="box">
<h2> Sign Up </h2>
<form method="POST" class="form">
<fieldset class="fs">
        <table class="tabel">
            <tr>
                <td>
        <label for="Full_Name">Full Name</label>
    </td>
    <td>
        <label>:</label>
</td>
    <td>
        <input type="text" name="Full_Name" placeholder="Full Name" required class="input"><br>
    </td>
</tr>

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
        <label for="Date_of_Birth">Date of Birth</label>
    </td>
    <td>
    <label>:</label>
</td>
    <td>
        <input type="date" name="Date_of_Birth" placeholder="Date of Birth" required class="input"><br>
    </td>
</tr>


<tr>
    <td>
        <label for="Email">Email</label>
    </td>
    <td>
    <label>:</label>
</td>
    <td>
        <input type="email" name="Email" placeholder="Email" required class="input"><br>
    </td>
</tr>


<tr>
    <td>
        <label for=Password>Password</label>
    </td>
    <td>
    <label>:</label>
</td>
    <td>
        <input type="password" name="Password" placeholder="Password" required class="input"><br>
    </td>
</tr>
</table>


<div style="text-align:center; margin-top:10px;">
    <button type="submit" name="Sign_Up" class="button">Sign Up</button>
</div>
</fieldset>
</form>
<br>
<p class="login"> 
    Already have account? <a href="login.php">Login</a>
</p>
</div>
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