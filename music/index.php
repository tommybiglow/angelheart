<!--MUSIC PAGE -->

<?php
require '../includes/application.php';
require '../includes/header.php';
?>
<!-- Custom styles for this template -->
<link href="<?php echo constant("SITE_URL");?>dist/css/music.css" rel="stylesheet">

<div id="music">

	<div class="row">
		<div class="col-md-12">

			<!-- carousel start -->
			<div class="carousel slide bs-docs-carousel-example" id="carousel" data-interval="false">
		       	<div class="carousel-inner">

		          <div class="item active">

					<div class="carousel-caption">
		        		<div class="center">
							<h4 class="blue">CHAPTER I</h4>
							<!--<h4 class="italic">There! Do you hear it?</h4>
							<h5>ALL THROUGH THE NIGHT</h5>-->
						</div>
		      		</div>

		      		<div class="row">
						<div class="col-md-10 col-md-offset-1 music-slider">
							<div class="col-md-6 col-sm-6">
								<img src="<?php echo SITE_URL?>img/music/feathers.jpg" alt="Artwork" />

								<!-- Audio Player -->
								<div class="audio-container">
							        <div class="player">
							            <a class="button glyphicon glyphicon-play" id="play" href="" title=""></a>
							             <input type="range" id="seek" value="0" max=""/>
							        </div><!-- / player -->
							    </div><!-- / audio-container-->
							    <!-- / Audio Player -->

								 <div class="slide-controls">
								 	<a data-slide="prev" href="#carousel" class="left carousel-control">
								 		<button class="glyphicon glyphicon-play icon-flipped"></button>
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
							        </a>
							        <a data-slide="next" href="#carousel" class="right carousel-control">
							        	<button class="glyphicon glyphicon-play"></button>
							        	<button class="glyphicon glyphicon-play"></button>
							        </a>
							    </div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="copy">
									<p>There! Do you hear it?<br/>
									There is a whispering of wings in the silence of the night.<br/>
									They’re coming.<br/>
									With feathers as white as snow, and faces as bright as the moonlight.</p>

									<p>Angels.</p>

									<p>They come to chase the nightmares that gallop through the dark
									and to harvest the light of the stars.<br/>
									They spread it over roofs and beds and sleeping eyes<br/>
									and fill the night with music...</p>

								</div>
								<div class="music-icons">
									<a href="https://itunes.apple.com/us/album/angel-heart-a-music-storybook/id701054791?ls=1" target="_blank"><span class="itunes">Purchase on iTunes</span></a>
									<a href="http://www.amazon.com/gp/product/B00E4V0BUA/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00E4V0BUA&linkCode=as2&tag=oxingale"><span class="amazon">Purchase on Amazon</span></a>
								</div>
							</div>
						</div>
					</div>

				</div>

		        <div class="item">
					<div class="carousel-caption">
		        		<div class="center">
							<h4 class="blue">ALL THROUGH THE NIGHT</h4>
							<!--<h4 class="italic">There! Do you hear it?</h4>
							<h5>ALL THROUGH THE NIGHT</h5>-->
						</div>
		      		</div>

		      		<div class="row">
						<div class="col-md-10 col-md-offset-1 music-slider">
							<div class="ah-wide col-md-12">
								<img src="<?php echo SITE_URL?>img/music/ah-wide.png" alt="Artwork" />
								<div class="col-md-6 col-sm-6">
									 <!-- Audio Player -->
									<div class="audio-container2">
								        <div class="player2">
								            <a class="button glyphicon glyphicon-play" id="play2" href="" title=""></a>
								             <input type="range" id="seek2" value="0" max=""/>
								        </div><!-- / player -->
								    </div><!-- / audio-container-->
								    <!-- / Audio Player -->

								    <div class="slide-controls">
									 	<a data-slide="prev" href="#carousel" class="left carousel-control">
										 	<button class="glyphicon glyphicon-play icon-flipped"></button>
										 	<button class="glyphicon glyphicon-play icon-flipped"></button>
								        </a>
								        <a data-slide="next" href="#carousel" class="right carousel-control">
								        	<button class="glyphicon glyphicon-play"></button>
								        	<button class="glyphicon glyphicon-play"></button>
								        </a>
								    </div>
								</div>

								<div class="copy col-md-6 col-sm-6">
								</div>
								<div class="music-icons">
									<a href="https://itunes.apple.com/us/album/angel-heart-a-music-storybook/id701054791?ls=1" target="_blank"><span class="itunes">Purchase on iTunes</span></a>
									<a href="http://www.amazon.com/gp/product/B00E4V0BUA/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&amp;creative=9325&creativeASIN=B00E4V0BUA&linkCode=as2&tag=oxingale" target="_blank"><span class="amazon">Purchase on Amazon</span></a>
								</div>
							</div>
						</div>
					</div>
		        </div><!-- .item end -->

		        <div class="item">
					<div class="carousel-caption">
		        		<div class="center">
							<h4 class="blue">CHAPTER II</h4>
							<!--<h4 class="italic">There! Do you hear it?</h4>
							<h5>ALL THROUGH THE NIGHT</h5>-->
						</div>
		      		</div>

		      		<div class="row">
						<div class="col-md-10 col-md-offset-1 music-slider">
							<div class="col-md-6 col-sm-6">
								<img src="<?php echo SITE_URL?>img/music/chp2_img_ah.jpg" alt="Artwork" />
								 <!-- Audio Player -->
								<div class="audio-container3">
							        <div class="player3">
							            <a class="button glyphicon glyphicon-play" id="play3" href="" title=""></a>
							             <input type="range" id="seek3" value="0" max=""/>
							        </div><!-- / player -->
							    </div><!-- / audio-container-->
							    <!-- / Audio Player -->
								 <div class="slide-controls">
								 	<a data-slide="prev" href="#carousel" class="left carousel-control">
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
							        </a>
							        <a data-slide="next" href="#carousel" class="right carousel-control">
							        	<button class="glyphicon glyphicon-play"></button>
							        	<button class="glyphicon glyphicon-play"></button>
							        </a>
							    </div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="copy">
									<p>But look! Who is that one?<br/>
										He tumbles from the sky like a young bird.<br/>
										His wings are not much larger than a pigeon’s.</p>

										<p>Oh, now he is upset. He says he is not that young!<br/>
										His name is Rahmiel,<br/>
										and he is almost two thousand years old.</p>

										<p>He is the angel of love and compassion.</p>
								</div>
								<div class="music-icons">
									<a href="https://itunes.apple.com/us/album/angel-heart-a-music-storybook/id701054791?ls=1" target="_blank"><span class="itunes">Purchase on iTunes</span></a>
									<a href="http://www.amazon.com/gp/product/B00E4V0BUA/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&amp;creative=9325&creativeASIN=B00E4V0BUA&linkCode=as2&tag=oxingale" target="_blank"><span class="amazon">Purchase on Amazon</span></a>
								</div>
							</div>
						</div>
					</div>
		        </div><!-- .item end -->

		        <div class="item">
					<div class="carousel-caption">
		        		<div class="center">
							<h4 class="blue">MOTHER NATURE'S SON</h4>
							<!--<h4 class="italic">There! Do you hear it?</h4>
							<h5>ALL THROUGH THE NIGHT</h5>-->
						</div>
		      		</div>

		      		<div class="row">
						<div class="col-md-10 col-md-offset-1 music-slider">
							<div class="col-md-6 col-sm-6">
								<img src="<?php echo SITE_URL?>img/music/ah_music_ph.jpg" alt="Artwork" />
								<!-- Audio Player -->
								<div class="audio-container4">
							        <div class="player4">
							            <a class="button glyphicon glyphicon-play" id="play4" href="" title=""></a>
							             <input type="range" id="seek4" value="0" max=""/>
							        </div><!-- / player -->
							    </div><!-- / audio-container-->
							    <!-- / Audio Player -->
								 <div class="slide-controls">
								 	<a data-slide="prev" href="#carousel" class="left carousel-control">
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
							        </a>
							        <a data-slide="next" href="#carousel" class="right carousel-control">
							        	<button class="glyphicon glyphicon-play"></button>
							        	<button class="glyphicon glyphicon-play"></button>
							        </a>
							    </div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="copy">
									<!-- no text -->
								</div>
								<div class="music-icons">
									<a href="https://itunes.apple.com/us/album/angel-heart-a-music-storybook/id701054791?ls=1" target="_blank"><span class="itunes">Purchase on iTunes</span></a>
									<a href="http://www.amazon.com/gp/product/B00E4V0BUA/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&amp;creative=9325&creativeASIN=B00E4V0BUA&linkCode=as2&tag=oxingale" target="_blank"><span class="amazon">Purchase on Amazon</span></a>
								</div>
							</div>
						</div>
					</div>
		        </div><!-- .item end -->

		        <div class="item">
					<div class="carousel-caption">
		        		<div class="center">
							<h4 class="blue">CHAPTER VIII</h4>
							<!--<h4 class="italic">There! Do you hear it?</h4>
							<h5>ALL THROUGH THE NIGHT</h5>-->
						</div>
		      		</div>

		      		<div class="row">
						<div class="col-md-10 col-md-offset-1 music-slider">
							<div class="col-md-6 col-sm-6">
								<img src="<?php echo SITE_URL?>img/music/Witch.jpg" alt="Artwork" />
								<!-- Audio Player -->
								<div class="audio-container5">
							        <div class="player5">
							            <a class="button glyphicon glyphicon-play" id="play5" href="" title=""></a>
							             <input type="range" id="seek5" value="0" max=""/>
							        </div><!-- / player -->
							    </div><!-- / audio-container-->
							    <!-- / Audio Player -->
								 <div class="slide-controls">
								 	<a data-slide="prev" href="#carousel" class="left carousel-control">
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
							        </a>
							        <a data-slide="next" href="#carousel" class="right carousel-control">
							        	<button class="glyphicon glyphicon-play"></button>
							        	<button class="glyphicon glyphicon-play"></button>
							        </a>
							    </div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="copy">
									<p>The witch that can heal broken hearts as easily as broken bones
									lives in a house built from raven feathers.</p>

									<p>She sits on her roof in the shape of a magpie when Rahmiel
									knocks at her door.<br/>
									“What is it?’ she croaks.<br/>
									Then she sees the angel.<br/>
									“Oh well, I am coming,” she says turning into a very black cat.<br/>
									“Who can say ‘No’ to an angel? Even when it is such a young and
									foolish one.”</p>
								</div>
								<div class="music-icons">
									<a href="https://itunes.apple.com/us/album/angel-heart-a-music-storybook/id701054791?ls=1" target="_blank"><span class="itunes">Purchase on iTunes</span></a>
									<a href="http://www.amazon.com/gp/product/B00E4V0BUA/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&amp;creative=9325&creativeASIN=B00E4V0BUA&linkCode=as2&tag=oxingale" target="_blank"><span class="amazon">Purchase on Amazon</span></a>
								</div>
							</div>
						</div>
					</div>
		        </div><!-- .item end -->

		        <div class="item">
					<div class="carousel-caption">
		        		<div class="center">
							<h4 class="blue">UNTER BEYMER</h4>
							<h4 class="italic">CHAPTER X</h4>
							<!--<h5>ALL THROUGH THE NIGHT</h5>-->
						</div>
		      		</div>

		      		<div class="row">
						<div class="col-md-10 col-md-offset-1 music-slider">
							<div class="col-md-6 col-sm-6">
								<img src="<?php echo SITE_URL?>img/music/spt_east_ah.jpg" alt="Artwork" />
								<!-- Audio Player -->
								<div class="audio-container6">
							        <div class="player6">
							            <a class="button glyphicon glyphicon-play" id="play6" href="" title=""></a>
							             <input type="range" id="seek6" value="0" max=""/>
							        </div><!-- / player -->
							    </div><!-- / audio-container-->
							    <!-- / Audio Player -->
								 <div class="slide-controls">
								 	<a data-slide="prev" href="#carousel" class="left carousel-control">
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
									 	<button class="glyphicon glyphicon-play icon-flipped"></button>
							        </a>
							        <a data-slide="next" href="#carousel" class="right carousel-control">
							        	<button class="glyphicon glyphicon-play"></button>
							        	<button class="glyphicon glyphicon-play"></button>
							        </a>
							    </div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="copy">
									<p>The East is dressed in leaves and as slender as a birch tree.<br/>
									Her lullaby is the song of the wind.
									</p>

									<p>It reminds Luna of dancing with bare feet in wet grass.<br/>
									Of her mother’s arms.<br/>
									Of the light of the sun.<br/>
									The scent of flowers.<br/>
									And of being young, so young.</p>

									<p>She falls asleep, the angel above her head<br/>
									and the music like dew on her skin,<br/>
									and when she wakes Rahmiel takes her hand<br/>
									and they head North.
									</p>
								</div>
								<div class="music-icons">
									<a href="https://itunes.apple.com/us/album/angel-heart-a-music-storybook/id701054791?ls=1" target="_blank"><span class="itunes">Purchase on iTunes</span></a>
									<a href="http://www.amazon.com/gp/product/B00E4V0BUA/ref=as_li_qf_sp_asin_tl?ie=UTF8&camp=1789&amp;creative=9325&creativeASIN=B00E4V0BUA&linkCode=as2&tag=oxingale" target="_blank"><span class="amazon">Purchase on Amazon</span></a>
								</div>
							</div>
						</div>
					</div>
		        </div><!-- .item end -->


		      </div>
			<!-- carousel end -->
		</div>
		</div>


	</div>

