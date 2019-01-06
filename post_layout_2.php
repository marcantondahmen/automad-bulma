<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/navbar.php @>
	<section class="section">
		<div class="container">
			<div class="columns is-8 is-variable">
				<div class="column is-6">
					<div class="content">
						<@ snippets/teaser.php @>
						<br />
						@{ text | markdown }
						<br />
						<hr />
						<@ newPagelist { 
							type: 'related',
							template: 'post',
							sort: 'date desc' 
						} @>
						<@ snippets/timeline.php @>
					</div>	
				</div>
				<div class="column is-6">
					<div class="content">
						<@ filelist { glob: @{ images | def('*.jpg, *.png') }, sort: 'asc' } @>
						<@ foreach in filelist { width: 1000 } @>
							<img src="@{ :fileResized }" alt="@{ :basename }" />
							@{ :caption | markdown }
						<@ end @>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<@ snippets/footer.php @>