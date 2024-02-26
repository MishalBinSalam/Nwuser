<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "support@nearwala.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    if(mail($to, $subject, $body)){
        echo "Message sent successfully!";
    } else{
        echo "Oops! Something went wrong.";
    }
}
?>