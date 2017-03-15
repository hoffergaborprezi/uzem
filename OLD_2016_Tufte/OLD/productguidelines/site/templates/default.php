<?php snippet('header') ?>

        <div class="content">
          <?php snippet('submenu') ?>
          <div class="text">
	        <h1><?php echo $page->title()->html() ?></h1>
            <h2><?php echo $page->short()->kirbytext() ?></h2>
            <?php echo $page->text()->kirbytext() ?>
            <?php echo "<hr>".$page->cheatsheet()->kirbytext() ?>
            <?php echo "<hr>".$page->sketchfile()->kirbytext() ?>
          </div>
        </div>

<?php snippet('footer') ?>