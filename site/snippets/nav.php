<div class="nav row col-md-12">
	<!-- Mobile nav -->
	<nav class="main-nav main-nav_mobile col-xs-12 show-for-small-only">
		<ul class="main-nav_first-level">
			<?php foreach($pages->listed() as $p): ?>
				<li class="<?= r($p->isOpen(), 'active') ?>">
	    		<?php if($p->hasChildren() && $p->intendedTemplate() == "projets"):?>
	        	<span><?= $p->title()->html() ?></span>
	        	<ul class="main-nav_submenu">
							<?php foreach($p->children()->listed() as $child): ?>
						  	<li>
						    	<!-- <a class="<?= r($child->isOpen(), 'active') ?>" href="<?= $child->url() ?>"> -->
						      	<span><?= $child->title()->html() ?></span>
						    	<!-- </a> -->
						    	<?php if($child->hasChildren()):?>
						    		<ul class="main-nav_sub-submenu">
											<?php foreach($child->children()->listed() as $projet): ?>
										  	<li>
										    	<a class="<?= r($projet->isOpen(), 'active') ?>" href="<?= $projet->url() ?>">
										      	<?= $projet->title()->html() ?>
										    	</a>
										  	</li>
										  <?php endforeach ?>
										</ul>
						    	<?php endif; ?>
						  	</li>
						  <?php endforeach ?>
						</ul>
	        <?php else: ?>
	        	<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        		<?= $p->title()->html() ?>
	        	</a>
	        <?php endif;?>
	      </li>
			<?php endforeach; ?>
		</ul>

	</nav>
	
	<!-- Desktop nav -->
	<nav class="main-nav main-nav_desktop col-xs-12 hide-for-small-only">
		<ul class="main-nav_first-level">
			<?php foreach($pages->listed() as $p): ?>
				<li class="<?= r($p->isOpen(), 'active') ?>">
					<a href="<?= $p->url()?>" title="<?= $p->title()?>">
	        	<?= $p->title()->html() ?>
	        </a>
	       </li>
			<?php endforeach; ?>
		</ul>
	</nav>

</div>



