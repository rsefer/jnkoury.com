<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
	<article>
		<div id="slider">
			<div class="slider-item">
				<img src="/images/slides/porch/porch1.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/porch/porch2.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/porch/porch3.png">
			</div>
		</div>
		<div class="thumbs">
			<a href=""><img src="/images/slides/porch/thumbs/porch1.png" /></a>
			<a href=""><img src="/images/slides/porch/thumbs/porch2.png" /></a>
			<a href=""><img src="/images/slides/porch/thumbs/porch3.png" /></a>
		</div>
		<div class="description">
			<h2>Back Porch</h2>
			Charlotte, NC
		</div>
	</article>
</section>

<script>
jQuery(document).ready(function($) {
  
  $('#residential-list').show();
  $('#residential-list').addClass('open');
  
});
</script>

<?php include ("footer.php"); ?>

</div> <!-- end #wrapper -->

<?php include ("end.php"); ?>