<?php

	include('includes/connection.php');
	include('functions/sql_functions.php');
	include('includes/header.php');
	include('includes/nav.php');

?>

    <div class="container-fluid">

	<div class="hero-unit">
		<h1>Add A New Post</h1>
	</div>
<div class="row-fluid content">
<div class="span6 offset1">
	<form action="insertarticle.php" method="post">

		<legend>Add | A New Article</legend>

		<label>Title of Article</label>
		<input class="span9 search-query" name="title" type="text" placeholder="Title" autofocus required>
        
        <span class="help-block"></span>
        
 		<label>Link To Article</label>
        <input class="span9 search-query" name="title_url" type="url" placeholder="URL" required>
 
        <span class="help-block"></span>
		
        <label>Author</label>
        <input class="span5 search-query" name="author" type="text" placeholder="Author">
 
        <span class="help-block"></span>
		
        <label>Author's Info Link</label>
        <input class="span9 search-query" name="author_url" type="url" placeholder="Author's Info Link">
 
        <span class="help-block"></span>
		
        <label>Date of Article</label>
        <input class="span4 search-query" name="date" type="date" placeholder="mm/dd/yyyy">
 
        <span class="help-block"></span>
		
        <label>Intro Paragraph</label>
        <textarea rows="6" class="span9 search-query" name="intro" type="textarea" placeholder="" required></textarea>
		<br>
		<button type="submit" class="btn btn-primary">Submit</button>

	</form>

</div> <!-- /.span7 -->

<div class="span4">
	<form action="insertblog.php" method="post">

		<legend>Add | A New Recommended Blog</legend>
        
        <label class="control-label">Name of Blog</label>
        <input class="span12 search-query" name="blog" type="text" placeholder="Name of Blog" required>
		
        <label class="control-label">Link To Blog</label>
		<input class="span12 search-query" name="blog_url" type="url" placeholder="URL" required>
		<br>
		<button type="submit" class="btn btn-primary blogbutton">Submit</button>

	</form>
</div>
</div>

<?php

	include('includes/footer.php');

?>