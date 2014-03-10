<?php

// Counts the Articles in the posts DB
	function posts_count(){
		global $db;
		$query = "SELECT COUNT(title)
					FROM posts"; 
		$results = $db->query($query);
		return $results;	
	}

// Pulls rows three at a time
	function posts($i){
		global $db;
		$query = " SELECT *
					FROM posts
						ORDER BY added DESC, date DESC
					LIMIT $i,3
					";
		$results = $db->query($query);
		return $results;		
	}

// Pulls all of the blogs to follow
	function blogs(){
		global $db;
		$query = " SELECT *
					FROM blogs
					ORDER BY blog_name";
		$results = $db->query($query);
		return $results;		
	}

// Inserts Article Data
	function insertArticle ($title, $author, $author_link, $date, $intro, $article_link) {
		global $db;
		if ($author == NULL || $author_link == NULL ) {
			$query = "INSERT INTO posts
						(title, author, author_link, date, intro, article_link, added)
					VALUES ('$title', NULL, NULL, NULL, '$intro', '$article_link', now())";
		} else if ($date == NULL){
			$query = "INSERT INTO posts
						(title, author, author_link, date, intro, article_link, added)
					VALUES ()";
		} else {
			$query = "INSERT INTO posts (title, author, author_link, date, intro, article_link, added)
						VALUES 			('$title', '$author', '$author_link', '$date', '$intro', '$article_link', now())";
		}
		$db->exec($query);		
	}

// Pulls most recent record
	function mostRecent(){
		global $db;
		$query = " SELECT *
					FROM posts
						ORDER BY auto DESC
					LIMIT 1
					";
		$results = $db->query($query);
		return $results;		
	}

// Inserts Blog Data
	function insertblog ($blog_name, $blog_link) {
		global $db;
		$query = "INSERT INTO blogs
						(blog_name, blog_link)
					VALUES ('$blog_name', '$blog_link')";
		$db->exec($query);		
	}

// Pulls most recent record
	function mostRecentBlog(){
		global $db;
		$query = " SELECT *
					FROM blogs
						ORDER BY auto DESC
					LIMIT 1
					";
		$results = $db->query($query);
		return $results;		
	}

	
?>