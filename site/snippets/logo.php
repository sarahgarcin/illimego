<!-- MOBILE LOGO -->
<div class="mobile-menu show-for-small-only">
	<div class="mobile-menu_logo">
		<a href="<?= $site->url()?>" title="<?= $site->title()?>">
			<?php if($image = $site->logo()->toFile()): ?>
			<img src="<?= $image->url()?>" alt="<?= $image->alt()?>">
		<?php endif;?>
		</a>
	</div>
	<div class="mobile-menu_title">
		<h1><?= $site->title() ?></h1>
	</div>
	<div class="mobile-menu_btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>

<!-- DESKTOP LOGO -->
<div class="desktop-menu hide-for-small-only row between-md">
	<div class="desktop-menu_logo col-md-3">
		<a href="<?= $site->url()?>" title="<?= $site->title()?>">
			<?php if($image = $site->logo()->toFile()): ?>
				<figure>
					<img src="<?= $image->url()?>" alt="<?= $image->alt()?>">
				</figure>
			<?php endif;?>
		</a>
	</div>
	<div class="desktop-menu_nav col-md-3 row end-md">
		<div class="mobile-menu_btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="mobile-menu_title">
			<h1><?= $site->title() ?></h1>
		</div>
	</div>
	
</div>