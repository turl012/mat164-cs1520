<?php
  // Setup DB connection
  $servername = "127.0.0.1";
  $username = "root";
  $password = "password";
  $db = "webapp";

  $pname = $_POST['name'];
  $pmail = $_POST['email'];
  $pmsg = $_POST['msg'];

  $conn = new mysqli($servername, $username, $password, $db);

  mysqli_query($conn,"INSERT INTO Messages (name,email,msg) VALUES ('" . $pname . "','". $pmail . "','". $pmsg ."')");

  mysqli_close($conn);
?>
