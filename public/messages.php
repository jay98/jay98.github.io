<?php
if(isset($_POST['submit']))
{
    $name  = $_POST['name'];

    $email = $_POST['email'];

    $subject = $_POST['subject'];

    $message = $_POST['message'];

    $from = 'My Website';

    $to = 'jaydevparmar1798@gmail.com';

    $esubject = 'You have a message';

    

    $body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message: $message";


if ($_POST['submit']) {

    if (mail ($to, $subject, $body)) { 

        echo '<p>Your message has been sent!</p>';
		echo "<script>window.open('submitted.html','_self')</script>";

    } else { 

        echo '<p>Something went wrong, go back and try again!</p>';
		echo "<script>window.open('contactme.html','_self')</script>";

    }

}
else{
	echo '<p>ERROR!</p>';
}
}else{
echo "<script>window.open('contactme.html','_self')</script>";
}
?>