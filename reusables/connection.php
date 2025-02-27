<?php
  // Connect to a database - host, username, password, database
  $connect = mysqli_connect(
    'localhost',
    'root',
    '',
    'news_article'
  );

  if (!$connect) {
    echo 'Error Code: ' . mysqli_connect_errno();
    echo 'Error Message: ' . mysqli_connect_error();
    // die("Connection Failed:" . mysqli_connect_error());
    exit;
  }
