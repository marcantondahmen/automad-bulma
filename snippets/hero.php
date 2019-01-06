<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ filelist { glob: @{ images | def ('*.jpg, *.png') }, order: asc } @>
<@ if @{ checkboxNavbarOpaque } or not @{ :filelistCount } @>
	<@ navbar.php @>
<@ end @>
<@ if @{ :filelistCount } @>
	<@ if @{ checkboxHeroFullHeight } @>
		<@ if @{ checkboxNavbarOpaque } @>
			<@ set { ":heroSize": "is-fullheight is-fullheight-with-navbar-spaced" } @>
		<@ else @>
			<@ set { ":heroSize": "is-fullheight" } @>
		<@ end @>
	<@ else @>
		<@ if @{ checkboxNavbarOpaque } @>
			<@ set { ":heroSize": "is-halfheight is-halfheight-with-navbar-spaced" } @>
		<@ else @>
			<@ set { ":heroSize": "is-halfheight" } @>
		<@ end @>
	<@ end @>
	<section class="hero @{ :heroSize } has-carousel">
		<div class="hero-carousel carousel-animated carousel-animate-fade" data-autoplay="true" data-delay="3000">
			<div class="carousel-container">
				<@ foreach in filelist @>
					<div class="carousel-item has-background<@ if @{ :i } = 1 @> is-active<@ end @>">
						<@ with @{ :file } { width: 1200 } @>
							<@ set { ":small": @{ :fileResized } } @>
						<@ end @>
						<@ with @{ :file } { width: 1800 } @>
							<@ set { ":medium": @{ :fileResized } } @>
						<@ end @>
						<@ with @{ :file } { width: 2400 } @>
							<@ set { ":large": @{ :fileResized } } @>
						<@ end @>
						<img 
						class="is-background"
						src="@{ :medium }"
						srcset="@{ :small } 500w,
								@{ :medium } 1600w, 
								@{ :large } 2400w"
						sizes="(-webkit-min-device-pixel-ratio: 2) 50vw,
						       (min-resolution: 192dpi) 50vw,
						       (min-resolution: 2dppx) 50vw,
						       (-webkit-min-device-pixel-ratio: 3) 33.33vw,
						       (min-resolution: 288dpi) 33.33vw,
						       (min-resolution: 3dppx) 33.33vw"
						alt="@{ :basename }"
						/>
					</div>
				<@ end @>
			</div>
			<@ if @{ :filelistCount } > 1 @>
				<div class="carousel-navigation is-overlay">
					<div class="carousel-nav-left">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</div>
					<div class="carousel-nav-right">
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</div>
				</div>
			<@ end @>
		</div>
		<@ if not @{ checkboxNavbarOpaque } @>
			<div class="hero-head">
				<@ navbar.php @>
			</div>
		<@ end @>
		<div class="hero-body">
			<div class="container">
				<div class="content">
					@{ textHero | markdown }
				</div>
			</div>
		</div>
		<# Set :heroTitle to in a template before using the hero snippet to show the title in the footer. #>
		<@ if @{ :heroTitle } @>
			<@ if @{ checkboxNavbarDark } @>
				<@ set { ":color": "has-text-white" } @>
			<@ end @>
			<div class="hero-foot">
				<section class="section">
					<div class="container content @{ :color }">
						<@ if @{ date } or @{ tags } @>
							<h1 <@ if @{ :color } @>class="@{ :color }"<@ end @>>@{ title }</h1>
						<@ end @>
						<div class="columns is-variable is-mobile is-2">
							<div class="column @{ :color }">
								<@ if @{ date } or @{ tags } @>
									<@ date_tags.php @>	
								<@ else @>
									<h1 <@ if @{ :color } @>class="@{ :color }"<@ end @>>@{ title }</h1>
								<@ end @>
							</div>
							<div class="column is-narrow">
								<@ prev_next.php @>
							</div>
						</div>
					</div>
				</section>
			</div>
		<@ end @>
	</section>
<@ end @>