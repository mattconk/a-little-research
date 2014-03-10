<body>
	<div class="navbar navbar-inverse navbar-fixed-top"> <!-- Black Bar At the Top -->
		<div class="navbar-inner">
			<div class="container-fluid">
			<a class="brand" href="index.php">A Little Research | INEW 2334</a>
		<div class="hidden-phone">
			<ul class="nav">
				<li <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/index.php')
						echo 'class="active"'; ?>><a href="index.php"><i class="icon-home <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/index.php')
						echo 'icon-white'; ?>"></i> Home</a></li>
<?php /*?>				<li <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/about.php')
						echo 'class="active"'; ?>><a href="about.php"><i class="icon-question-sign <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/about.php')
						echo 'icon-white'; ?>"></i> About</a></li>
<?php */?>				<li <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/addForm.php')
						echo 'class="active"'; ?>><a href="addForm.php"><i class="icon-plus-sign <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/addForm.php')
						echo 'icon-white'; ?>"></i> Add Post/Blog</a></li>
				<li <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/contact.php')
						echo 'class="active"'; ?>><a href="contact.php"><i class="icon-envelope <?php if ($_SERVER['PHP_SELF'] == '/portfolio/mattconk/mysites/research/contact.php')
						echo 'icon-white'; ?>"></i> Contact</a></li>
			</ul>
		</div> <!-- /.nav-collapse -->
		</div> <!-- /.container-fluid -->
		</div> <!-- /.navbar-inner -->
    </div> <!-- /.navbar -->
