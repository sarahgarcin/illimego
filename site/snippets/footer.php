<!-- footer mobile -->
<!-- <footer class="mobile-footer show-for-small-only">
  <div class="lower-right-text">
    <?= $site->lefttext()?>
  </div>
</footer> -->
<!--  hide-for-small-only -->
<footer>
  <div class="inner-footer row bottom-xs">
    <div class="lower-left-text col-xs-75 col-md-4">
      <?= $site->lefttext()?>
    </div>
    <div class="footer_right-part col-xs-75 col-md-2 col-md-offset-9 row bottom-xs">
      <nav class="languages col-xs-8 show-for-small-only">
        <?php snippet('languages')?>
      </nav>
      <div class="widgets col-xs-7 col-md-75">
        <ul class="row between-xs">
          <li class="mentions">
            <a href="<?= $site->find('mentions-legales')->url()?>" title="<?= $site->find('mentions-legales')->title()?>">
              <span title="mentions-legales" class="icon icon-mentions"></span>
            </a>
          </li>
          <li class="toogle-light">
            <span title="toogle light" class="icon icon-light"></span>
          </li>
          <li class="social">
            <span title="social-networks" class="icon icon-social"></span>
            <ul class="list-social-networks">
              <?php foreach($site->socialnetworks()->toStructure() as $social):?>
                <li><a href="<?php echo $social->link()?>" title="<?php echo $social->title()?>" target="_blank"><span title="social-icon" class="icon <?php echo $social->title()?>"></span></a></li>
              <?php endforeach ?>
            </ul>
          </li>
        </ul>
      </div>
      <div class="lower-right-text hide-for-small-only">
        <p><?= $site->righttext()?></p>
      </div>
    </div>
  </div>
  
</footer>

  <!-- scripts -->
  <?php

    if ( option('environment') == 'local' ) :
      foreach ( option('julien-gargot.assets.scripts', array()) as $style):
        echo js($style.'?version='.md5(uniqid(rand(), true)));
      endforeach;
    else:
      echo js('assets/production/all.min.js');
    endif
  ?>

</body>
</html>
