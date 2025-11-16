<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="edits-update.css">
</head>
<body>

<div class="form-container">
    <div class="data">
        <h2>Edit Book Information</h2>
        <br>

        <?php
        include 'koneksi.php';
        $ID = $_GET['ID'];
        $data = mysqli_query($koneksi, "SELECT * from datas where ID='$ID'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="ubah.php">
            <fieldset class="form-box">
                <div class="baris">
                    <div class="kiri">
                        <div class="kotak">
                            <label for="Full_Name">Full Name</label>
                            <input type="text" name="Full_Name" value="<?php echo $d['Full_Name']; ?>" class="isi">
                        </div>
                        <div class="kotak">
                            <label for="Phone_Number">Phone Number</label>
                            <input type="number" name="Phone_Number" value="<?php echo $d['Phone_Number']; ?>" class="isi">
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
                            <input type="text" name="Book_Title" value="<?php echo $d['Book_Title']; ?>" class="isi">
                        </div>
                        <div class="kotak">
                            <label for="Book_Genre">Book Genre</label>
                            <input type="text" name="Book_Genre" value="<?php echo $d['Book_Genre']; ?>" class="isi">
                        </div>
                        <div class="kotak">
                            <label for="Borrow_Date">Borrow Date</label>
                            <input type="date" name="Borrow_Date" value="<?php echo $d['Borrow_Date']; ?>" class="isi">
                        </div>
                        <div class="kotak">
                            <label for="Return_Date">Return Date</label>
                            <input type="date" name="Return_Date" value="<?php echo $d['Return_Date']; ?>" class="isi">
                        </div>
                    </div>
                </div>


                <div style="text-align:center; margin-top:10px;">
                    <button class="tombol" type="submit" name="save">SAVE</button>
                    <input type="hidden" name="ID" value="<?php echo $d['ID'];?>">
                </div>
            </fieldset>
        </form>
        <?php } ?>

</body>
</html>
