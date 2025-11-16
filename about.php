<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit-about.css">

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

    <li class="active">
        <a href="about.php">About Us</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
</ul>

  </div>
</nav>


    <section class="about">
        <div class="about-content">
            <h1>About MyLibrary</h1>
            <p>
                MyLibrary is a simple e-library where you can record book loans, track return dates, and keep your reading list organized.
            </p>
            <p>
                Browse titles, save your favorites, and never lose track of borrowed books again.
            </p>
        </div>

        <div class="about-images">
            <img src="about1.jpg" alt="Reading together" class="about-img">
            <img src="about2.jpg" alt="Study session" class="about-img">
            <img src="about3.jpg" alt="Library desk" class="about-img">
        </div>
    </section>


<section class="vision-mission">
    <div class="vision-content">
        <h2>Our Vision</h2>
        <p>
            A cosy digital shelf where every reader knows which stories they have borrowed, finished, and loved — without stress about due dates. Our vision is to create a seamless digital experience that makes managing books as easy and enjoyable as reading them.
        </p>

        <h2>Our Mission</h2>
        <p>
            To give schools and small libraries a warm, simple system for managing book loans, built with clear design and friendly language. We are committed to helping libraries stay organized, giving readers the ability to track their borrowed books, and ensuring that no book gets lost in the shuffle. We aim to provide a solution that saves time and brings joy to both librarians and readers alike.
        </p>
    </div>

    <div class="vision-img">
        <img src="vision.jpg" alt="Vision image" class="vision-image">
    </div>
</section>
    <section class="values">
        <h2>Why readers like MyLibrary</h2>
        <p class="values-description">
            Soft colours, clear layouts, and only the features you really need.
        </p>

        <div class="values-cards">
            <div class="value-card">
                <img src="value1.jpg" alt="Simple to use" class="value-img">
                <h3>Simple to Use</h3>
                <p>
                    Forms are short, labels are clear, and every field has a place. Even first-time users can understand it.
                </p>
            </div>

            <div class="value-card">
                <img src="value2.jpg" alt="Warm interface" class="value-img">
                <h3>Warm Interface</h3>
                <p>
                    Autumn tones and rounded cards give a calm feeling, so your library system doesn’t look scary or too formal.
                </p>
            </div>

            <div class="value-card">
                <img src="value3.jpg" alt="Built for students" class="value-img">
                <h3>Built for Students</h3>
                <p>
                    Designed with school projects in mind — light, fast, and easy to adjust when your assignment grows.
                </p>
            </div>
        </div>
    </section>

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
