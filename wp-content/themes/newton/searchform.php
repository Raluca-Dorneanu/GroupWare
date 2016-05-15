<?php
/**
 * The search form.
 *
 * Displays the search form. Delete this file if you want to use the default WordPress search form.
 *
 * @package Newton
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'before form', 'newton' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search ...', 'newton' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'newton' ) ?>" />
	</label>
	<button class="search-submit"><span class="screen-reader-text"><?php _e('Search Submit', 'newton'); ?></span><span class="genericon genericon-search" aria-hidden="true"></span></button>
</form>
