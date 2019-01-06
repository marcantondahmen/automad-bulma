<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ newPagelist { type: 'siblings' } @>
<@ if @{ :pagelistCount } @>
	<@ with prev @>
		<a href="@{ url }" class="button is-light is-small" title="@{ title }">
			<span class="icon is-small">
				<i class="fas fa-angle-left" aria-hidden="true"></i>
			</span>
		</a>
	<@ end @>
	<@ with next @>
		<a href="@{ url }" class="button is-light is-small" title="@{ title }">
			<@ if @{ labelNext } @>
				<span>@{ labelNext }</span>
			<@ end @>
			<span class="icon is-small">
				<i class="fas fa-angle-right" aria-hidden="true"></i>
			</span>
		</a>
	<@ end @>
<@ end @>