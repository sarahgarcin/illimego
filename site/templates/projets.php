<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php $projects = $kirby->collection("projets");?>

<div class="row">
	<aside class="list-projects_text col-xs-12 col-md-3">
			<ul>
		 <?php foreach ($projects as $project): ?>
		 		<li>
		 			<a href="<?= $project->url()?>" title="<?= $project->title()?>">
		 				<?= $project->title()?>
		 			</a>
		 		</li>
		 <?php endforeach?>	
		 </ul>
	</aside>
	<main class="col-xs-12 col-md-6">
		<h1><?= $page->title()->html()?></h1>
		<ul class="list-projects list-projects_template row">
		  <?php foreach ($projects as $project): ?>
		  	<li class="col-xs-12 col-sm-6 <?php echo $project->parent()->uid()?>">
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
</div>

<?php snippet('footer') ?>
