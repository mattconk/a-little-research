<?php

	include('includes/connection.php');
	include('functions/sql_functions.php');
	include('includes/header.php');
	include('includes/nav.php');

?>
<div class="container-fluid">
	
<div class="row-fluid">     
	<div class="well hero-unit">
		<h1>A Little Research</h1>
		<h2>INEW 2334</h2>
		<p class="visible-desktop visible-tablet">Since we have decided to not use a book for this class, it is incumbent on us to gather together resources that we can use to help us understand and learn what the current thinking is regarding the "mobile Web". With that in mind, this is our resource of blogs, articles, videos, tutorials, etc. that talk about designing and developing Web sites for mobile platforms. </p>
		<p class="visible-phone">Our resources of blogs, articles, videos, tutorials, etc. about designing and developing Web sites for mobile platforms</p>
    </div> <!-- /hero-unit -->
</div> <!-- /row-fluid -->

<div class="row-fluid content">
<div class="span10">
<?php
	$total_posts = posts_count();
	foreach ($total_posts as $total_posts):
		$rows = $total_posts['COUNT(title)'];
		endforeach
?>
<?php

	for ($i=0; $i < $rows; $i+=3){
	$data = posts($i);	
?>
    <div class="row-fluid">
<?php
	foreach ($data as $show_data):
?>
		<div class="span4">
			<h4 class="title"><?php echo ucwords(strtolower($show_data['title'])); ?></h4>
			<h5>
				<?php if (is_null($show_data['author'])){
                    echo "<br>";
                } else {?>
                    by <a href="<?php echo $show_data['author_link']; ?>" title="<?php echo ucwords($show_data['author']); ?>" target="_new"><?php echo ucwords(strtolower($show_data['author'])); ?></a>
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
<?php } ?>		
</div> <!--/span10-->

<div class="span2">
	<div class="well sidebar-nav">
		<ul class="nav nav-list">
			<li class="nav-header">Recommended Blogs</li>
				<?php 
					$blogs = blogs();
					foreach ($blogs as $show_blogs):
				?>
					<li><a href="<?php echo $show_blogs['blog_link']; ?>" title="<?php echo $show_blogs['blog_name']; ?>" target="_new"><?php echo strtolower($show_blogs['blog_name']) ; ?></a></li>
				<?php endforeach; ?>

		</ul>
	</div><!--/.well -->
</div><!--/span2-->
</div>
<?php

	include('includes/footer.php');

?>
