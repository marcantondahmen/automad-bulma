<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippet menu @>
	<@ if @{ :pagelistCount } @>
		<ul<@ if @{ :level } = 0 @> class="menu-list"<@ end @>>
			<@ foreach in pagelist @>
				<@ if @{ :currentPath } or @{ :level } > 1 @>
					<li>
						<a href="@{ url }"<@ if @{ :current } @> class="is-active has-background-light has-text-dark"<@ end @>>
							@{ title }
						</a>
						<@ if @{ :currentPath } @>
							<@ menu @>
						<@ end @>
					</li>
				<@ end @>
			<@ end @>
		</ul>
	<@ end @>
<@ end @>
<@ newPagelist { type: 'children' } @>
<@ with '/' @>
	<aside class="menu">
		<@ menu @>
	</aside>
<@ end @>