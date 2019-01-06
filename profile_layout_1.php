<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/hero.php @>
	<section class="section">
		<div class="container">			
			<div class="columns is-variable is-8">
				<div class="column is-8 content">
					<div class="columns is-variable is-8">
						<div class="column is-4">
							<@ with @{ imageProfile } { width: 240, height: 240, crop: true } @>
								<img src="@{ :fileResized }" alt="@{ :basename }">
							<@ end @>
						</div>
						<div class="column is-8">
							<h1>@{ title }</h1>
							@{ textContact | markdown }
						</div>
					</div>
					<br />
					<div class="is-size-4">
						@{ textTeaser | markdown }
					</div>
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