</div>

<?php
require '../includes/footer.php';
?>

<script>
jQuery(document).ready(function() {

	container = $('.audio-container');
	cover = $('.cover');
	play = $('#play');
	pause = $('#pause');
	mute = $('#mute');
	muted = $('#muted');
	close = $('#close');
	song = new Audio('clips/01 Angel Heart Chapter I SAMPLE.ogg','clips/01 Angel Heart Chapter I SAMPLE.mp3');
	duration = song.duration;


	if (song.canPlayType('audio/mpeg;')) {
    	song.type= 'audio/mpeg';
    	song.src= 'clips/01 Angel Heart Chapter I SAMPLE.mp3';
	} else {
    	song.type= 'audio/ogg';
    	song.src= 'clips/01 Angel Heart Chapter I SAMPLE.ogg';
	}


	play.on('click', function(e) {
		e.preventDefault();
		song.play();

		$(this).replaceWith('<a class="button  glyphicon glyphicon-pause" id="pause" href="" title=""></a>');
		container.addClass('containerLarge');
		cover.addClass('coverLarge');
		$('#close').fadeIn(300);
		$('#seek').attr('max',song.duration);
	});

	pause.on('click', function(e) {
		e.preventDefault();
		song.pause();
		$(this).replaceWith('<a class="button  glyphicon glyphicon-play" id="play" href="" title=""></a>');

	});




	$("#seek").bind("change", function() {
		song.currentTime = $(this).val();
		$("#seek").attr("max", song.duration);
	});

	song.addEventListener('timeupdate',function (){
		curtime = parseInt(song.currentTime, 10);
	$("#seek").attr("value", curtime);
	});

});
</script>
<script>
jQuery(document).ready(function() {

	container2 = $('.audio-container2');
	play2 = $('#play2');
	pause2 = $('#pause2');
	close2 = $('#close2');
	song2 = new Audio('clips/02 All Through the Night SAMPLE.ogg','clips/02 All Through the Night SAMPLE.mp3');
	duration2 = song2.duration;


	if (song2.canPlayType('audio/mpeg;')) {
    	song2.type= 'audio/mpeg';
    	song2.src= 'clips/02 All Through the Night SAMPLE.mp3';
	} else {
    	song2.type= 'audio/ogg';
    	song2.src= 'clips/02 All Through the Night SAMPLE.ogg';
	}


	play2.on('click', function(f) {
		f.preventDefault();
		song2.play();

		$(this).replaceWith('<a class="button  glyphicon glyphicon-pause" id="pause2" href="" title=""></a>');
		container2.addClass('containerLarge');
		$('#close2').fadeIn(300);
		$('#seek2').attr('max',song2.duration2);
	});

	pause2.on('click', function(f) {
		f.preventDefault();
		song2.pause();
		$(this).replaceWith('<a class="button  glyphicon glyphicon-play" id="play2" href="" title=""></a>');

	});




	$("#seek2").bind("change", function() {
		song2.currentTime = $(this).val();
		$("#seek2").attr("max", song2.duration);
	});

	song2.addEventListener('timeupdate',function (){
		curtime2 = parseInt(song2.currentTime, 10);
	$("#seek2").attr("value", curtime);
	});

});
</script>

