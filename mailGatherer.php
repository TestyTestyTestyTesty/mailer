<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];

    $email_from = 'sikoratomaszit@gmail.com';

    $email_subject = "Nowy klient";

    $email_body =   "Imię:  $name.\n".
                    "Email: $email";

    $to = "sikoratomasz93@gmail.com";

    $headers = "From: $email \r\n";
    
    $headers = "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>