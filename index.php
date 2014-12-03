<!--HOME PAGE -->

<?php
require './includes/application.php';
require './includes/header.php';
?>

<div id="home">

	<div class="row">
		<div class="col-md-7">
			<div class="girl">
				<a class="fancybox" href="#ah-home-link">
					<img src="<?php echo SITE_URL?>img/girl.jpg"/>
				</s>
			</div>
			<div id ="ah-home-link" style="display: none;">
					<iframe width="640" height="480" src="//www.youtube.com/embed/_0axJ8PFWNk" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-5 col-xs-12">
			<div class="logo">
				<a href="<?php echo SITE_URL?>"><img src="<?php echo SITE_URL?>img/Angel-Heart-logo.png"></a>
			</div>

			<div class="caption">
				<h3><span class="italic blue">story by</span> Cornelia Funke</h3>
				<h3><span class="italic blue">music by</span> Luna Pearl Woolf</h3>
			</div>

			<div class="copy">
				<p>Created by soprano Lisa Delan and composer Luna Pearl Woolf, Angel Heart is a music storybook about a girl whose heart has broken into a thousand pieces. She meets a guardian angel who, during their travels in the night, enlists the help of four spirits in his quest to mend her heart. Woolf’s original music is interwoven with familiar songs and lullabies.</p>
			</div>

		</div>
	</div>

</div>

<?php
require 'includes/footer.php';
?>