<!--3-->
<script>
jQuery(document).ready(function() {

	container3 = $('.audio-container3');
	play3 = $('#play3');
	pause3 = $('#pause3');
	close3 = $('#close3');
	song3 = new Audio('clips/03 Angel Heart Chapter II SAMPLE.ogg','clips/03 Angel Heart Chapter II SAMPLE.mp3');
	duration3 = song3.duration;


	if (song3.canPlayType('audio/mpeg;')) {
    	song3.type= 'audio/mpeg';
    	song3.src= 'clips/03 Angel Heart Chapter II SAMPLE.mp3';
	} else {
    	song3.type= 'audio/ogg';
    	song3.src= 'clips/03 Angel Heart Chapter II SAMPLE.ogg';
	}


	play3.on('click', function(g) {
		g.preventDefault();
		song3.play();

		$(this).replaceWith('<a class="button  glyphicon glyphicon-pause" id="pause3" href="" title=""></a>');
		container3.addClass('containerLarge');
		$('#close3').fadeIn(300);
		$('#seek3').attr('max',song3.duration);
	});

	pause3.on('click', function(g) {
		g.preventDefault();
		song3.pause();
		$(this).replaceWith('<a class="button  glyphicon glyphicon-play" id="play3" href="" title=""></a>');

	});




	$("#seek3").bind("change", function() {
		song3.currentTime = $(this).val();
		$("#seek3").attr("max", song3.duration);
	});

	song3.addEventListener('timeupdate',function (){
		curtime3 = parseInt(song3.currentTime, 10);
	$("#seek3").attr("value", curtime);
	});

});
</script>

