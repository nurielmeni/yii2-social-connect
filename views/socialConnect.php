<section id="<?= empty($name) ? 'social-icons' : $name ?>" class="social-icons <?= $cssClass ?>">
	<ul>
		<?php foreach ($items as $social => $item) : ?>
			<li>
				<a class="dt-icons-selector" href="<?= $item['url'] ?>" rel="noopener" target="_blank">
					<i style="<?= empty($size) ? "" : "font-size: $size; " ?><?= empty($color) ? "" : "color: $color; " ?>" class=" dt-icon-<?= $social ?>"></i>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>