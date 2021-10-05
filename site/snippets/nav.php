<div class="nav row col-md-15">
	<!-- Mobile nav -->
	<nav class="main-nav main-nav_mobile col-xs-15 show-for-small-only">
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
	
	<!-- Desktop nav -->
	<nav class="main-nav main-nav_desktop col-xs-15 hide-for-small-only">
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



