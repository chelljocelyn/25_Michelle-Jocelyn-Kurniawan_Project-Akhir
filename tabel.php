<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit-table.css">

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
        <a href="datas.php">Input Data</a>
    </li>

    <li class="active">
        <a href="tabel.php">Show Data</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
</ul>

  </div>
</nav>


    <!-- JUDUL HALAMAN -->
    <a href="datas.php" class="judul">MyLibrary Data</a>

    <!-- TABEL DATA -->
    <table border="1" class="tabel">
        <tr>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Book Title</th>
            <th>Book Genre</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM datas");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['Full_Name']; ?></td>
                <td><?php echo $d['Phone_Number']; ?></td>
                <td><?php echo $d['Book_Title']; ?></td>
                <td><?php echo $d['Book_Genre']; ?></td>
                <td><?php echo $d['Borrow_Date']; ?></td>
                <td><?php echo $d['Return_Date']; ?></td>

                <td class="aksi-update">
                    <a href="update.php?ID=<?php echo $d['ID']; ?>">Update</a>
                </td>
                <td class="aksi-hapus">
                    <a href="delete.php?ID=<?php echo $d['ID']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
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

