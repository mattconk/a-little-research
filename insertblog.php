<?php
/*
1. create function to add data to posts table
2. create function to add data to blogs table
3. add function to insertdata.php page to insert the data
4. add a layout to see what the new data will look like


*/
	include('includes/connection.php');
	include('functions/sql_functions.php');
	include('includes/header.php');
	include('includes/nav.php');

?>

<?php

	$blog_name = addslashes($_POST['blog']);
	$blog_link = $_POST['blog_url'];

	insertblog ($blog_name, $blog_link);

?>

    <div class="container-fluid">

	<div class="hero-unit">
		<h1>Blog Site Has Been Added</h1>
	</div>
	<div class="row-fluid">	
    <div class="span2">
	<div class="well sidebar-nav">
		<ul class="nav nav-list">
			<li class="nav-header">Recommended Blogs</li>
				<?php 
					$blogs = mostRecentBlog();
					foreach ($blogs as $show_blogs):
				?>
					<li><a href="<?php echo $show_blogs['blog_link']; ?>" title="<?php echo $show_blogs['blog_name']; ?>" target="_new"><?php echo strtolower($show_blogs['blog_name']) ; ?></a></li>
				<?php endforeach; ?>

		</ul>
	</div><!--/.well -->
</div><!--/span2-->
</div>
        <p><a class="btn" href="index.php" title="Home">Home</a><a class="btn" href="addForm.php" title="Add and Article">Add Another</a></p>

<?php

	include('includes/footer.php');

?>