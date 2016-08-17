	</div>
	<footer class="site-footer">
		<div class="site-footer__wrapper lcw">
			<div class="copy">© "Новый Формат" 2016</div>			
		</div>
	</footer>
	<button class="scrollup"></button>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-2.2.4.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/ScrollMagic.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/debug.addIndicators.js" ></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/animation.gsap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/slick.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
	var center = new google.maps.LatLng(55.736095, 37.718121);
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
<!--<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter37947005 = new Ya.Metrika({
					id:37947005,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true,
					trackHash:true,
					ecommerce:"dataLayer"
				});
			} catch(e) { }
		});
		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";
		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37947005" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-80637134-1', 'auto');
	ga('send', 'pageview');
</script>-->
<?php wp_footer(); ?>
</body>
</html>
