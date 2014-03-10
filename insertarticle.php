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
	$title = addslashes($_POST['title']);
	if ($_POST['author'] == "") {
			$author = NULL;	
		} else {
			$author = addslashes($_POST['author']);
		}
	if ($_POST['author_url'] == "") {
			$author_link = NULL;
		} else {
			$author_link = $_POST['author_url'];
		}
	if ($_POST['date'] == "") {
			$date = NULL;
		} else {
			$date = date('Y-m-d', strtotime($_POST['date']));
		}
	$intro = addslashes($_POST['intro']);
	$article_link = $_POST['title_url'];
	
	insertArticle ($title, $author, $author_link, $date, $intro, $article_link);


?>
     <div class="container-fluid">

	<div class="hero-unit">
		<h1>Article Has Been Added</h1>
	</div>
    
<div class="row-fluid content">

<?php
	$data = mostRecent();
	foreach ($data as $show_data):
?>
		<div class="span4">
			<h4 class="title"><?php echo ucwords($show_data['title']); ?></h4>
			<h5>
				<?php if (is_null($show_data['author'])){
                    echo "<br>";
                } else {?>
                    by <a href="<?php echo $show_data['author_link']; ?>" title="<?php echo ucwords($show_data['author']); ?>" target="_new"><?php echo ucwords($show_data['author']); ?></a>
                    <?php if (!is_null($show_data['date'])) { ?>
                        	| <?php echo date('F j, Y', strtotime($show_data['date'])); ?>
						<?php }  ?>
				<?php } ?>
			</h5>
            

			<p class="intro"><?php echo $show_data['intro']; ?></p>
			<p><a class="btn" href="<?php echo $show_data['article_link']; ?>" title="Read The Rest" target="_new">Read The Rest &raquo;</a></p>
		</div><!--/span4-->
		
        <hr class="visible-phone">
<?php endforeach; ?>

	</div> <!--/row-fluid-->
        <p>
        <a class="btn" href="index.php" title="Home">Home</a>
        <a class="btn" href="addForm.php" title="Add and Article">Add Another</a>
<!--        <a class="btn" href="deleteForm.php" title="Add and Article">Delete</a>
-->        
        </p>

<?php

	include('includes/footer.php');

?>