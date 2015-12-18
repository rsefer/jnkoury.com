<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
	<article>
		<div id="slider">
			<div class="slider-item">
				<img src="/images/slides/heritage/heritage1.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/heritage/heritage2.png">
			</div>
		</div>
		<div class="thumbs">
			<a href=""><img src="/images/slides/heritage/thumbs/heritage1.png" /></a>
			<a href=""><img src="/images/slides/heritage/thumbs/heritage2.png" /></a>
		</div>
		<div class="description">
			<h2>Heritage House Fabrics<sup>3</sup></h2>
			Concord, NC<br>50,000 square feet offices, warehouse and distribution facility for international fabric distributor
		</div>
	</article>
</section>

<script>
jQuery(document).ready(function($) {
  
  $('#commercial-list').show();
  $('#commercial-list').addClass('open');
  
});
</script>

<?php include ("footer.php"); ?>

</div> <!-- end #wrapper -->

<?php include ("end.php"); ?>