<!--4-->
<script>
jQuery(document).ready(function() {

	container4 = $('.audio-container4');
	play4 = $('#play4');
	pause4 = $('#pause4');
	close4 = $('#close4');
	song4 = new Audio('clips/04 Mother Natures son SAMPLE.ogg','clips/04 Mother Natures son SAMPLE.mp3');
	duration4 = song4.duration;


	if (song4.canPlayType('audio/mpeg;')) {
    	song4.type= 'audio/mpeg';
    	song4.src= 'clips/04 Mother Natures son SAMPLE.mp3';
	} else {
    	song4.type= 'audio/ogg';
    	song4.src= 'clips/04 Mother Natures son SAMPLE.ogg';
	}


	play4.on('click', function(h) {
		h.preventDefault();
		song4.play();

		$(this).replaceWith('<a class="button  glyphicon glyphicon-pause" id="pause4" href="" title=""></a>');
		container4.addClass('containerLarge');
		$('#close4').fadeIn(300);
		$('#seek4').attr('max',song4.duration);
	});

	pause4.on('click', function(h) {
		h.preventDefault();
		song4.pause();
		$(this).replaceWith('<a class="button  glyphicon glyphicon-play" id="play4" href="" title=""></a>');

	});




	$("#seek4").bind("change", function() {
		song4.currentTime = $(this).val();
		$("#seek4").attr("max", song4.duration);
	});

	song4.addEventListener('timeupdate',function (){
		curtime4 = parseInt(song4.currentTime, 10);
	$("#seek4").attr("value", curtime);
	});

});
</script>

