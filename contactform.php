<?php
if (isset($_POST["submit"]))
{
  $email = $_POST["email"];
  $name = $_POST["name"];
  $phone = $_POST["tel"];

  $mailTo = "your@email.com";
  $subject = "MyBank24 Customers";
  $headers = "From: ".$email;
  $txt = "You have received a new connection from ".$name;
  // .".\n\n"."You can contact ".$name."at " .$phone;
  mail($mailto, $subject,$txt,$headers);

  header("Location: index.php?mailsend");

}
?>