<!--ABOUT PAGE -->

<?php
require '../includes/application.php';
require '../includes/header.php';
?>

<div id="about">

	<div class="row">
		<div class="col-md-6 col-sm-6">


			      <!--<div class="copy">
						<p>Created by soprano Lisa Delan and composer Luna Pearl Woolf, Angel Heart is a music storybook narrated by Jeremy Irons with an original story by Cornelia Funke and music by Luna Pearl Woolf, and performed by Matt Haimovitz &amp; Uccello with singers such as Frederica von Stade, Daniel Taylor, Delan and more. Woolf’s original score is interwoven with familiar songs and lullabies.
						</p>
						<p> Angel Heart, a music storybook, is a deluxe hard-cover CD &amp; book package, a digital album, a live, touring stage production &amp; community music residency, and will soon be available as an App.
						</p>
						<p>
						 From the liner notes to the deluxe CD from Oxingale Records, Delan and Woolf write:
						</p>
						</div>
						<blockquote>
						We were dreaming of lullabies. Each of us, unbeknown to the other, imagined creating the kind of recording we wanted to hear as we tucked our children in at night. Meeting in this shared land, our commingled dreams sowed the seeds of Angel Heart…
						</blockquote>
					</div>

			      <div class="carousel-caption">
			        1 of 3
			      </div>
			    </div>-->


			<!-- carousel start -->

			<div class="carousel slide bs-docs-carousel-example" id="carousel" data-interval="false">
		       	<div class="carousel-inner">

		          <div class="item active">
		           <div class="copy">
						<p>Created by soprano Lisa Delan and composer Luna Pearl Woolf, Angel Heart is a music storybook narrated by Jeremy Irons with an original story by Cornelia Funke and music by Luna Pearl Woolf, and performed by Matt Haimovitz &amp; Uccello with singers such as Frederica von Stade, Daniel Taylor, Delan and more. Woolf’s original score is interwoven with familiar songs and lullabies.</p>
						<p>Angel Heart, a music storybook, is a deluxe hard-cover CD &amp; book package, a digital album, a live, touring stage production &amp; community music residency, and will soon be available as an App.</p>
						<p>From the liner notes to the deluxe CD from Oxingale Records, Delan and Woolf write:</p>

						<blockquote>
							We were dreaming of lullabies. Each of us, unbeknown to the other, imagined creating the kind of recording we wanted to hear as we tucked our children in at night. Meeting in this shared land, our commingled dreams sowed the seeds of Angel Heart...
						</blockquote>
					</div>

					<div class="carousel-caption"><span class="gradient"></span>
		        		1/3
		      		</div>

				</div>



		          <div class="item">
		            <div class="copy">
						<p>Delan and Woolf compiled the songs of Angel Heart to reflect their musical loves, some by composers from Irving Berlin to Engelbert Humperdinck to Lennon and McCartney, others traditional folk songs and lullabies – all arranged for the intimate sounds of an all-cello ensemble by Woolf and composers Lewis Spratlan and David Sanford.
						<p>Just as many of these songs are handed down from grandparents to children, Delan and Woolf were inspired by artists like Matt Haimovitz and Frederica von Stade, whose musical mentorship bridges generations, creating future musicians and music lovers in their wake.</p>
						<p>For a story to weave through the songs, Delan and Woolf turned to best-selling children’s fantasy writer Cornelia Funke. Together they “envisioned the songs as taking the place of illustrations in a storybook, conveying the emotional impact of a moment in the text, without literally speaking in the characters’ voices.” Woolf composed her original score, for five cellos and narrator, to provide a lyrical landscape for Funke’s words, and a thematic thread to span the entire musical journey.</p>
					</div>

					<div class="carousel-caption"><span class="gradient"></span>
		        		2/3
		      		</div>
		          </div>

		          <div class="item">
		            <div class="copy">
						<p>Music is at the core Angel Heart, a music  storybook, but the project would not be complete without the exquisite visual storytelling of Mirada, the Los Angeles-based creative studio and “purveyors of handmade storytelling” who will soon be releasing Angel Heart as an app. Their imagery, capturing the emotion and adventure of Funke’s story, enhances the deluxe CD&book package and this site.</p>
						<p>For more information on live performances, including how your community can get involved, please <a href="<?php echo SITE_URL?>contact">contact us</a>.</p>
					</div>

					<div class="carousel-caption"><span class="gradient"></span>
		        		3/3
		      		</div>
		          </div>

		        </div>
		        <a data-slide="prev" href="#carousel" class="left carousel-control">
		          <span class="icon-prev"></span>
		        </a>
		        <a data-slide="next" href="#carousel" class="right carousel-control">
		          <span class="icon-next"></span>
		        </a>
		      </div>
			<!-- carousel end -->
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="girl">
				<!--<img src="<?php echo constant("SITE_URL");?>img/girl.jpg"/>-->
				<iframe width="640" height="480" src="//www.youtube.com/embed/_0axJ8PFWNk" frameborder="0" allowfullscreen></iframe>
				<div class="oxingale-logo">
					<a href="http://oxingalerecords.com/" target="_blank">
						<img src="<?php echo constant("SITE_URL");?>img/about/ox_logo.png"/></a>
				</div>
			</div>

		</div>
	</div>

</div>

<?php
require '../includes/footer.php';
?>
