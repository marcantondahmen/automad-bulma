<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="container content">
	<div class="columns is-multiline is-6 is-variable">
		<@ set { ":hideImages": @{ checkboxHideImagesInPagelist } } @>
		<@ foreach in pagelist @>
			<div class="column is-one-third">
				<div class="card">
					<@ if not @{ :hideImages } @>
						<@ with @{ imageTeaser | def (@{ images }) | def ('*.jpg, *.png') } { width: 800, height: 600, crop: true }@>
							<div class="card-image">
								<a href="@{ url }" class="image is-4by3">
									<img src="@{ :fileResized }" alt="@{ :basename }">
								</a>
							</div>
						<@ end @>
					<@ end @>	
					<div class="card-content">
						<div class="content">
							<p class="title is-4">@{ title }</p>
							@{ textTeaser | markdown }
							<time><@ date.php @></time>
						</div>
					</div>
					<div class="card-content bottom">
						<@ more.php @>
					</div>
				</div>
			</div>
		<@ end @>
	</div>
</div>