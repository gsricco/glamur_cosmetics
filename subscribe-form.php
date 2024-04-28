<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $toEmail = $_POST['name_user'];
  $subject = "Новое user";

  $email = $_POST['name_user'];

  if (mail($toEmail, $subject, $email)) {
      $redirect_url = "https://subscribe.to/?link=glamorcosmetics";
      header("Location: $redirect_url");
      exit;
    } else {
      echo "Ошибка при отправке сообщения.";
    }

}
?>
