<?php

$conn = mysqli_connect('localhost', 'root', '', 'hack');

if (mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  exit();
}

$search = $_GET['search'];

$query = "SELECT * FROM users WHERE id = " . $search;

$result = mysqli_query($conn, $query);

if (!$result) {
  echo 'Error executing query: ' . mysqli_error($conn);
  exit();
}

// Check if any rows were returned
if (mysqli_num_rows($result) == 0) {
  echo 'Not found';
} else {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . ' ' . $row['name'] . '<br>';
  }
}

mysqli_close($conn);

//?search=1 OR 1=1
//?search=1%20OR%201=1
//"1' OR '1'='1'; SELECT * FROM users;--"


?>


