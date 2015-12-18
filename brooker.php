<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
	<article>
		<div id="slider">
			<div class="slider-item">
				<img src="/images/slides/brooker/brooker3.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/brooker/brooker2.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/brooker/brooker1.png">
			</div>
		</div>
		<div class="thumbs">
			<a href=""><img src="/images/slides/brooker/thumbs/brooker3.png" /></a>
			<a href=""><img src="/images/slides/brooker/thumbs/brooker2.png" /></a>
			<a href=""><img src="/images/slides/brooker/thumbs/brooker1.png" /></a>
		</div>
		<div class="description">
			<h2>Brooker Addition<sup>1</sup></h2>
			Cincinnati, OH<br>Breezeway connection between existing garage and house, expanded kitchen and living area
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