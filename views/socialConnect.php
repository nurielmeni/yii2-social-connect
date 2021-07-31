<section id="<?= empty($name) ? 'social-icons' : $name ?>" class="social-icons <?= $cssClass ?>">
	<ul>
		<?php foreach ($items as $social => $item) : ?>
			<li>
				<a class="dt-icons-selector <?= $linkClass ?>" href="<?= $item['url'] ?>" rel="noopener" title="<?= $title ?>" target="_blank">
					<?php if ($image) : ?>
						<img src="<?= $path->baseUrl . '/assets/images/' . $social . '.svg' ?>" width="<?= $size ?>" alt="<?= $social ?> icon" class=" dt-icon-<?= $social ?>">
					<?php else : ?>
						<i style="<?= empty($size) ? "" : "font-size: $size; " ?><?= empty($color) ? "" : "color: $color; " ?>" ></i>
					<?php endif; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>