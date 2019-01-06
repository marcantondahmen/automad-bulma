<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">			
			<div class="columns is-variable is-8 content">
				<@ if not @{ checkboxHideTeaser } @>
					<div class="column is-4">
						<h1>@{ title }</h1>
						<br />
						<div class="is-size-4">
							@{ textTeaser | markdown }
						</div>
						<br />
						@{ text | markdown }
					</div>
				<@ end @>
				<div class="column is-8">
					<@ newPagelist { 
						type: 'children',
						template: @{ templateFilter | def ('profile') }
					} @>
					<@ snippets/profiles.php @>
				</div>
			</div>
		</div>
	</section>
	
<@ snippets/footer.php @>