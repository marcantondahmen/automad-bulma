<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>
	
	<@ snippets/navbar.php @>
	<section class="section">
		<div class="container">
			<div class="columns is-8 is-variable">
				<div class="column is-6 content">
					<@ snippets/teaser.php @>
					<br />
					@{ text | markdown }
				</div>
				<div class="column is-6">
					<div class="content">
						<@ filelist { glob: @{ images | def ('*.jpg, *.png') }, sort: 'asc' } @>
						<@ foreach in filelist { width: 1000 } @>
							<img src="@{ :fileResized }" alt="@{ :basename }" />
							@{ :caption | markdown }
						<@ end @>
					</div>
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