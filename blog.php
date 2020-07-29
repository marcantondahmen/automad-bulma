<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/hero.php @>	
	<@ newPagelist { 
		filter: @{ ?filter },
		search: @{ ?search },
		template: @{ templateFilter },
		sort: 'date desc'
	} @>
	<section class="section">
		<div class="container">	
			<div class="columns is-8 is-variable">
				<div class="column is-4">
					<div class="content">
						<h1>@{ title }</h1>
						<div class="is-size-4">
							@{ textTeaser | markdown }
						</div>
						<br />
						@{ text | markdown }
					</div>	
				</div>
				<div class="column is-8">
					<@ snippets/filters.php @>
					<br>
					<@ snippets/timeline.php @>
				</div>
			</div>
		</div>
	</section>
	
<@ snippets/footer.php @>