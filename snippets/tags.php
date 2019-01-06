<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
<@ foreach in tags 
	@><a 
	href="@{ urlTagLinkTarget | def (@{ :parent }) }?filter=@{ :tag }#filters"
	class="@{ :color | def ('has-text-dark') }"
	><@ if @{ :i } > 1 @>, <@ end @>@{ :tag }</a><@ 
end @>