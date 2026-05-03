<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>

<link rel="shortcut icon" href="images/math.ico">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="nav.css">
</head>

<body>

<header>
<img src="images/MayersLogo.png" alt="Logo">

<button class="hamburger">☰</button>

<nav>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="mathcontent.html">Math Content</a>
<ul class="dropdown">
<li><a href="exponents.html">Exponents</a></li>
<li><a href="linearequations.html">Linear Equations</a></li>
<li><a href="expressions.html">Expressions</a></li>
</ul>
</li>
<li><a href="reflection.html">Reflection</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
</header>

<main>
<section class="hero">
<h1>Welcome</h1>
<blockquote>Everyone can learn math!</blockquote>
</section>


<section class="welcome-text">
    <p>Hello and welcome to Mrs. Mayers’ Algebra resource website! I am so excited you are here and I hope these lessons help to refresh your basic Algebra skills which are helpful to your course progress.</p>
    <p>Basic Algebraic concepts are crucial in the high level development of mathematical ideas and reasoning. Here, you’ll have access to a variety of important topics that will help hone in on building these essential skills. The lessons provided will enable learning and practicing with exponents, solving for basic linear equations and both understanding and applying algebraic expressions. Whether math is a subject you enjoy or perhaps not so much, just remember that every person truly is a math person!</p>
</section>

</main>

<footer>
<p> 2026 Amy Mayers</p>
<p>Email: amy@example.com | Phone: (123) 456-7890</p>

<div class="footer-icons">
<i class="fas fa-envelope"></i>
<i class="fas fa-phone"></i>
</div>
</footer>

<script>
document.querySelector('.hamburger').onclick = () => {
document.querySelector('nav ul').classList.toggle('active');
};
</script>

</body>
</html>
