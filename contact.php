<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $busname = $_POST['busname'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

    $to = "support@nearwala.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nBusiness Name: $busname\nPhone No: $tel\nMessage: $message";
    
    if(mail($to, $subject, $body)){
        echo "Message sent successfully!";
    } else{
        echo "Oops! Something went wrong.";
    }
}
?>