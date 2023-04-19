<hr>
<form class="comment_padding" method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" />
  <br />
  <label for="comment">Comment:</label>
  <textarea name="comment" id="comment" cols="30" rows="1"></textarea>
  <br />
  <input type="submit" value="Submit" />
</form>
<?php
include('/home/iste240t51/Sites/pinclude/dbCon.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the comment from the form
    $comment = $_POST["comment"];
    $name = $_POST["name"];
    // Prepare the SQL statement to insert the comment into the `comments` table
    // $sql = "INSERT INTO comments(page_id, content, name) VALUES ('$id','$comment','$name')";
    // Prepare parameterized sql insert
    $sql = $mysqli->prepare("INSERT INTO comments(page_id, content, name) VALUES (?, ?, ?)");
    $sql->bind_param("sss",$id, $comment, $name);
    // Execute the SQL statement
    if ($sql->execute() === TRUE) {
      echo "<p>Comment saved successfully</p>";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
  }
$sql = "SELECT * FROM comments WHERE page_id = '$id' LIMIT 5";
$results = $mysqli->query($sql)->fetch_all();
echo "<div class='comment_box'>";
foreach ($results as $result) {
    echo $result[2] . " " . $result[3] . " @ " . $result[4] . '<br>';
}
echo "</div>"
$mysqli->close();
?>
