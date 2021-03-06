<?php
/**
 * @version     1.1
 * @package     mod_carousel
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Brad Traversy <support@joomdigi.com> - http://www.joomdigi.com
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<style>

</style>
 
 <div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner container">
    <?php foreach ($slideritems as $key => $item) {
      $active = ($key == 1)? " active" : ""; ?>
      <div class="item<?php echo $active; ?>">
        <div class="carousel-caption col-md-5 col-md-offset-1">
            <h1 class="carousel-title"><?php echo $item->heading; ?></h1>
            <?php if($item->text != "no") : ?>
            <p class="carousel-body"><?php echo $item->text; ?></p>
            <?php endif; ?>
            <?php if($item->show_read_more) : ?>
             <p><a class="btn btn-lg btn-primary" href="<?php echo $item->button_link; ?>" role="button"><?php echo $item->button_text; ?></a></p>
            <?php endif; ?>
        </div>
        <?php if($item->main_image) : ?>
          <div class="carousel-image col-md-6">
            <img class="server" src="<?php echo JURI::base(); ?><?php echo $item->main_image; ?>" alt="<?php echo $item->heading; ?>" />
          </div>
        <?php endif; ?>
      </div>
    <?php } ?>
  </div>

  <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
</div>
