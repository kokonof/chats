<?php

	include_once('functions.php');
	$articles = getArticles();

//    var_dump($_SESSION['email']);
?>
<a href="add.php">Add article</a>
<hr>
<div class="articles">
	<? foreach($articles as $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="article.php?id=<?=$article['id']?>">Read more</a>
		</div>
	<? endforeach; ?>
</div>
