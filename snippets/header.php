<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<@ set {
		metaTitle: "@{ sitename } / @{ title }"
	} @>
    <title>@{ metaTitle | stripTags }</title>
	<@ Automad/MetaTags {
		description: @{ textTeaser | stripTags },
		ogTitle: @{ metaTitle | stripTags },
		ogDescription: @{ textTeaser | stripTags },
		ogImage: @{ ogImage }
	} @>
	<@ with @{ favicon } @><link href="@{ :file }" rel="shortcut icon" type="image/x-icon" /><@ end @>
	<@ with @{ appleTouchIcon } @><link href="@{ :file }" rel="apple-touch-icon" /><@ end @>
	<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="@{ bulmaCss | def ('/packages/dahmen/automad-bulma/dist/bulma.min.css') }" />
	<link rel="stylesheet" href="/packages/dahmen/automad-bulma/dist/bulma-carousel.min.css" />
	<link rel="stylesheet" href="/packages/dahmen/automad-bulma/dist/automad-bulma.css" />
	<@ if @{ :template | match ('/(blog|post)/') } @>
		<link rel="stylesheet" href="/packages/dahmen/automad-bulma/dist/bulma-timeline.min.css" />
	<@ end @>
	@{ itemsHeader }
</head>

<body>
	