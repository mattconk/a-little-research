<?php

	include('includes/connection.php');
	include('includes/header.php');
	include('includes/nav.php');

?>


<?php 


	$ToEmail = 'mattconk@gmail.com'; 
	$EmailSubject = 'A New Message From | A Little Research'; 
	$mailheader = "From: ".$_POST["email"]."\r\n"; 
	$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$MESSAGE_BODY = "Name: ".$_POST["name"].""; 
	$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
	$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
	mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>

<div class="container-fluid">

	<div class="hero-unit">
		<h1>Thank You</h1>
        <h2>Contact has been made, I will get back to you shortly</h2>
	</div>

	<p class="hidden-phone">
    	<a class="btn <?php if ($_SERVER['PHP_SELF'] == '/assignments/ALittleResearch_Class/index.php')	echo 'active'; ?>" href="index.php">Home</a> 
<?php /*?>        <a class="btn <?php if ($_SERVER['PHP_SELF'] == '/assignments/ALittleResearch_Class/about.php')	echo 'active'; ?>" href="about.php">About</a> 
<?php */?>        <a class="btn <?php if ($_SERVER['PHP_SELF'] == '/assignments/ALittleResearch_Class/addForm.php')	echo 'active'; ?>" href="addForm.php">Add</a>
        <a class="btn <?php if ($_SERVER['PHP_SELF'] == '/assignments/ALittleResearch_Class/contact.php')	echo 'active'; ?>" href="contact.php">Contact</a>
	</p>

<?php

	include('includes/footer.php');

?>

