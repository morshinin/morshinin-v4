<?php
  include 'language.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    
    <title><?php echo $data['head']['title']; ?></title>
  </head>
  <body>
    <header class="header">
        <div class="header__logo">Morshinin</div>
        <div class="header__lang">
          <?php if (!empty($_GET)) : ?>
          <?php if ($_GET['lang'] === 'en') : ?>
          <a class="header__link" href="/">Ru</a>
        <?php endif; ?>
          <?php else : ?>
          <a class="header__link" href="/?lang=en">En</a>
        <?php endif; ?>
        </div>
    </header> 
    <main>
      <section class="section-killer">
        <div class="killer">
        	<h1 class="killer__heading"><?php echo $data['killer']['title']; ?></h1>
          <p class="killer__description"><?php echo $data['killer']['description']; ?></p>
        </div>
      </section>
      <section class="section-portfolio">
        <header class="section-header">
          <h2 class="heading-2"><?php echo $data['section-headers']['portfolio']; ?></h2>
          <p class="section-description">
            <?php echo $data['section-descriptions']['portfolio']; ?>
          </p>
        </header>
        <?php $rowsCount = 0; ?>
        <?php $arrayChunk = array_chunk($data['projects'], 4); ?>
        <?php foreach ($arrayChunk as $items) { ?>
          <?php $rowsCount++; ?>
          <div class="row <?php if ($rowsCount > 2) echo 'u-hidden'; ?>">
            <?php foreach ($items as $project) { ?>
              <div class="col-1-of-4">
                <article class="card">
                    <div class="card__picture-box">
                      <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['alt']; ?>" class="card__img">
                      <div class="card__back">
                        <a href="<?php echo $project['siteUrl']; ?>" target="_blank" class="card__link" title="<?php echo $project['siteTitle']; ?>">
                          <span class="icon-new-tab"></span>
                        </a>
                        <?php if (!empty($project['gitUrl'])) { ?>
                        <a href="<?php echo $project['gitUrl']; ?>" target="_blank" class="card__link" title="<?php echo $project['gitTitle']; ?>">
                          <span class="icon-github"></span>
                        </a>
                        <?php } ?>
                      </div>
                    </div>
                    <h3 class="card__heading"><?php echo $project['title']; ?></h3>
                    <p class="card__description"><?php echo $project['desc']; ?></p>
                </article>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
        <div class="u-center-text">
          <a href="#0" id="loadBtn" class="btn btn--green"><?php echo $data['buttons']['load more']; ?></a>
        </div>
      </section>
      <section class="section-tech">
        <header class="section-header">
          <h2 class="heading-2"><?php echo $data['section-headers']['tech']; ?></h2>
        </header>
        <div class="row">
          <div class="feature-box">
            <div class="feature-box__part">
              <h3 class="feature-box__heading">
                <span>01</span>
                <?php echo $data['tech']['stack']['title']; ?>
              </h3>
              <ul class="feature-box__list">
                <?php 
                  foreach ($data['tech']['stack']['list'] as $item) {
                    ?>
                <li class="feature-box__list-item"><?php echo $item; ?></li>
                <?php
                  }
                 ?>
              </ul>
            </div>
            <div class="feature-box__part">
              <h3 class="feature-box__heading">
                <span>02</span>
                <?php echo $data['tech']['additional']['title']; ?>
              </h3>
              <ul class="feature-box__list">
                <?php 
                  foreach ($data['tech']['additional']['list'] as $item) {
                    ?>
                <li class="feature-box__list-item"><?php echo $item; ?></li>
                <?php
                  }
                 ?>
              </ul>
            </div>
            <div class="feature-box__part">
              <h3 class="feature-box__heading">
                <span>03</span>
                <?php echo $data['tech']['other']['title']; ?>
              </h3>
              <ul class="feature-box__list">
                <?php 
                  foreach ($data['tech']['other']['list'] as $item) {
                    ?>
                <li class="feature-box__list-item"><?php echo $item; ?></li>
                <?php
                  }
                 ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section-about">
        <header class="section-header">
          <h2 class="heading-2"><?php echo $data['section-headers']['about']; ?></h2>
          <p class="section-description">
            <?php echo $data['section-descriptions']['about']; ?>
          </p>
        </header>
        <div class="row">
          <div class="col-2-of-3">
            <div class="contact">
              <div class="contact__img">
                <img src="<?php echo $data['contact']['avatarUrl']; ?>" alt="<?php echo $data['contact']['avatarAlt']; ?>">
              </div>
              <div class="contact__content">
                <h3 class="contact__heading">
                  <?php echo $data['contact']['name']; ?>
                </h3>
                <p class="contact__subheading">
                  <?php echo $data['contact']['occupation']; ?>
                </p>
                <ul class="contact__contact">
                  <li>E: <a href="mailto:<?php echo $data['contact']['email']; ?>"><?php echo $data['contact']['email']; ?></a></li>
                  <li>T: <a href="tel:<?php echo $data['contact']['phone_link']; ?>"><?php echo $data['contact']['phone']; ?></a></li>
                </ul>
                <div class="social">
                  <a href="http://t.me/mmorshinin" class="contact__icon-link"><span class="icon-telegram"></span></a>
                  <a href="https://github.com/morshinin" class="contact__icon-link"><span class="icon-github"></span></a>
                  <a href="https://ru.stackoverflow.com/users/277786/morshinin" class="contact__icon-link"><span class="icon-stackoverflow"></span></a>
                  <a href="https://codepen.io/Sunisshiningeveryday/" class="contact__icon-link"><span class="icon-codepen"></span></a>
                  <a href="https://vk.com/mikhailmorshinin" class="contact__icon-link"><span class="icon-vk"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__copyright">
        <?php echo $data['footer']['copyright']; ?>
      </div>
    </footer>
    <script src="js/main.js"></script>
  </body>
</html>