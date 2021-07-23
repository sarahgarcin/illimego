<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<ul class="list-projects list-projects_selected row col-xs-15 col-sm-11 col-sm-offset-2 col-md-8 col-md-offset-4">
		  <?php foreach ($page->projects()->split() as $project): ?>
		  	<li class="col-xs-15 col-sm-7 col-md-75">
		  		<?php $project = $site->find($project)?>
		  		<a href="<?= $project->url()?>" title="<?= $project->title()?>">
			  		<div class="list-project_thumbs">
			  			<?php $image = $project->cover()->toFile() ?>
			  			<figure>
			  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
			  			</figure>
			  		</div>
		  		</a>
		  		<div class="list-project_infos hide-for-small-only">
		  			<?= $project->title()?><br>
		  			<?= $project->year()?>
		  		</div>
		  		
		  	</li>
		  <?php endforeach ?>
		</ul>
	</main>

<?php snippet('footer') ?>