<!--5-->
<script>
jQuery(document).ready(function() {

	container5 = $('.audio-container5');
	play5 = $('#play5');
	pause5 = $('#pause5');
	close5 = $('#close5');
	song5 = new Audio('clips/15 Angel Heart Chapter VIII SAMPLE.ogg','clips/15 Angel Heart Chapter VIII SAMPLE.mp3');
	duration5 = song5.duration;


	if (song5.canPlayType('audio/mpeg;')) {
    	song5.type= 'audio/mpeg';
    	song5.src= 'clips/15 Angel Heart Chapter VIII SAMPLE.mp3';
	} else {
    	song5.type= 'audio/ogg';
    	song5.src= 'clips/15 Angel Heart Chapter VIII SAMPLE.ogg';
	}


	play5.on('click', function(j) {
		j.preventDefault();
		song5.play();

		$(this).replaceWith('<a class="button  glyphicon glyphicon-pause" id="pause5" href="" title=""></a>');
		container5.addClass('containerLarge');
		$('#close5').fadeIn(300);
		$('#seek4').attr('max',song5.duration);
	});

	pause5.on('click', function(j) {
		j.preventDefault();
		song5.pause();
		$(this).replaceWith('<a class="button  glyphicon glyphicon-play" id="play5" href="" title=""></a>');

	});




	$("#seek5").bind("change", function() {
		song5.currentTime = $(this).val();
		$("#seek4").attr("max", song5.duration);
	});

	song5.addEventListener('timeupdate',function (){
		curtime5 = parseInt(song5.currentTime, 10);
	$("#seek5").attr("value", curtime);
	});

});
</script>

