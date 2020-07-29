<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>
	
	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">
			<div class="content center">
				<section><@ snippets/title.php @></section>
				@{ +main }	
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