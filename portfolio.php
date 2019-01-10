<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>
	
	<@ snippets/hero.php @>
	<@ newPagelist {
		type: 'children',
		context: @{ showPagesBelow },
		filter: @{ ?filter },
		search: @{ ?search },
		sort: @{ sortPages | def ('date desc') },
		template: @{ templateFilter }
	} @>
	<@ if @{ checkboxShowAllPagesInPagelist } or @{ ?search } @>
		<@ pagelist { type: false } @>
	<@ end @>
	<section class="section">
		<@ if not @{ checkboxHideTeaser } @>
			<div class="container content">
				<div class="columns">
					<div class="column is-8">
						<h1>@{ title }</h1>
						<div class="is-size-4">
							@{ textTeaser | markdown }
						</div>
					</div>
				</div>
			</div>
		<@ end @>
		<div class="container content">
			<@ snippets/filters.php @>
		</div>	
		<@ snippets/pagelist.php @>
	</section>
	
<@ snippets/footer.php @>