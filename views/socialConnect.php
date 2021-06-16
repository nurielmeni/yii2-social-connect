<section id="<?= empty($name) ? 'social-icons' : $name ?>" class="social-icons <?= $cssClass ?>">
	<ul>
		<?php foreach ($items as $social => $item) : ?>
			<li>
				<a class="dt-icons-selector" href="<?= $itme['url'] ?>" rel="noopener" target="_blank">
					<i class="dt-icon-<?= $social ?>"></i>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</section>