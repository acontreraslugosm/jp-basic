<div class="responsive-helper">
	<div class="visible-xs">xs</div>
	<div class="visible-sm">sm</div>
	<div class="visible-md">md</div>
	<div class="visible-lg">lg</div>
	<div class="show-modernizr">&raquo;</div>
	<pre class="modernizr-features hidden"></pre>
</div>
<script>
  $('.show-modernizr').click(function (e) {
      e.preventDefault();
      var features = $('html').attr('class');
      $('.modernizr-features').text(features);
      $('.modernizr-features').toggleClass('hidden');
  });
</script>