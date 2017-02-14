<?php
include 'php/articles_parser.php';
include 'php/events_parser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>3B Digital</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body class="body">
<div class="site-wrapper">
  <header class="header">
    <div class="header__inner-wrapper">
      <h1 class="header__title">
        <img src="http://placehold.it/60x60">
      </h1>
    </div>
  </header>
  <main class="main">
    <section class="main__inner-wrapper">
      <div class="main__title-wrapper">
        <h2 class="title main--title">
          Articles
        </h2>
      </div>
      <div class="content">
        <?php for ($i = 0; $i < count($json_articles); ++$i): ?>
          <div class="card" data-mh="card">
            <h3 data-mh="card-title" class="card__title">
              <?php print $json_articles[$i]['title']; ?>
            </h3>
            <div class="card__media">
              <img src="../images/image-test.png" class="card__image">
            </div>
            <div class="card__content">
              <?php print strip_tags(substr($json_articles[$i]['content'], 0, 100)) . '...'; ?>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </section>
    <aside class="col">
      <div class="col__inner-wrapper">
        <div class="col__title-wrapper">
          <h2 class="title col--title">
            Events
          </h2>
        </div>
        <?php for ($i = 0; $i < count($json_articles); ++$i): ?>
          <div class="card__col">
            <h3 class="card__title-col">
              <?php print $json_events[$i]['title']; ?>
            </h3>
            <div class="card__content">
              <div class="location">
                <a href="https://www.google.com/maps/place/<?php print $json_events[$i]['geo']['lat']. ',' . $json_events[$i]['geo']['lng']; ?>" target="_blank">
                  <span class="data-header">Location:</span> <?php print $json_events[$i]['location']; ?>
                </a>
              </div>
              <div class="date">
                <span class="data-header">Date:</span> <?php print $json_events[$i]['date']; ?>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </aside>
  </main>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/lib/jquery.matchHeight.js"></script>
</body>
</html>
