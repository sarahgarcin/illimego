<!-- footer mobile -->
<footer class="mobile-footer show-for-small-only">
  <div class="lower-right-text">
    <?= $site->lefttext()?>
  </div>
</footer>

<footer class="desktop-footer hide-for-small-only">
  <div class="inner-footer">
    <div class="lower-left-text">
      <?= $site->lefttext()?>
    </div>
    <div class="lower-right-text">
      <?= $site->righttext()?>
    </div>
    <?php snippet('languages')?>
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
