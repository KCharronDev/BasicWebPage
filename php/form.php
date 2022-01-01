<?php
if(isset($_POST['submit'])){
    $to = "kylar@easywebdesign.ca"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $general = $_POST['general'];
    $subject = "Form submission for EasyWebDesign";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['howCanWeHelp'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['howCanWeHelp'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //header("Location: http://www.easywebdesign.ca/");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.

    }
?>