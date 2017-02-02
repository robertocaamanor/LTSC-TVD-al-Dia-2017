 <form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <label for="s" class="assistive-text"><?php _e( 'Search', 'shape' ); ?></label>
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Buscar …', 'shape' ); ?>" />
        <button type="submit" class="submit" name="submit" id="searchsubmit"><span class="glyphicon glyphicon-search"></span></button>
    </form>