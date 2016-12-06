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
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <title>View Mail</title>
  </head>

  <body>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["msg"] . "</td>";
            echo "</tr>";
          }
        }

        mysqli_close($conn);
       ?>
   </table>

  </body>
</html>
