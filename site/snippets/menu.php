<header role="banner" class="row">
	<?php snippet('logo')?>
	<div class="header-right col-xs-15 col-md-2 col-md-offset-13">
		<?php snippet('nav')?>
		<nav class="languages col-md-15 hide-for-small-only">
  		<?php snippet('languages')?>
		</nav>
		<?php if($page->intendedTemplate() == "projets"):?>
			<?php snippet('categories')?>
		<?php endif; ?>
	</div>

</header>

