
    </div><!-- /.container -->

<div class="footer">
    <div class="container">
    	<p>The contents of this website are protected by copyright. All music, texts and artwork are used by permission. Site and recording © 2013 Rork Music. Music © 2013 Oxingale Music, Rork Music and others. Story text © 2013 Cornelia Funke, Artwork © 2013 Mirada.</p>
        <p>Please <a href="<?php echo constant("SITE_URL");?>contact">contact us</a> if you have a licensing inquiry.</p>
    </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">
    	$(document).ready(function() {
    		$(".fancybox").fancybox({
                'autoSize' : false,
                'width' : 1040,
                'height' : 'auto'
            });
            $("body").css("overflow","hidden"); // hide body scrollbar
            $("body").css("overflow","auto"); // show body scrollbar
    	});
        (function ( window, document, undefined ) {

    /*
    * Grab all iframes on the page or return
    */
    var iframes = document.getElementsByTagName( 'iframe' );

    /*
    * Loop through the iframes array
    */
    for ( var i = 0; i < iframes.length; i++ ) {

        var iframe = iframes[i],

        /*
        * RegExp, extend this if you need more players
        */
        players = /www.youtube.com|player.vimeo.com/;

        /*
        * If the RegExp pattern exists within the current iframe
        */
        if ( iframe.src.search( players ) > 0 ) {

            /*
            * Calculate the video ratio based on the iframe's w/h dimensions
            */
            var videoRatio        = ( iframe.height / iframe.width ) * 100;

            /*
            * Replace the iframe's dimensions and position
            * the iframe absolute, this is the trick to emulate
            * the video ratio
            */
            iframe.style.position = 'absolute';
            iframe.style.top      = '0';
            iframe.style.left     = '0';
            iframe.width          = '100%';
            iframe.height         = '100%';

            /*
            * Wrap the iframe in a new <div> which uses a
            * dynamically fetched padding-top property based
            * on the video's w/h dimensions
            */
            var wrap              = document.createElement( 'div' );
            wrap.className        = 'fluid-vids';
            wrap.style.width      = '100%';
            wrap.style.position   = 'relative';
            wrap.style.paddingTop = videoRatio + '%';

            /*
            * Add the iframe inside our newly created <div>
            */
            var iframeParent      = iframe.parentNode;
            iframeParent.insertBefore( wrap, iframe );
            wrap.appendChild( iframe );

        }

    }

})( window, document );
$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) {
    e.stopPropagation();
});
    </script>
  </body>
</html>
