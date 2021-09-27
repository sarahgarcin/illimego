<div class="filters hide-for-small-only">
	<?php $categories = $site->find('projets')->children()->listed();?>
	<ul>
		<?php foreach($categories as $category):?>
			<li class="not-active" data-filter=".<?= $category->uid()?>">
				<?= $category->title()?>
			</li>
		<?php endforeach ?>
	</ul>
</div>