<?php

	include('includes/connection.php');
	include('includes/header.php');
	include('includes/nav.php');

?>
<div class="container-fluid">

	<div class="hero-unit">
		<h1>Contact Me</h1>
	</div>

	<div class="row-fluid content">
		<div class="span6 offset1">
            <form action="sendemail.php" method="post">
        
                <legend>Send Me An Email</legend>
        
                <label>Your Name</label>
                <input class="span9 search-query" name="name" type="text" placeholder="your name" autofocus>
                
                <span class="help-block"></span>
                
                <label>Your Email</label>
                <input class="span9 search-query" name="email" type="email" placeholder="email address">
         
                <span class="help-block"></span>
                
                <label>Comments</label>
                <textarea rows="6" class="span9 search-query" name="comment" type="textarea" placeholder=""></textarea>
                
                <br>
                
                <button type="submit" class="btn btn-primary">Submit</button>
        
            </form>
		</div> <!-- /.span6 -->
	</div>



<?php

	include('includes/footer.php');

?>
