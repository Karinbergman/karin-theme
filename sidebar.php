<div id="sidebar" class="col-md-4">
    <div id="">
        <?php if ( !function_exists('dynamic_sidebar')
            || !dynamic_sidebar('sidebar1') ) : ?>
        <?php endif; ?>
    </div>
    <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('sidebar2') ) : ?>
    <?php endif; ?>
</div>
