<footer>
	<div class="f-menu">
<?php wp_nav_menu(array(
	'theme_location' => 'footer',
	'container' => '',
)); ?>
	</div>
	<p id="copyright">Copyright &copy; <?php echo date('Y'); ?> biko-sya.All Rights Reserved.</p>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/menu.js"></script>
</body>
</html>