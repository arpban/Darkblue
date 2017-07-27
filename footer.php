<footer>
	<div class="text">&copy mini moocs</div>
	<div class="icons"></div>
</footer>
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
	window.sr = ScrollReveal({reset: true});
	sr.reveal(' .slide.one .content .header, .slide.one .content .sub-header', {duration: 1000}, 200 );
	sr.reveal(' .slide.two .content header, .slide.two .content h2,.slide.two .content p', {duration: 1000}, 200);
	sr.reveal(' .slide.three .content header, .slide.three .content p', {duration: 1000}, 200);
	sr.reveal(' .slide.four .content header, .slide.four .content p', {duration: 1000}, 200);			
</script>

<?php wp_footer(); ?>
</body>

</html>