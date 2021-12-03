<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="projet_header page_header show-for-small-only">
	<div class="page_title">
		<?= $page->title()?>
	</div>
</div>

<div class="row">
	<main class="projets_main col-xs-15 col-sm-11 col-sm-offset-2 col-md-8 col-md-offset-4">
		<h1 class="hide-for-small-only"><?= $page->title()->html()?></h1>
		<ul class="list-projects list-projects_template row">
		  <?php foreach ($page->children()->listed() as $project): ?>
		  	<li class="col-xs-15 col-sm-7 col-md-75 <?php echo $project->parent()->uid()?>" data-project="<?= $project->uid()?>">
		  		<a href="<?= $project->url()?>" title="<?= $project->title()?>">
			  		<?php if($image = $project->cover()->toFile()): ?>
				  		<div class="list-project_thumbs">
				  			<figure>
				  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
				  			</figure>
				  		</div>
				  	<?php endif;?>
		  		</a>
		  		<div class="list-project_infos">
		  			<?= $project->title()?>
		  			<div class="date-place">
		 					<?php if($project->year()->isNotEmpty()):?>
		 						<?= $project->year()?>
		 					<?php endif?>
		 					<?php if($project->year()->isNotEmpty() && $project->place()->isNotEmpty()):?>
		 						—
		 					<?php endif?>
		 					<?php if($project->place()->isNotEmpty()):?>
		 						<?= $project->place()?>
		 					<?php endif?>

		 				</div>
		  		</div>
		  		
		  	</li>
		  <?php endforeach ?>
		</ul>
		
	</main>
</div>

<?php snippet('footer') ?>
