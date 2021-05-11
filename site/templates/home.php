<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main>
		<ul class="list-projects list-projects_selected row col-xs-12 col-md-7 col-md-offset-3">
		  <?php foreach ($page->projects()->split() as $project): ?>
		  	<li class="col-xs-12 col-sm-6">
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
