<?php
if (isset($_POST['Sumbit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mailto = "mjpoolfit@yahoo.com"
  $headers = "From: ".$email;
  $txt = "You have mail from ".$name.".\n\n".$message;


  mail($mailto, $headers, $txt);
  header("Location: index.php?mailsend");
}


 ?>
