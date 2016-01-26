<div class="responsive-helper">
	<pre class="modernizr-features hidden"></pre>
	<div>
		<div class="bs-breakpoint">
			<div class="visible-xxs">xxs</div>
			<div class="visible-xs hidden-xxs">xs</div>
			<div class="visible-sm">sm</div>
			<div class="visible-md">md</div>
			<div class="visible-lg">lg</div>
		</div>
		<div class="modernizr-btn">modernizr</div>
		<div class="info-window">
			<div class="info2">Height:<span class="rh-height"></span></div>
			<div class="info2">Width:<span class="rh-width"></span></div>
		</div>
		<div class="info-window">
			<div class="info1">Scroll:<span class="rh-scroll"></span></div>
		</div>
	</div>
</div>
<script>
  $('.modernizr-btn').click(function (e) {
      e.preventDefault();
      var features = $('html').attr('class');
      $('.modernizr-features').text(features);
      $('.modernizr-features').toggleClass('hidden');
  });
  $(window).on('resize scroll', function () {
      $('.responsive-helper .info-window .rh-height').text($(window).height());
      $('.responsive-helper .info-window .rh-width').text($(window).width());
      $('.responsive-helper .info-window .rh-scroll').text($('html').scrollTop());
  });

  $(window).trigger('resize');
</script>