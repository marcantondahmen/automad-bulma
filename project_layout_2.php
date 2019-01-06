<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>
	
	<@ set { ":heroTitle": true } @>
	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">
			<div class="columns is-8 is-variable">
				<div class="column is-8 content">
					<div class="is-size-4">
						@{ textTeaser | markdown }
					</div>
					<br />
					@{ text | markdown }
				</div>	
			</div>
			<br />
		</div>
		<@ newPagelist {
			type: 'related',
			sort: @{ sortPages },
			template: @{ templateFilter }
		} @>
		<@ snippets/pagelist.php @>
	</section>
	
<@ snippets/footer.php @>