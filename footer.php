	</div>
	<footer class="site-footer" role="contentinfo">
		<div class="site-footer__wrapper lcw">
			<div class="copy">© "Новый Стандарт" 2016</div>			
		</div>
	</footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-2.2.4.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/ScrollMagic.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/debug.addIndicators.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/animation.gsap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/slick.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
	var center = new google.maps.LatLng(55.789061, 37.729310);
	var init = function(){
		var prop = {
			center: center,
			scrollwheel: false,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('map'), prop);
		var marker = new google.maps.Marker({
			position: center,
			icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
			size: new google.maps.Size(20, 32)
		});
		marker.setMap(map);
	};
	google.maps.event.addDomListener(window, 'load', init);
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
