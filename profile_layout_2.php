<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>

	<@ snippets/hero.php @>
	<section class="section">
		<div class="container content">			
			<div class="columns is-variable is-8">	
				<div class="column is-4">
					<@ with @{ imageProfile } { width: 400 } @>
						<img src="@{ :fileResized }" alt="@{ :basename }">
					<@ end @>
				</div>
				<div class="column is-8">
					<h1>@{ title }</h1>
					<@ if @{ textContact} @>
						@{ textContact | markdown }
						<br />
					<@ end @>
					<div class="is-size-4">
						@{ textTeaser | markdown }
					</div>
					<br />
					@{ text | markdown }
				</div>
			</div>
			<br />
			<@ newPagelist {
				type: 'siblings',
				excludeCurrent: true,
				template: @{ templateFilter | def ('profile') }
			} @>
			<@ if @{ :pagelistCount } @>
				<hr class="is-hidden-mobile" />
				<div class="columns">
					<div class="column is-8">
						<@ snippets/profiles.php @>
					</div>
				</div>
			<@ end @>
		</div>
	</section>
	
<@ snippets/footer.php @>