<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="row">
	<main class="col-xs-15 col-sm-9 col-sm-offset-3 col-md-5 col-md-offset-4">
		<h1><?= $page->title()->html()?></h1>
		<?= $page->text()->kt()?>
	</main>
</div>

<?php snippet('footer') ?>
