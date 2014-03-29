<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
	$company = $_POST['company'];
	$location = $_POST['location'];
	$phone = $_POST['phone'];
	$website = $_POST['website'];
    $subject = $_POST['project'];
	$timeline = $_POST['timeline'];
	$budget = $_POST['budget'];
    $details = $_POST['details'];
	$refer = $_POST['refer'];
    $from = $_POST['email'];
    $to = 'michelledavella@gmail.com';
    
    $body = "From: $name\nEmail: $email\nCompany: $company\nLocation: $location\nPhone: $phone\nWebsite: $website\nProject: $subject\nTimeline: $timeline\nBudget: $budget\nReferred by: $refer\nDetails: $details";
    
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