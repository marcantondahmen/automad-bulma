<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>
	
	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">
			<div class="columns is-8 is-variable">
				<div class="column is-8 content">
					<@ snippets/teaser.php @>
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