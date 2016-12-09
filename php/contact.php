<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $mysql_host = "localhost";
  $mysql_username = 'root';
  $mysql_password = '';
  $mysql_database = "mydb";


  // Filter inputs
  $email = filter_var($_POST["contact-email"], FILTER_SANITIZE_EMAIL);
  $message = filter_var($_POST["contact-message"], FILTER_SANITIZE_STRING);


  $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);

  if ($mysqli->connect_error) {
    print 'Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error;
  }

  $statement = $mysqli->prepare('INSERT INTO contact (email, message) VALUES (?, ?)');
  $statement->bind_param('ss', $email, $message);

  if($statement->execute()) {
    print "Your message has been received! I'll get back to you shortly.";
  } else {
    print $mysqli->error;
  }
}
?>
