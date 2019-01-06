<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ foreach in pagelist @>
	<hr<@ if @{ :i } = 1 @> class="is-hidden-tablet"<@ end @> />
	<div class="columns is-variable is-3 is-mobile">
		<div class="column is-3">
			<@ with @{ imageProfile } { width: 200, height: 200, crop: true } @>
			<a href="@{ url }">
				<img src="@{ :fileResized }" alt="@{ :basename }">
			</a>	
			<@ end @>
		</div>
		<div class="column is-9">
			<h4>@{ title }</h4>
			@{ textContact | markdown }
			<p><@ snippets/more.php @></p>
		</div>
	</div>
<@ end @>