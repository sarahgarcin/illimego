<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="projet_header page_header show-for-small-only">
	<div class="page_title">
		<?= $page->title()?>
	</div>
</div>
<main>
	<div class="content-inner default col-xs-15 col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-4">
		<h1 class="hide-for-small-only"><?= $page->title()->html()?></h1>
		<?= $page->text()->kt()?>
		<div class="tetris row hide-for-small-only">
			<div class="tetris-grid-wrapper col-xs-15 col-md-5">
				<div id='js-tetris' class='tetris-grid' data-component='grid'></div>
			</div>
			
			<div class="tetris-meta-wrapper col-xs-15 col-md-7">
				<div id='js-event-counter' class='event-counter'>0</div>
				<div id='js-score' class='score'>0</div>
				<div id='js-level' class='level'>0</div>
				<div id='js-next-piece' class='preview-cells'></div>
				<div class="controls">
					<p>
						Espace pour faire pivoter <br>
						Bas pour descendre <br>
						Gauche et droite pour bouger
					</p>
				</div>
					
			</div>
		</div>
	</div>
</main>


<?php echo js('assets/js/tetris.js');?>
<?php snippet('footer') ?>
