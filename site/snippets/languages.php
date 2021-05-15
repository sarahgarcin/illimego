
  <ul>
  	<?php foreach($kirby->languages() as $language): ?>
    <li <?php e($kirby->language() == $language, ' class="active"') ?>>
      <span class="select-btn">▼</span>
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?= html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
