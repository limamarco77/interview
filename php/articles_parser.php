<?php
$json_articles_file = file_get_contents('data/articles.json');
$json_articles = json_decode($json_articles_file, true);
