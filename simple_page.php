<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">			
			<div class="columns is-variable is-8">
				<div class="column is-8 content">
					<@ snippets/teaser.php @>
					<br />
					@{ text | markdown }
				</div>	
				<div class="column is-4">
					<hr class="is-hidden-tablet" />
					<@ snippets/menu.php @>
				</div>
			</div>
		</div>
	</section>
	
<@ snippets/footer.php @>