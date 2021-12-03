<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="row">
	<aside class="agence_cover col-xs-8 col-md-3 hide-for-small-only">
			<?php if($image = $page->cover()->toFile()):?>
					<figure>
	  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
	  			</figure>
			<?php endif; ?>
	</aside>
	<div class="agence_header page_header show-for-small-only">
		<div class="page_title">
			<?= $page->title()?>
		</div>
	</div>
	<main class="col-xs-15 col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-1">
		<h1 class="hide-for-small-only"><?= $page->title()->html()?></h1>
		<div class="agence_text-inner row">
			<div class="agence_text-inner_main col-xs-15 col-md-10">
				<div class="chapeau">
					<?= $page->chapeau()->kt()?>
				</div>
				<?= $page->text()->kt()?>
			</div>
			<aside class="agence_text-inner_aside no-padding-top col-xs-15 col-md-4 col-md-offset-1">
				<h3>Contact</h3>
				<?= $page->contact()->kt()?>
<!-- 				<h3>Publication</h3>
				<?= $page->publications()->kt()?> -->
			</aside>
			
		</div>
		
		<div class="agence_equipe">
			<h2>Les associés</h2>
			<ul class="agence_equipe-list row">
				<?php foreach($page->associes()->toStructure() as $person):?>
					<li class="col-xs-75 col-md-5">
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
			<h2>Paris</h2>
			<ul class="agence_equipe-list row">
				<?php foreach($page->paris()->toStructure() as $person):?>
					<li class="col-xs-75 col-md-5">
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
			<h2>Rennes</h2>
			<ul class="agence_equipe-list row">
				<?php foreach($page->rennes()->toStructure() as $person):?>
					<li class="col-xs-75 col-md-5">
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
		<div class="agence_publi">
			<h2>Publications</h2>
			<ul class="list-publications">
				<?php foreach($page->publications()->toStructure() as $publi):?>
					<li>
						<a href="<?= $publi->pdf()->toFile()->url()?>" title="<?= $publi->title()?>" target="_blank"><?= $publi->title()?></a>
							<?php if($image = $publi->cover()->toFile()):?>
								<figure>
				  				<img src="<?= $image->url() ?>" srcset="<?= $image->srcset([300, 800, 1024, 1440, 2048]) ?>" />
				  			</figure>
							<?php endif; ?>
					</li>
				<?php endforeach?>
			</ul>
		</div>
	</main>
</div>

<?php snippet('footer') ?>
