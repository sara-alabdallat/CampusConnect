<?php
include 'config.php';
?>

<h2>Add Event</h2>

<form method="POST">
<input name="event_name" placeholder="Event Name"><br><br>
<input type="date" name="event_date"><br><br>
<textarea name="description" placeholder="Description"></textarea><br><br>
<button name="add">Add Event</button>
</form>

<hr>

<h2>Delete Event</h2>

<form method="POST">
<input name="event_id" placeholder="Event ID"><br><br>
<button name="delete">Delete Event</button>
</form>

<?php

// ADD EVENT
if(isset($_POST['add'])){

$name = $_POST['event_name'];
$date = $_POST['event_date'];
$desc = $_POST['description'];

mysqli_query($conn,
"INSERT INTO events(event_name, event_date, description)
VALUES('$name','$date','$desc')");

echo "Event Added Successfully ✔";
}

// DELETE EVENT
if(isset($_POST['delete'])){

$id = $_POST['event_id'];

mysqli_query($conn,
"DELETE FROM events WHERE event_id=$id");

echo "Event Deleted Successfully ✔";
}

?>