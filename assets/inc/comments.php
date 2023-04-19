<?php
include('/home/iste240t51/Sites/pinclude/dbCon.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the comment from the form
    $comment = $_POST["comment"];
    $name = $_POST["name"];
    // Prepare the SQL statement to insert the comment into the `comments` table
    $sql = "INSERT INTO comments(page_id, content, name) VALUES ('$id','$comment','$name')";
  
    // Execute the SQL statement
    if ($mysqli->query($sql) === TRUE) {
      echo "<p>Comment saved successfully</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  }
$sql = "SELECT * FROM comments LIMIT 5";
$results = $mysqli->query($sql)->fetch_all();
foreach ($results as $result) {
    echo $result;
}
$mysqli->close();
?>
  <form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" />
    <br />
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" cols="30" rows="1"></textarea>
    <br />
    <input type="submit" value="Submit" />
  </form>
