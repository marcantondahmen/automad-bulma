<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>	
	<footer class="footer">
		<div class="container">
			<@ if @{ :level } > 1 @>
				<@ newPagelist { type: 'breadcrumbs' } @>
				<nav class="breadcrumb" aria-label="breadcrumbs">
					<ul>
						<@ foreach in pagelist @>
							<li>
								<a href="@{ url }">@{ title }</a>
							</li>
						<@ end @>
					</ul>
				</nav>
				<br />
			<@ end @>
			<div class="content">
				<@ newPagelist { excludeHidden: false } @>
				<@ foreach in pagelist @>
					<@ if @{ checkboxShowInFooter } @>
						<p>
							<a href="@{ url }">@{ title }</a>
						</p>
					<@ end @>
				<@ end @>
				<@ if not @{ checkboxHideSignIn } @>
					<p>
						<a href="/dashboard">Sign in</a>
					</p>
				<@ end @>
			</div>
			<br />
			<@ if @{ textFooter } @>
				<div class="content">
					@{ textFooter | markdown }
				</div>
				<br />
			<@ end @>
			<div class="content">
				&copy; @{ :now | dateFormat('Y') } <strong>@{ sitename }</strong>
			</div>
		</div>
	</footer>
	<script src="/vendor/components/jquery/jquery.slim.min.js"></script>
	<script src="/packages/dahmen/automad-bulma/dist/bulma-carousel.min.js"></script>
	<script src="/packages/dahmen/automad-bulma/dist/automad-bulma.js"></script>
	@{ itemsFooter }
</body>
</html>