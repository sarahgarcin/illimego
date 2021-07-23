<?php snippet('header') ?>
<?php snippet('menu') ?>

	<!-- seulement pour MOBILE -->
	<div class="projet_header page_header show-for-small-only row between-xs">
		<div class="page_title">
			<?= $page->parent()->parent()->title()?>
		</div>
		<!-- ça ne marche pas encore parce qu'il faut faire le prev / next sur toute la liste de projets ! -->
		<!-- collection listant tous les projets définie dans site>collections>projets.php-->
		<?php $projets = $kirby->collection("projets");?>
		<?php //print_r($projets)?>
		<!-- <?php if($prev=$page->prev($projets)): ?>
			<a href="<?=  $prev->url() ?>">Préc</a>
		<?php endif ?>

		<?php if($next=$page->next($projets)): ?>
			<a href="<?=  $next->url() ?>">Suiv</a>
		<?php endif ?> -->
		<div class="prev_nex-nav">
				<?php if ($projets->isNotEmpty()) : ?>
				  <?php if ($prevPage = $page->getPrev($projets)) : ?>
				      <a href="<?= $prevPage->url() ?>">Préc</a>
				  <?php endif ?>

				  <?php if ($nextPage = $page->getNext($projets)) : ?>
				      <a href="<?= $nextPage->url() ?>">Suiv</a>
				  <?php endif ?>
				<?php endif ?>			
			</div>
	</div>
	<!-- fin MOBILE -->
	<div class="row">
		<!-- seulement pour DESKTOP -->
		<aside class="projet_text-projet col-xs-15 col-md-4 hide-for-small-only">
			<div class="projet_introduction-text">
				<?= $page->summary()->kt()?>
				<span class="see-more hide-for-small-only">
					En savoir plus
				</span>
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
		<main class="col-xs-15 col-md-8">
			<h1><?= $page->title()?></h1>
			<div class="projet_introduction-text show-for-small-only">
				<?= $page->summary()->kt()?>
			</div>
			<?php if($page->hasImages()):?>
				<ul class="projet_images-gallery photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
					<?php foreach($page->images() as $image):?>
						<?php if($image->isPortrait()):?>
							<?php $imageClass = "portrait"?>
						<?php else:?>
							<?php $imageClass = "landscape"?>
						<?php endif?>
						<figure class="<?= $imageClass?>" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-image="<?= $image->thumb(['width'=> 300, 'quality' => 80])->url(); ?>">
							<a href="<?= $image->url() ?>" class="gallery" title="<?= $image->caption() ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>">
		  					<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" alt="<?= $image->alt() ?>" itemprop="thumbnail"/>
		  				</a>
		  				<?php if($image->caption()->isNotEmpty()):?>
								<figcaption itemprop="caption description"><?= $image->caption()->kt()?></figcaption>
							<?php endif; ?>
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

			<div class="prev_nex-nav hide-for-small-only">
				<?php if ($projets->isNotEmpty()) : ?>
				  <?php if ($prevPage = $page->getPrev($projets)) : ?>
				      <a href="<?= $prevPage->url() ?>">← Précédant</a>
				  <?php endif ?>

				  <?php if ($nextPage = $page->getNext($projets)) : ?>
				      <a href="<?= $nextPage->url() ?>">Suivant →</a>
				  <?php endif ?>
				<?php endif ?>			
			</div>
			
		</main>
	</div>

<?php snippet('photoswipe'); ?>
<?php snippet('footer') ?>
