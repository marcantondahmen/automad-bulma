<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ if @{ date } or @{ tags } @>
	<p>
		<@ if @{ date } @>
			<strong <@ if @{ :color } @>class="@{ :color }"<@ end @>><@ date.php @></strong>
			<@ if @{ tags } @>
				&nbsp;&ndash;&nbsp;
			<@ end @>
		<@ end @>
		<@ tags.php @>
	</p>
<@ end @>