<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $details = $_POST['details'];
    $from = $_POST['email'];
    $to = 'michelledavella@gmail.com';
    
    $body = "From: $name\nEmail: $email\nDetails: $details";
    
    if ($_POST['submit']) {
        if ($name != '' && $email != '') {				 
            if (mail ($to, $subject, $body, $from)) { 
				header('Location: ../formConfirm.html');
	        } else {
                echo '<p>Something went wrong, please go back and try again!</p>'; 
	        } 
	    }
    }
    
?>