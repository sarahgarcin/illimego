<?php snippet('header') ?>
<?php snippet('menu') ?>
	<div class="projet_header page_header show-for-small-only">
		<div class="page_title">
			<?= $page->title()?>
		</div>
	</div>
	<main>
		<div class="content-inner actualites col-xs-15 col-md-5 col-md-offset-4">
			<h1 class="hide-for-small-only"><?= $page->title()->html()?></h1>
			<?php $events = $page->children()->listed();?>
			<?php foreach($events as $child):?>
				<article class="actualite">
					<div class="actualite_title row between-xs bottom-xs">
						<h2><?= $child->title()->html()?></h2>
						<span class="actualite_date"><?= $child->datefield()->toDate("d/m/Y") ?></span>
					</div>
					<?php if($image = $child->cover()->toFile()):?>
						<figure class="actualite_cover cover">
			  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
			  			</figure>
					<?php endif;?>
					<div class="actualite_summary">
						<?= $child->summary()->kt()?>
					</div>
					<div class="actualite_content content-to-hide">
						<?= $child->text()->kt()?>
					</div>
					<div class="see-more">
						<span>En savoir plus</span>
					</div>
				</article>
			<?php endforeach;?>
		</div>
		</div>
		
		
	</main>

<?php snippet('footer') ?>
