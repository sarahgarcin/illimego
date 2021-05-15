<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="row">
	<main class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
		<h1><?= $page->title()->html()?></h1>
		<?= $page->text()->kt()?>
	</main>
</div>

<?php snippet('footer') ?>
