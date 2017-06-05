<!-- footer -->
<footer class="footer col-md-12" role="contentinfo">
    <div id="footer-sidebar1" class="col-md-4">
        <?php
        if(is_active_sidebar('Footer-sidebar-left')){
            dynamic_sidebar('Footer Sidebar Left');
        }
        ?>
    </div>
    <div id="footer-sidebar2" class="col-md-4">
        <?php
        if(is_active_sidebar('Footer-sidebar-middle')){
            dynamic_sidebar('Footer Sidebar Middle');
        }
        ?>
    </div>
    <div id="footer-sidebar3" class="col-md-4">
		<?php
		if(is_active_sidebar('Footer-sidebar-right')){
			dynamic_sidebar('Footer Sidebar Right');
		}
		?>
	</div>

	<div id="footer-sidebar4" class="col-md-12">
		<!-- copyright -->
		<p class="copyright">
			Copyright &copy; Karin Bergman, <?php echo date('Y'); ?>
		</p>
		<!-- /copyright -->
	</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

<?php wp_footer(); ?>
<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/build/js/production.min.js"></script>
</body>
</html>
