        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $site->url() ?>/assets/js/jquery-1.11.0.min.js"><\/script>')</script>

        <!-- Smooth Scroll - https://github.com/cferdinandi/smooth-scroll -->
        <script src="<?php echo $site->url() ?>/assets/js/smooth-scroll.js"></script>
        <script>
            smoothScroll.init({
              speed: 1000, // Integer. How fast to complete the scroll in milliseconds
              easing: 'easeInOutCubic', // Easing pattern to use
              updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
              offset: 80, // Integer. How far to offset the scrolling anchor location in pixels
            });
        </script>