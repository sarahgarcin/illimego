<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="row">
	<aside class="agence_cover col-xs-4 col-md-2">
			<?php if($image = $page->cover()->toFile()):?>
					<figure>
	  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
	  			</figure>
			<?php endif; ?>
	</aside>
	<main class="col-xs-12 col-md-6 col-md-offset-1">
		<h1><?= $page->title()->html()?></h1>
		<div class="agence_text-inner row">
			<div class="agence_text-inner_main col-xs-12 col-md-8">
				<?= $page->text()->kt()?>
			</div>
			<aside class="agence_text-inner_aside no-padding-top col-xs-12 col-md-4">
				<h3>Contact</h3>
				<?= $page->contact()->kt()?>
				<h3>Publication</h3>
				<?= $page->publications()->kt()?>
			</aside>
			
		</div>
		
		<div class="agence_equipe">
			<h2>L’équipe</h2>
			<ul class="agence_equipe-list row">
				<?php foreach($page->equipe()->toStructure() as $person):?>
					<li class="col-xs-6 col-md-4">
						<?php if($image = $person->cover()->toFile()):?>
							<figure>
			  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
			  			</figure>
						<?php endif; ?>
						<h3><?= $person->name()?></h3>
						<div class="role"><?= $person->role()->kt()?></div>
						<div class="diplome"><?= $person->diplome()->kt()?></div>
					</li>
				<?php endforeach?>
			</ul>

		</div>
	</main>
</div>

<?php snippet('footer') ?>
