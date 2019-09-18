<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippet navbarMenu @>
	<@ set { ":hideSecondLevel": @{ checkboxHideSecondLevelNavbar } } @>
	<@ newPagelist { type: 'children' } @>
	<@ with '/' @>
		 <@ foreach in pagelist @>
			<@ if @{ :pagelistCount } and not @{ :hideSecondLevel } @>
				<a href="@{ url }" class="navbar-item is-hidden-desktop">
					@{ title }
				</a>
				<div class="navbar-item has-dropdown is-hoverable is-hidden-touch">
					<a class="navbar-link is-arrowless">
						@{ title }
					</a>
					<div class="navbar-dropdown is-boxed<@ if @{ checkboxNavbarRight } @> is-right<@ end @>">
						<a href="@{ url }" class="navbar-item is-radiusless">
							@{ title }
						</a>
						<hr class="navbar-divider">
						<@ foreach in pagelist @>
							<a href="@{ url }" class="navbar-item is-radiusless">
								@{ title }
							</a>
						<@ end @>	
					</div>
				</div>
			<@ else @>
				<a href="@{ url }" class="navbar-item">
					@{ title }
				</a>
			<@ end @>
		 <@ end @>
	<@ end @>
<@ end @>
<@ if @{ checkboxNavbarDark } @>
	<@ set { ":navbarColor": "is-black" } @>
<@ else @>
	<@ set { ":navbarColor": "is-white" } @>
<@ end @>
<nav class="navbar is-spaced @{ :navbarColor }" role="navigation" aria-label="main navigation">
	<div class="container">
		<div class="navbar-brand">
			<a class="navbar-item" href="/">
				<@ with @{ logo | def ('/shared/logo*.*') } @>
					<img 
					src="<@ with @{ :file } { height: @{ logoHeight | def (35) } } @>@{ :fileResized }<@ end @>" 
					srcset="<@ with @{ :file } { height: @{ logoHeight | def (35) | *2 } } @>@{ :fileResized } 2x<@ end @>"
					alt="@{ :basename }"
					>
				<@ else @>
					@{ brand | def (@{ sitename })}
				<@ end @>
			</a>
			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbar">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>
		<div id="navbar" class="navbar-menu">
			<@ if not @{ checkboxNavbarRight } @>
				<div class="navbar-start">
					<@ navbarMenu @>
				</div>
			<@ end @>
			<div class="navbar-end">
				<@ if @{ checkboxNavbarRight } @>
					<div class="navbar-start">
						<@ navbarMenu @>
					</div>
				<@ end @>
				<@ if @{ urlSearchResults } @>
					<div class="navbar-item">
						<form action="@{ urlSearchResults }" class="control has-icons-left">
							<input 
							class="input" 
							type="search" 
							name="search"
							placeholder="@{ placeholderSearch | def ('Search') }"
							/>
							<span class="icon is-small is-left">
								<i class="fas fa-search" aria-hidden="true"></i>
							</span>
						</form>
					</div>
				<@ end @>
				<@ set { ":buttonColor": @{ actionButtonColor | def ('info') } } @>
				<@ with @{ urlActionButton } @>
					<div class="navbar-item">
						<div class="buttons">
							<a href="@{ url }" class="button is-@{ :buttonColor }">
								@{ title }
							</a>
						</div>
					</div>
				<@ end @>
				<@ newPagelist { type: false } @>
				<@ if @{ :level } > 0 and not @{ checkboxHideSecondLevelNavbar } @>
					<@ foreach in pagelist @>
						<@ if @{ :level } = 1 and @{ :currentPath } @>
							<@ pagelist { type: 'children' } @>
							<@ if @{ :pagelistCount } @>
								<hr class="is-hidden-desktop" />
							<@ end @>
							<@ foreach in pagelist @>
								<a href="@{ url }" class="navbar-item is-hidden-desktop<@ isActive @>">
									@{ title }
								</a>
							<@ end @>
						<@ end @>
					<@ end @>
				<@ end @>
			</div>
		</div>
	</div>
</nav>