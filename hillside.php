<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
	<article>
		<div id="slider">
			<div class="slider-item">
				<img src="/images/slides/hillside/hill3.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/hillside/hill2.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/hillside/hill1.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/hillside/hill4.png">
			</div>
		</div>
		<div class="thumbs">
			<a href=""><img src="/images/slides/hillside/thumbs/hill3.png" /></a>
			<a href=""><img src="/images/slides/hillside/thumbs/hill2.png" /></a>
			<a href=""><img src="/images/slides/hillside/thumbs/hill1.png" /></a>
			<a href=""><img src="/images/slides/hillside/thumbs/hill4.png" /></a>
		</div>
		<div class="description">
			<h2>Hillside Residence<sup>1</sup></h2>
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