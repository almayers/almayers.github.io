<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exponents</title>
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
        <h1>Exponents</h1>
        <p>Students will be able to apply the laws of exponents to simplify and evaluate algebraic expressions involving integer exponents, demonstrating understanding of multiplication, division, and power rules as prerequisites for more advanced algebra concepts.</p>
        <h2>Exponent Rules: The Basics You Need to Know</h2>
        <p><strong>What is an exponent?</strong><br>
        An exponent tells you how many times a number (the base) is multiplied by itself.<br>
        Ex: <sup>3</sup>4 = 3 * 3 * 3 * 3 = 81</p>

        <h3>Rule 1: Product of Powers (Multiply with the Same Base)</h3>
        <p><strong>Rule:</strong> When multiplying powers with the same base, add the exponents. The base must be the same!<br>
        Ex: <sup>x</sup><sub>2</sub> * <sup>x</sup><sub>5</sub> = <sup>x</sup><sub>7</sub></p>

        <h3>Rule 2: Quotient of Powers (Divide with the Same Base)</h3>
        <p><strong>Rule:</strong> When dividing powers with the same base, subtract the exponents. The base must be the same!<br>
        Ex: <sup>y</sup><sub>6</sub>/<sup>x</sup><sub>2</sub> = <sup>y</sup><sub>6-2</sub> = <sup>y</sup><sub>4</sub></p>

        <h3>Rule 3: Power of a Power</h3>
        <p><strong>Rule:</strong> When raising a power to another power, multiply the exponents.<br>
        Ex: (<sup>x</sup><sub>3</sub>)<sup>2</sup> = <sup>x</sup><sub>3*2</sub> = <sup>x</sup><sub>6</sub></p>

        <h3>Rule 4: Power of a Product</h3>
        <p><strong>Rule:</strong> When an exponent is outside parentheses, it applies to everything inside.<br>
        Ex: (<sup>3x</sup>)<sup>2</sup> = <sup>3</sup><sup>2</sup> * <sup>x</sup><sup>2</sup> = 9<sup>x</sup><sub>2</sub></p>

        <h3>Rule 5: Zero Exponent</h3>
        <p><strong>Rule:</strong> Any nonzero base raised to the zero power equals 1.<br>
        Ex: <sup>x</sup><sub>0</sub> = 1 or <sup>5</sup><sub>0</sub> = 1</p>

        <h3>Rule 6: Negative Exponents</h3>
        <p><strong>Rule:</strong> A negative exponent means you will take the reciprocal.<br>
        Ex: <sup>x</sup><sub>-3</sub> = 1/<sup>x</sup><sub>3</sub></p>

        <p>At times, it can be a lot to remember each of the different rules! You can use the Exponent Rules graphic provided to assist with solving until these are committed to memory!</p>
    </section>

    <section class="image-section">
        <img src="https://raw.githubusercontent.com/almayers/almayers.github.io/main/webdevelopment/images/ExponentRules.png" alt="Exponent Rules Graphic" class="exponent-image">
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
