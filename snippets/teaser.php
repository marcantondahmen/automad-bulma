<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="columns is-variable is-mobile is-2">
	<div class="column">
		<@ if @{ date } or @{ tags } @>
			<@ date_tags.php @>	
		<@ else @>
			<h1>@{ title }</h1>
		<@ end @>
	</div>
	<div class="column is-narrow">
		<@ prev_next.php @>
	</div>
</div>
<@ if @{ date } or @{ tags } @>
	<h1>@{ title }</h1>
<@ end @>
<div class="is-size-4">
	@{ textTeaser | markdown }
</div>