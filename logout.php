<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="edit-logout.css">

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
        <a href="logout.php">Home</a>
    </li>

    <li>
        <a href="about.php">About Us</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
</ul>

  </div>
</nav>


<section class="hero" id="about">
    <div class="hero-inner">
        <div class="hero-left">
            <h1>Welcome to MyLibrary</h1>
            <p class="hero-text">
                MyLibrary is a simple e-library where you can record book loans,
                track return dates, and keep your reading list organized.
            </p>
            <p class="hero-text">
                Browse titles, save your favourites, and never lose track of borrowed books again.
            </p>
            <button class="hero-btn">Learn More</button>
        </div>

        <div class="hero-right">
            <img src="welcome.jpg" alt="Books illustration" class="hero-main-img">
        </div>
    </div>
</section>

<section class="books">
    <div class="books-inner">
        <h2 class="books-title">Most Borrowed Books</h2>
        <p class="books-subtitle">
            A quick look at the titles readers are loving in our e-library.
        </p>

        <div class="book-grid">
            <div class="book-card">
                <div class="book-cover-wrap">
                    <img src="book1.jpg"  class="book-cover">
                </div>
                <div class="book-info">
                    <h3 class="book-name">The Little Prince</h3>
                    <p class="book-author">by Antoine de Saint-Exupery</p>
                    <span class="book-tag">Fantasy</span>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover-wrap">
                    <img src="book2.jpg"  class="book-cover">
                </div>
                <div class="book-info">
                    <h3 class="book-name"> The Alchemist</h3>
                    <p class="book-author">by Paulo Coelho</p>
                    <span class="book-tag">Philosophical</span>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover-wrap">
                    <img src="book3.jpg"  class="book-cover">
                </div>
                <div class="book-info">
                    <h3 class="book-name">It Ends With Us</h3>
                    <p class="book-author">by Colleen Hoover</p>
                    <span class="book-tag">Romance, Drama, Fiction</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="arrivals">
    <div class="arrivals-inner">
        <h2 class="arrivals-title">New Arrivals</h2>
        <p class="arrivals-subtitle">
            Fresh titles recently added to MyLibrary — perfect for your next read.
        </p>

        <div class="arrivals-panel">
            <div class="arrivals-grid">
                <div class="arrival-card">
                    <img src="arbook1.jpg" alt="Atomic Habits" class="arrival-cover">
                    <h3 class="arrival-name">Atomic Habits</h3>
                    <p class="arrival-author">by James Clear</p>
                </div>

                <div class="arrival-card">
                    <img src="arbook2.jpg" alt="The Midnight Library" class="arrival-cover">
                    <h3 class="arrival-name">The Midnight Library</h3>
                    <p class="arrival-author">by Matt Haig</p>
                </div>

                <div class="arrival-card">
                    <img src="arbook3.jpg" alt="The Girl Who Beneath The Sea" class="arrival-cover">
                    <h3 class="arrival-name">The Girl Who Beneath The Sea</h3>
                    <p class="arrival-author">by Axie Oh</p>
                </div>
            </div>
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
