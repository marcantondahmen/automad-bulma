<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">		
			<div class="columns is-8 is-variable">
				<div class="column is-6">
					<div class="content">
						<@ snippets/teaser.php @>
						<br />
						@{ text | markdown }
					</div>	
				</div>
				<div class="column is-6">
					<hr class="is-hidden-tablet" />
					<@ newPagelist { 
						type: 'related',
						template: 'post',
						sort: 'date desc' 
					} @>
					<@ snippets/timeline.php @>
				</div>
			</div>
		</div>
	</section>
	
<@ snippets/footer.php @>