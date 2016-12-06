<?php
  // Setup DB connection
  $servername = "127.0.0.1";
  $username = "root";
  $password = "password";
  $db = "webapp";

  $conn = new mysqli($servername, $username, $password, $db);

  $sql = "SELECT name, email, msg FROM Messages";
  $result = $conn->query($sql);

  mysqli_close($conn);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/mail.css" rel="stylesheet">
    <title>View Mail</title>
  </head>

  <body>
    <header>
      <h1>View Mail</h1>
    </header>
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
              echo "<td>" .  htmlspecialchars($row["name"], ENT_QUOTES, 'UTF-8') . "</td>";
              echo "<td> <a href=\"mailto:" . htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') . "\">" . htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') . "</a> </td>";
              echo "<td>" .  htmlspecialchars($row["msg"], ENT_QUOTES, 'UTF-8') . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr>";
            echo "<td>No</td>";
            echo "<td>new</td>";
            echo "<td>messages</td>";
          echo "</tr>";
        }
       ?>
   </table>

  </body>
</html>
