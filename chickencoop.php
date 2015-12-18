<?php include("header.php"); ?>

<?php include("nav.php"); ?>

<section>
	<article>
		<div id="slider">
			<div class="slider-item">
				<img src="/images/slides/chickencoop/chickencoop1.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/chickencoop/chickencoop2.png">
			</div>
			<div class="slider-item">
				<img src="/images/slides/chickencoop/chickencoop3.png">
			</div>
		</div>
		<div class="thumbs">
			<a href=""><img src="/images/slides/chickencoop/thumbs/chickencoop1.png" /></a>
			<a href=""><img src="/images/slides/chickencoop/thumbs/chickencoop2.png" /></a>
			<a href=""><img src="/images/slides/chickencoop/thumbs/chickencoop3.png" /></a>
		</div>
		<div class="description">
			<h2>Chicken Coop</h2>
			Charlotte, NC<br>24 square foot chicken residence for 3-5 chickens, fully serviceable, well ventilated for chicken well being and egg production
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