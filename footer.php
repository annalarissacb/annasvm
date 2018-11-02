
<footer>
    
<!-- INSTAGRAM -->
<div class="container">
    
    <div class="row">
        <div class="col-xs-12">
            <div class="titlesections">
                <div class="left">
                    Follow @Instagram
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-3">
            <div class="instapost">
                <a href="#">
                    <div class="instaicon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    <img src="img/insta1.jpg">
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="instapost">
                <a href="#">
                    <div class="instaicon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    <img src="img/insta2.jpg">
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="instapost">
                <a href="#">
                    <div class="instaicon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    <img src="img/insta3.jpg">
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="instapost">
                <a href="#">
                    <div class="instaicon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    <img src="img/insta4.jpg">
                </a>
            </div>
        </div>

    </div>

</div>
<!-- INSTAGRAM -->

<!-- MENU FOOTER -->
<div class="container">
    <div class="row menufooter">
        <div class="col-xs-12">
            <ul>
                <li><a href="#">Help</a></li>
                <li><a href="#">Status</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- MENU FOOTER -->

</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Holder.JS -->
    <script src="js/holder.js"></script>

    <script type="text/JavaScript">
        function openNav() {
          document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
          document.getElementById("myNav").style.width = "0%";
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            
            /* Every time the window is scrolled ... */
            $(window).scroll( function(){
            
                /* Check the location of each desired element */
                $('.hideme').each( function(i){
                    
                    var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                    var bottom_of_window = $(window).scrollTop() + $(window).height();
                    
                    /* If the object is completely visible in the window, fade it it */
                    if( bottom_of_window > bottom_of_object ){
                        
                        $(this).animate({'opacity':'1'},300);
                            
                    }
                    
                }); 
            
            });
            
        });
    </script>

    <!--FIT VIDEOS -->
    <script src="js/jquery.fitvids.js"></script>
    <script>
        // Basic FitVids Test
        $(".container").fitVids();
    </script>
    <!--FIT VIDEOS -->

    <script type="text/javascript">
        $('div.bannerhome').each(function(){
            var $obj = $(this);

            $(window).scroll(function() {
                var yPos = -($(window).scrollTop() / $obj.data('speed')); 

                var bgpos = '50% '+ yPos + 'px';

                $obj.css('background-position', bgpos );

            }); 
        });
    </script>

  </body>
</html>