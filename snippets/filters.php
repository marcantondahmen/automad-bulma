<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ if not @{ checkboxHideFilters } or @{ ?search } @>
	<div id="filters" class="control">
		<div class="field is-grouped">
			<@ if not @{ checkboxHideFilters } @>
				<div class="control">
					<div class="dropdown is-hoverable">
						<div class="dropdown-trigger">
							<button class="button is-light" aria-haspopup="true" aria-controls="dropdown-filters">
								<span>
									<@ if @{ ?filter } @>
										@{ ?filter }
									<@ else @>
										@{ labelShowAll | def ('Show All') }
									<@ end @>
								</span>
								<span class="icon is-small">
									<i class="fas fa-angle-down" aria-hidden="true"></i>
								</span>
							</button>
						</div>
						<div class="dropdown-menu" id="dropdown-filters" role="menu">
							<div class="dropdown-content">
								<a 
								href="?<@ queryStringMerge { filter: false } @>#filters"
								class="dropdown-item" 
								>
									@{ labelShowAll | def ('Show All') }
								</a>
								<@ foreach in filters @>
									<a 
									href="?<@ queryStringMerge { filter: @{ :filter } } @>#filters"
									class="dropdown-item" 
									>
										@{ :filter }
									</a>
								<@ end @>
							</div>
						</div>
					</div>
				</div>
			<@	end @>
			<@ if @{ ?search } @>
				<p class="control">
					<a 
					href="?<@ queryStringMerge { search: false } @>"
					class="button"
					>
						<span class="icon is-small">
							<i class="fas fa-times" aria-hidden="true"></i>
						</span>
						<span>"@{ ?search }"</span>
					</a>
				</p>
			<@ end @>		
		</div>
	</div>
<@ end @>
