<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" placeholder="<?php _e('Search') ?>" /><!--
--><button type="submit" class="btn btn-success"  id="searchsubmit">
                <i class="fa fa-search"></i>
        </button>
    </div>
</form>