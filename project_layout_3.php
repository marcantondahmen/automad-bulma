<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ snippets/header.php @>
	
	<@ snippets/navbar.php @>
	<section class="section">
		<div class="container">
			<div class="columns is-8 is-variable">
				<div class="column is-4 content">
					<@ snippets/teaser.php @>
					<br />
					@{ text | markdown }	
				</div>
				<div class="column is-8">
					<div class="content">
						<@ filelist { glob: @{ images | def('*.jpg, *.png') }, sort: 'asc' } @>
						<@ if @{ :filelistCount } > 1 @>
							<div class="carousel carousel-animated carousel-animate-fade" data-autoplay="true" data-delay="3000">
								<div class="carousel-container">
									<@ foreach in filelist { width: 1000, height: @{ carouselHeight | def (750) }, crop: true } @>
										<div class="carousel-item has-background<@ if @{ :i } = 1 @> is-active<@ end @>">
											<img class="is-background" src="@{ :fileResized }" alt="@{ :basename }" />
											<@ if @{ :caption } @>
												<div class="title">@{ :caption | markdown }</div>
											<@ end @>
										</div>
									<@ end @>
								</div>
								<div class="carousel-navigation is-overlay">
									<div class="carousel-nav-left">
										<i class="fa fa-chevron-left" aria-hidden="true"></i>
									</div>
									<div class="carousel-nav-right">
										<i class="fa fa-chevron-right" aria-hidden="true"></i>
									</div>
								</div>	
							</div>	
						<@ else @>
							<@ foreach in filelist { width: 1000, height: @{ carouselHeight | def (750) }, crop: true } @>
								<img src="@{ :fileResized }" alt="@{ :basename }" />
								<p>@{ :caption | markdown }</p>
							<@ end @>
						<@ end @>
					</div>
				</div>
			</div>
			<br />
		</div>
		<@ newPagelist {
			type: 'related',
			sort: @{ sortPages },
			template: @{ templateFilter }
		} @>
		<@ snippets/pagelist.php @>
	</section>
	
<@ snippets/footer.php @>