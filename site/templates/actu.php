<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="projet_header page_header show-for-small-only">
	<div class="page_title">
		<?= $page->title()?>
	</div>
</div>

<main>
	<div class="content-inner actu col-xs-15 col-sm-9 col-sm-offset-3 col-md-5 col-md-offset-4">
		<h1 class="hide-for-small-only"><?= $page->title()->html()?></h1>
		<p class="actualite_date"><?= $page->datefield()->toDate("d/m/Y") ?></p>
		
		<?php if($image = $page->cover()->toFile()):?>
			<figure class="actualite_cover cover">
  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
  			</figure>
		<?php endif;?>
		<div class="actualite_summary">
			<?= $page->summary()->kt()?>
		</div>
		<div class="actualite_content content-to-hide">
			<?= $page->text()->kt()?>
		</div>
		<?php foreach($page->link()->toStructure() as $link):?>
			<div class="see-more">
				<span><a href="<?= $link->url()?>" title="<?= $link->text()?>" target="_blank"><?= $link->text()?></a></span>
				<!-- <span>En savoir plus</span> -->
			</div>
		<?php endforeach ?>
	</div>
		
		
</main>
	
<?php snippet('footer') ?>
