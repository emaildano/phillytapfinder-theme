<?php if ( is_front_page() ) { ?>

<form class="clearfix" autocomplete="off" id="primary-search">
	<div class="input-holder">
		<label for="searchpft">Find your next craft beer</label>
		<input type="text" name="searchptf" id="searchptf" />
		<span class="entypo">&ocirc;</span>
	</div>
	<!--input type="submit" class="submit-style" value="Search Craft Beers On Tap"/-->
	<div class="search-auto-fills home-search-drop">
		<div class="search-auto-lists">
			<ul id="search-tap-list">
				<li class="auto-list-title">On Tap</li>
			</ul>
			<ul id="search-style-list">
				<li class="auto-list-title">Styles</li>
			</ul>
			<ul id="search-bar-list">
				<li class="auto-list-title">Bars</li>
			</ul>
			<ul id="search-hood-list">
				<li class="auto-list-title">Hoods</li>
			</ul>
			<ul id="no-results">
				<li class="auto-list-title">Where's my firkin beer? Sorry, no search results found.</li>
			</ul>
		</div>	
		<div class="loader"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ajax-loader.gif" /></div>
	</div>
</form>

<?php } else { ?>

<section id="search-box">
	<div class="page-container">
		<h1 class="hidden">Search Results</h1>
		<form class="clearfix" autocomplete="off" id="primary-search">
			<div class="input-holder">
				<label for="searchpft">Find your next craft beer</label>
				<input type="text" name="searchptf" id="searchptf"/>
				<span class="entypo">&ocirc;</span>
			</div>
			<!--input type="submit" class="submit-style" value="Search Craft Beers On Tap"/-->
			<div class="search-auto-fills">
				<div class="search-auto-lists">
					<ul id="search-tap-list">
						<li class="auto-list-title">On Tap</li>
					</ul>
					<ul id="search-style-list">
						<li class="auto-list-title">Styles</li>
					</ul>
					<ul id="search-bar-list">
						<li class="auto-list-title">Bars</li>
					</ul>
					<ul id="search-hood-list">
						<li class="auto-list-title">Hoods</li>
					</ul>
					<ul id="no-results">
						<li class="auto-list-title">Where's my firkin beer? Sorry, no search results found.</li>
					</ul>
				</div>
				<div class="loader"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ajax-loader.gif" /></div>
			</div>
		</form>
	</div>
</section>

<?php } ?>
<script id="search-tap-tmpl" type="text/x-jquery-tmpl">
	<li>
		<a href="${link}">${name}</a>
	</li>
</script>

<script id="search-style-tmpl" type="text/x-jquery-tmpl">
	<li>
		<a href="/style/${link}">${name}</a>
	</li>
</script>
<script id="search-bar-tmpl" type="text/x-jquery-tmpl">
	<li>
		<a href="${link}">${name}</a>
	</li>
</script>
<script id="search-hood-tmpl" type="text/x-jquery-tmpl">
	<li>
		<a href="/hood/${link}">${name}</a>
	</li>
</script>