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

<section id="events">
<h2>Featured Events</h2>


<input type="text"
id="searchBar"
placeholder="Search by event name or date">

<?php
include 'config.php';
?>

<div class="event-container">

<?php
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
?>

<div class="event-card">

<h3><?php echo $row['event_name']; ?></h3>

<p><b>Date:</b> <?php echo $row['event_date']; ?></p>

<p class="details">
<?php echo nl2br($row['description']); ?>
</p>

<button class="details-btn">View Details</button>
<button class="like-btn">❤️ Like</button>

</div>

<?php } ?>

</div>
</section>


<script src="script2.js"></script>


</body>








 </html>