<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $toEmail = "info@glamortechcosmetics.in";
  $subject = "Новое сообщение";

  $username = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
  $privacy = $_POST["privacy"];

  $message = "Имя: " . $username . "\n";
  $message .= "Email: " . $email . "\n";
  $message .= "Комментарий: " . $comment . "\n";
  $message .= "Privacy: " . $privacy . "\n";

  $headers = "From: " . $email . "\r\n";

  if (mail($toEmail, $subject, $message, $headers)) {
    header("Location: thanks.html");
    exit;
  } else {
    echo "Ошибка при отправке сообщения.";
  }
}
?>