<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="projet_header page_header show-for-small-only">
	<div class="page_title">
		<?= $page->title()?>
	</div>
</div>
<main>
	<div class="content-inner default col-xs-15 col-sm-9 col-sm-offset-3 col-md-5 col-md-offset-4">
		<h1 class="hide-for-small-only"><?= $page->title()->html()?></h1>
		<?= $page->text()->kt()?>
	</div>
</main>

<?php snippet('footer') ?>
