<?php
  // Setup DB connection
  $servername = "127.0.0.1";
  $username = "root";
  $password = "password";
  $db = "webapp";

  $conn = new mysqli($servername, $username, $password, $db);

  $sql = "SELECT name, email, msg FROM Messages";
  $result = $conn->query($sql);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <title>View Mail</title>
  </head>

  <body>

    <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "Name: " . $row["name"] . " EMail: " . $row["email"] . " Message: " . $row["msg"] . "<br>";
        }
      } else {
        echo "No Mail";
      }

      mysqli_close($conn);
     ?>

  </body>
</html>
