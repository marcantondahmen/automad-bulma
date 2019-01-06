<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<div class="container content">
	<div class="columns is-multiline is-8 is-variable">
		<@ set { ":hideImages": @{ checkboxHideImagesInPagelist } } @>
		<@ foreach in pagelist @>
			<div class="column is-one-third">
				<hr />
				<div class="field is-size-7">
					<@ date.php @>
				</div>
				<div class="field">
					<h3>@{ title }</h3>
				</div>
				<@ if not @{ :hideImages } @>
					<@ with @{ imageTeaser | def (@{ images }) | def ('*.jpg, *.png') } { width: 800, height: 600, crop: true }@>
						<div class="field">
							<a href="@{ url }">
								<img src="@{ :fileResized }" alt="@{ :basename }">
							</a>
						</div>
					<@ end @>
				<@ end @>
				<div class="field is-size-6">
					@{ textTeaser | markdown }
				</div>
				<@ more.php @>
			</div>
		<@ end @>
	</div>
</div>