<?php
include 'koneksi.php';
if(isset($_POST['save'])){
    $Full_Name=$_POST['Full_Name'];
    $Phone_Number=$_POST['Phone_Number'];
    $Book_Title=$_POST['Book_Title'];
    $Book_Genre=$_POST['Book_Genre'];
    $Borrow_Date=$_POST['Borrow_Date'];
    $Return_Date=$_POST['Return_Date'];

    $query = "INSERT INTO datas (Full_Name, Phone_Number, Book_Title, Book_Genre, Borrow_Date, Return_Date ) 
              VALUES ('$Full_Name', '$Phone_Number', '$Book_Title', '$Book_Genre', '$Borrow_Date', '$Return_Date')";
    $result = mysqli_query($koneksi,$query);

    if($result){
        echo "<script>alert('Data Saved!');
        window.location='tabel.php';</script>";
    } else {
        echo "ALERT! ERROR" . mysqli_error($koneksi);
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
    <link rel="stylesheet" href="edit-datas.css">

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
    <li class="active">
        <a href="datas.php">Input Data</a>
    </li>

    <li>
        <a href="tabel.php">Show Data</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
</ul>

  </div>
</nav>

<div class="form-container">
    <div class="data">

        <h2>INPUT YOUR DATA</h2><br>

        <form method="POST" class="form">
            <fieldset class="form-box">

                <div class="baris">

                    <div class="kiri">
                        <div class="kotak">
                            <label for="Full_Name">Full Name</label>
                            <input type="text" name="Full_Name" placeholder="Full Name" required class="isi">
                        </div>

                        <div class="kotak">
                            <label for="Phone_Number">Phone Number</label>
                            <input type="number" name="Phone_Number" placeholder="Phone Number" required class="isi">
                        </div>
                    <br>
                        <div class="note">
                            <h3 class="ntitle">Note</h3>
                            <p class="ntext">Max 7 days, Rp2,000/day.</p>
                            <p class="ntext">Use active phone. Replace lost/damaged books.</p>
                            <p class="ntext">Replace lost/damaged books.</p>
                        </div>
                    </div>

                    <div class="kanan">
                        <div class="kotak">
                            <label for="Book_Title">Book Title</label>
                            <input type="text" name="Book_Title" placeholder="Book Title" required class="isi">
                        </div>

                        <div class="kotak">
                            <label for="Book_Genre">Book Genre</label>
                            <input type="text" name="Book_Genre" placeholder="Book Genre" required class="isi">
                        </div>

                        <div class="kotak">
                            <label for="Borrow_Date">Borrow Date</label>
                            <input type="date" name="Borrow_Date" required class="isi">
                        </div>

                        <div class="kotak">
                            <label for="Return_Date">Return Date</label>
                            <input type="date" name="Return_Date" required class="isi">
                        </div>
                    </div>

                </div>
            
                <div style="text-align:center; margin-top:10px;">
                    <button class="tombol" type="submit" name="save">SAVE</button>
                </div>
            </fieldset>
        </form>

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

