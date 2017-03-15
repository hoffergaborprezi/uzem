<?php

// main menu items
$items = $pages->visible()->not('Home');

// only show the menu if items are available
if($items->count() > 0):

?>
<nav>
  <ul>
    <?php foreach($pages->visible() as $item): ?>
    <li><a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>