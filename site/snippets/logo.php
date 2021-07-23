<!-- MOBILE LOGO -->
<div class="mobile-menu show-for-small-only row">
	<div class="mobile-menu_logo col-xs-75">
		<div class="mobile-menu_logo_inner">
			<a href="<?= $site->url()?>" title="<?= $site->title()?>">
				<?php if($image = $site->logo()->toFile()): ?>
				<img src="<?= $image->url()?>" alt="<?= $image->alt()?>">
			<?php endif;?>
			</a>
		</div>
	</div>
	<div class="mobile-menu_wrapper row col-xs-75">
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

<!-- DESKTOP LOGO -->
<div class="desktop-menu hide-for-small-only row between-md">
	<div class="desktop-menu_logo col-md-4">
		<a href="<?= $site->url()?>" title="<?= $site->title()?>">
			<?php if($image = $site->logo()->toFile()): ?>
				<figure>
					<img src="<?= $image->url()?>" alt="<?= $image->alt()?>">
				</figure>
			<?php endif;?>
		</a>
	</div>
	<div class="desktop-menu_nav col-md-2 col-md-offset-1 row">
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


<div class="grid row">
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>	
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>	
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>	
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
	<div class="col-xs-1"></div>
</div>