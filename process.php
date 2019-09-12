<?php
if(isset($_POST['email'])) {

   $admin_email = "info@langmead.com";
   $name - $_POST['name'];
   $email - $_POST['email'];
   $phone - $_POST['phone'];
   $message - $_POST['message'];

   // send email
   mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From" .$email);

   header('Location: http://langmead.com/success.html');
}

?>