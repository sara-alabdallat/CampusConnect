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

<br><br>

<form id="registerForm" method="POST" action="process_register.php">

<fieldset>

<legend align="center" class="reg">Registration</legend>

<label for="name">Full Name :</label><br>
<input type="text" id="name" name="name"><br><br>

<label for="id">Student ID :</label><br>
<input type="text" id="id" name="student_id"><br><br>

<label for="email">Email :</label><br>
<input type="email" id="email" name="email"><br><br>

<label for="check">Select Event :</label><br>

<select id="check" name="event_id">

<?php
include 'config.php';

$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>

<option value="<?php echo $row['event_id']; ?>">
    <?php echo $row['event_name']; ?>
</option>

<?php } ?>

</select>

<br><br>

<button type="submit">Submit</button>
<button type="reset">Reset</button>

</fieldset>

</form>

<script src="script.js"></script>

</body>
</html>