<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
	<article>
		<div id="slider">
			<div class="slider-item">
				<img src="/images/slides/spec/spec1.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/spec/spec3.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/spec/spec2.png">
			</div>
		</div>
		<div class="thumbs">
			<a href=""><img src="/images/slides/spec/thumbs/spec1.png" /></a>
			<a href=""><img src="/images/slides/spec/thumbs/spec3.png" /></a>
			<a href=""><img src="/images/slides/spec/thumbs/spec2.png" /></a>
		</div>
		<div class="description">
			<h2>Speculative Residence<sup>1</sup></h2>
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