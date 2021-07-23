<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php $projects = $kirby->collection("projets");?>
<div class="projet_header page_header show-for-small-only">
	<div class="page_title">
		<?= $page->title()?>
	</div>
</div>

<div class="row">
	<aside class="list-projects_text col-xs-15 col-md-4 hide-for-small-only">
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
	<main class="projets_main col-xs-15 col-sm-11 col-sm-offset-2 col-md-8">
		<h1 class="hide-for-small-only"><?= $page->title()->html()?></h1>
		<ul class="list-projects list-projects_template row">
		  <?php foreach ($projects as $project): ?>
		  	<li class="col-xs-15 col-sm-7 col-md-75 <?php echo $project->parent()->uid()?>">
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
