<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
	<article>
		<div id="slider">
			<div class="slider-item">
				<img src="/images/slides/grand/grand1.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/grand/grand2.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/grand/grand3.png">
			</div>
		</div>
		<div class="thumbs">
			<a href=""><img src="/images/slides/grand/thumbs/grand1.png" /></a>
			<a href=""><img src="/images/slides/grand/thumbs/grand2.png" /></a>
			<a href=""><img src="/images/slides/grand/thumbs/grand3.png" /></a>
		</div>
		<div class="description">
			<h2>Multi-Family Development & Master Plan<sup>2</sup></h2>
			Cincinnati, OH
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