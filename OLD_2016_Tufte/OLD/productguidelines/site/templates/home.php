<?php snippet('header') ?>

        <div class="content">
          <?php snippet('submenu') ?>
          <div class="text">
            <?php echo $page->text()->kirbytext() ?>
          </div>
        </div>

<?php snippet('footer') ?>