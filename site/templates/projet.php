<?php snippet('header') ?>
<?php snippet('menu') ?>

	<!-- seulement pour MOBILE -->
	<div class="projet_header page_header show-for-small-only">
		<div class="page_title">
			<?= $page->parent()->parent()->title()?>
		</div>
		<!-- ça ne marche pas encore parce qu'il faut faire le prev / next sur toute la liste de projets ! -->
		<!-- collection listant tous les projets définie dans site>collections>projets.php-->
		<?php $projets = $kirby->collection("projets");?>
		<?php //print_r($projets)?>
		<?php if($prev=$page->prev($projets)): ?>
			<a href="<?=  $prev->url() ?>">Préc</a>
		<?php endif ?>

		<?php if($next=$page->next($projets)): ?>
			<a href="<?=  $next->url() ?>">Suiv</a>
		<?php endif ?>
	</div>
	<!-- fin MOBILE -->
	<div class="row">
		<!-- seulement pour DESKTOP -->
		<aside class="projet_text-projet col-xs-12 col-md-3 hide-for-small-only">
			<div class="projet_introduction-text">
				<?= $page->summary()->kt()?>
			</div>
			<div class="projet_text">
				<?= $page->text()->kt()?>
			</div>
			<?php if($page->infos()->isNotEmpty()):?>
				<div class="projet_infos-text">
					<h2>Infos projet</h2>
					<?= $page->infos()->kt()?>
				</div>
			<?php endif;?>
		</aside>
		<!-- fin DESKTOP -->
		<main class="col-xs-12 col-md-6">
			<h1><?= $page->title()?></h1>
			<div class="projet_introduction-text show-for-small-only">
				<?= $page->summary()->kt()?>
			</div>
			<?php if($page->hasImages()):?>
				<ul class="projet_images-gallery">
					<?php foreach($page->images() as $image):?>
						<?php if($image->isPortrait()):?>
							<?php $imageClass = "portrait"?>
						<?php else:?>
							<?php $imageClass = "landscape"?>
						<?php endif?>
						<figure class="<?= $imageClass?>">
		  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
		  			</figure>
					<?php endforeach ?>
				</ul>
			<?php endif; ?>
			<div class="projet_text show-for-small-only">
				<?= $page->text()->kt()?>
			</div>
			<?php if($page->infos()->isNotEmpty()):?>
				<div class="projet_infos-text show-for-small-only">
					<h2>Infos projet</h2>
					<?= $page->infos()->kt()?>
				</div>
			<?php endif;?>
			
		</main>
	</div>

<?php snippet('footer') ?>
