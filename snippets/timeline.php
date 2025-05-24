<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ if @{ :pagelistCount } @>
	<div class="columns is-variable">
		<div class="column is-9">
			<div class="timeline">
				<@ foreach in pagelist @>
					<@ if @{ date } @>
						<@ set { ":year": @{ date | dateFormat('Y') } } @>
						<@ if @{ :prevYear } != @{ :year } @>
						<header class="timeline-header">
							<span class="tag is-medium is-dark">@{ :year }</span>
						</header>
						<@ end @>
						<@ set { ":prevYear": @{ date | dateFormat('Y') } } @>
						<div class="timeline-item is-dark">
							<div class="timeline-marker is-dark"></div>
							<div class="timeline-content">
								<p class="is-size-7">
									<strong>@{ date | dateFormat(@{ formatDateBlog | def ('F jS, Y') }) }</strong>
								</p>
								<div class="content">
									<div class="field is-size-5">
										<a class="has-text-dark" href="@{ url }">
											<strong>@{ title }</strong>
										</a>
									</div>
									<@ with @{ imageTeaser | def (@{ images }) | def ('*.jpg, *.png') } { width: 640, height: 480, crop: true } @>
										<div class="field">
											<a class="has-text-dark" href="@{ url }">
												<img src="@{ :fileResized }" alt="@{ :basename }">
											</a>
										</div>
									<@ end @>
									<div class="field">
										@{ textTeaser | markdown }
									</div>
									<div class="field">
										<a class="button is-small is-light" href="@{ url }">@{ labelMore | def ('More') }</a>
									</div>
								</div>
							</div>
						</div>
					<@ end @>
				<@ end @>
				<header class="timeline-header">
					<span class="tag is-medium is-dark">
						<span class="icon is-small">
							<i class="fas fa-calendar-alt" aria-hidden="true"></i>
						</span>
					</span>
				</header>
			</div>
		</div>
	</div>
<@ end @>