<!--6-->
<script>
jQuery(document).ready(function() {

	container6 = $('.audio-container4');
	play6 = $('#play6');
	pause6 = $('#pause6');
	close6 = $('#close6');
	song6 = new Audio('clips/18 Unter Beymer SAMPLE.ogg','clips/18 Unter Beymer SAMPLE.mp3');
	duration6 = song6.duration;


	if (song6.canPlayType('audio/mpeg;')) {
    	song6.type= 'audio/mpeg';
    	song6.src= 'clips/18 Unter Beymer SAMPLE.mp3';
	} else {
    	song6.type= 'audio/ogg';
    	song6.src= 'clips/18 Unter Beymer SAMPLE.ogg';
	}


	play6.on('click', function(k) {
		k.preventDefault();
		song6.play();

		$(this).replaceWith('<a class="button  glyphicon glyphicon-pause" id="pause6" href="" title=""></a>');
		container6.addClass('containerLarge');
		$('#close6').fadeIn(300);
		$('#seek6').attr('max',song6.duration);
	});

	pause6.on('click', function(k) {
		k.preventDefault();
		song6.pause();
		$(this).replaceWith('<a class="button  glyphicon glyphicon-play" id="play6" href="" title=""></a>');

	});




	$("#seek6").bind("change", function() {
		song6.currentTime = $(this).val();
		$("#seek6").attr("max", song6.duration);
	});

	song6.addEventListener('timeupdate',function (){
		curtime6 = parseInt(song6.currentTime, 10);
	$("#seek6").attr("value", curtime);
	});

});
</script>

<!-- audio player
<script src="<?php echo constant("SITE_URL");?>dist/js/audio-player.js"></script>-->
