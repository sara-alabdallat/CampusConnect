<!doctype html>
<html>
<head>
<title>CampusConnect</title>
<link href="prostyle.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<nav class="navbar">
    <h2 class="logo">CampusConnect</h2>

    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<section class="contact">

<h2>Contact Us</h2>
<p>Have questions about campus events or registration? We'd love to hear from you.</p>

<form method="POST" action="process_contact.php">

<fieldset>

<legend align="center" class="reg">Contact Form</legend>

<label for="name">Name :</label><br>
<input type="text" id="name" name="name" required><br><br>

<label for="email">Email :</label><br>
<input type="email" id="email" name="email" required><br><br>

<label for="message">Message :</label><br>
<textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

<button type="submit">Send</button>

</fieldset>

</form>

<h3>Follow Us</h3>

<a href="#">Instagram</a>
<a href="#">Facebook</a>
<a href="#">LinkedIn</a>

</section>

</body>
</html>