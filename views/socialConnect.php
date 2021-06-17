<section id="<?= empty($name) ? 'social-icons' : $name ?>" class="social-icons <?= $cssClass ?>">
	<ul>
		<?php foreach ($items as $social => $item) : ?>
			<li>
				<a class="dt-icons-selector <?= $linkClass ?>" href="<?= $item['url'] ?>" rel="noopener" title="<?= $title ?>" target="_blank">
					<i style="<?= empty($size) ? "" : "font-size: $size; " ?><?= empty($color) ? "" : "color: $color; " ?>" class=" dt-icon-<?= $social ?>"></i>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>