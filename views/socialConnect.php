<section id="<?= empty($name) ? 'social-icons' : $name ?>" class="social-icons <?= $cssClass ?>">
	<ul>
		<?php foreach ($items as $item) : ?>
			<li>
				<a class="dt-icons-selector" href="<?= $itme['url'] ?>" rel="noopener" target="_blank">
					<i class="dt-icon-<?= $itme['social'] ?>"></i>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>