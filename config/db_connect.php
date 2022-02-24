<?php
  $conn = mysqli_connect('localhost', 'finland', '1405', 'cheemy');
  if (!$conn) {
    echo "Connection error: " . mysqli_connect_error();
  }
?>