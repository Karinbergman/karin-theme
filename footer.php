<div id="footer">
    <h2><?php echo get_bloginfo('name'); ?></h2>
<div id="footer-sidebar1">
    <?php
    if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
    }
    ?>
</div>
<div id="footer-sidebar2">
    <?php
    if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
    }
    ?>
</div>
<div id="footer-sidebar3">
    <?php
    if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
    }
    ?>
</div>
</div>
</div>
</body>
</html>
