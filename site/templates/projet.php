<?php snippet('header') ?>
<?php snippet('menu') ?>

	<!-- seulement pour MOBILE -->
	<div class="projet_header page_header show-for-small-only row between-xs">
		<div class="page_title">
			<?= $page->parent()->parent()->title()?>
		</div>
		<!-- collection listant tous les projets définie dans site>collections>projets.php-->
		<?php $projets = $kirby->collection("projets");?>
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
			</div>
			<div class="projet_text">
				<?= $page->text()->kt()?>
			</div>
			<span class="see-more hide-for-small-only">
				En savoir plus
			</span>
			<?php if($page->infos()->isNotEmpty()):?>
				<div class="projet_infos-text">
					<h2>Infos projet</h2>
					<?= $page->infos()->kt()?>
				</div>
			<?php endif;?>
		</aside>
		<!-- fin DESKTOP -->
		<main class="projet_main projet_text-projet col-xs-15 col-sm-9 col-sm-offset-3 col-md-8">
			<h1><?= $page->title()?></h1>
			<?php if($page->hasImages()):?>
				<ul class="projet_images-gallery photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
					<?php foreach($page->images()->sortBy('sort') as $image):?>
						<?php if($image->isPortrait()):?>
							<?php $imageClass = "portrait"?>
						<?php else:?>
							<?php $imageClass = "landscape"?>
						<?php endif?>
						<figure class="<?= $imageClass?>" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-image="<?= $image->thumb(['width'=> 300, 'quality' => 80])->url(); ?>">
							<a href="<?= $image->url() ?>" class="gallery" title="<?= $image->caption() ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>">
		  					<img src="<?= $image->url();?>" alt="<?= $image->alt() ?>" itemprop="thumbnail"/>
		  				</a>
		  				<?php if($image->caption()->isNotEmpty()):?>
								<figcaption itemprop="caption description"><?= $image->caption()->kt()?></figcaption>
							<?php endif; ?>
		  			</figure>
					<?php endforeach ?>
				</ul>
			<?php endif; ?>
			<div class="projet_introduction-text show-for-small-only">
				<?= $page->summary()->kt()?>
			</div>
			<div class="projet_text show-for-small-only">
				<?= $page->text()->kt()?>
			</div>
			<span class="see-more show-for-small-only">
				En savoir plus
			</span>
			<?php if($page->infos()->isNotEmpty()):?>
				<div class="projet_infos-text show-for-small-only">
					<h2>Infos projet</h2>
					<?= $page->infos()->kt()?>
				</div>
			<?php endif;?>

			<div class="prev_nex-nav hide-for-small-only">
				<?php if ($projets->isNotEmpty()) : ?>
				  <?php if ($prevPage = $page->getPrev($projets)) : ?>
				      <a href="<?= $prevPage->url() ?>">← Précédent</a>
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
