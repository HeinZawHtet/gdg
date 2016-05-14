<footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <ul class="nav nav-pills">
              <li role="presentation"><strong>Company:</strong></li>
              <li role="presentation"><a href="/">Home</a></li>
              <!-- <li role="presentation"><a href="#">About Us</a></li> -->
              <li role="presentation"><a href="/contact.php">Contact Us</a></li>
            </ul>
            <ul class="nav nav-pills">
              <li role="presentation"><strong>Related EB-5:</strong></li>
              <li role="presentation"><a href="#">Overview</a></li>
              <li role="presentation"><a href="/manhattan-tower.php">Manhattan Tower</a></li>
              <li role="presentation"><a href="#">Hudson Yard</a></li>
            </ul>
            <ul class="nav nav-pills">
              <li role="presentation"><strong>Sub:</strong></li>
              <li role="presentation"><a href="http://goldenboutique.net" target="_blank">Golden Boutique</a></li>
            </ul>
          </div>
          <div class="copyright col-md-4 text-right">
            <small>Website is prodly powered by <a href="http://biznet.com.mm" target="_blank">Biznet</a></small>
            <br>
            <small>copyright &copy; 2016 Golden Development Group</small>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="lib/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="lib/no-ui-slider/jquery.nouislider.min.js"></script>
    <script src="lib/headroom.js"></script>
    <script type="text/javascript">

    var header = document.querySelector(".main-nav");
        var headroom = new Headroom(header, {
            offset: '40'
        });
        headroom.init();
    /**
    *
    * heading slider
    *
    */                      
    $('[data-toggle="tooltip"]').tooltip();
    
    $.martanianHeadingSlider = function() {
                  
        var currentHeadingSlideID = 1;
        setInterval( function() {
        
            $.martanianHideSlide( currentHeadingSlideID );
            setTimeout( function() {
            
                currentHeadingSlideID = currentHeadingSlideID == 1 ? 2 : 1;
                $.martanianShowSlide( currentHeadingSlideID );
            
            }, 400 );

        }, 5000 );

    };
    
   /**
    *
    * function hide single heading slide
    *
    */                
    
    $.martanianHideSlide = function( slideID ) {

        var currentSlide = $( '.main-slider .heading-slide-single[data-slide-id="'+ slideID +'"]' );
        
        currentSlide.children( '.flying-1' ).addClass( 'animated bounceOutLeft' );
        currentSlide.children( '.flying-2' ).addClass( 'animated bounceOutRight' );
        
        setTimeout( function() {
        
            currentSlide.children( '.flying-1' ).removeClass( 'animated bounceOutLeft' ).hide();
            currentSlide.children( '.flying-2' ).removeClass( 'animated bounceOutRight' ).hide();
        
            currentSlide.children( '.heading-content' ).addClass( 'animated fadeOutUp' ); 
            currentSlide.addClass( 'animated fadeOut' );
            
            setTimeout( function() {

                currentSlide.children( '.heading-content' ).removeClass( 'animated fadeOutUp' ).hide(); 
                currentSlide.removeClass( 'animated fadeOut' ).hide();
            
            }, 800 );
        
        }, 400 );

    };  
    
   /**
    *
    * function show single heading slide
    *
    */ 
    
    $.martanianShowSlide = function( slideID ) {

        var currentSlide = $( '.main-slider .heading-slide-single[data-slide-id="'+ slideID +'"]' );
        
        currentSlide.children( '.flying-1' ).hide();
        currentSlide.children( '.flying-2' ).hide();
        currentSlide.children( '.heading-content' ).hide();
        
        currentSlide.addClass( 'animated fadeIn' ).show();
        
        setTimeout( function() {
        
            currentSlide.children( '.flying-1' ).addClass( 'animated bounceInLeft' ).show(); 
            currentSlide.children( '.flying-2' ).addClass( 'animated bounceInRight' ).show();
            
            setTimeout( function() {

                currentSlide.children( '.heading-content' ).addClass( 'animated fadeInDown' ).show();
                setTimeout( function() {
                
                    currentSlide.removeClass( 'animated fadeIn' );
                    currentSlide.children( '.flying-1' ).removeClass( 'animated bounceInLeft' ); 
                    currentSlide.children( '.flying-2' ).removeClass( 'animated bounceInRight' );
                    currentSlide.children( '.heading-content' ).removeClass( 'animated fadeInDown' );
                
                }, 1000 );
            
            }, 400 ); 
        
        }, 400 );
        
    };
    
   /**
    *
    * configure image slider
    *
    */                
    
    $.martanianConfigureImageSlider = function() {
    
        $( '.about-us .right .images-slider' ).each( function() {
        
            var slider = $( this );
            var slideID = 1;
            
            slider.children( '.images-slider-single' ).each( function() {
            
                $( this ).attr( 'data-slide-id', slideID );
                slideID++;
            
            });
            
            slider.attr( 'data-active-slide-id', 1 );
            slider.attr( 'data-slides-count', slideID - 1 );
        
        });
    
    };

    $.martanianConfigureInsuranceSlider = function() {
    
        if( windowWidth > 1332 ) {

            var padding = 75;
            var height = 'math';
        }
        
        else if( windowWidth > 932 ) {

            var padding = 50;
            var height = 'math';
        }
        
        else {
        
            var padding = 50;
            var height = 300;
        }
        
        $( '.insurances-slider' ).each( function() {
        
            var slider = $( this ).children( '.center' );
            var descriptions = slider.children( '.content' ).children( '.descriptions' );
            var activeInsurance = slider.children( '.content' ).children( '.tabs' ).children( 'li.active' ).data( 'insurance-key' );
            
            if( typeof activeInsurance == 'undefined' || activeInsurance === false ) {
            
                activeInsurance = slider.children( '.content' ).children( '.tabs' ).children( 'li' ).first().data( 'insurance-key' );
                slider.children( '.content' ).children( '.tabs' ).children( 'li' ).first().addClass( 'active' );
            }

            descriptions.children( '.description[data-insurance-key="'+ activeInsurance +'"]' ).show();
            descriptions.css({ 'height': descriptions.children( '.description[data-insurance-key="'+ activeInsurance +'"]' ).height() });

            slider.children( '.images' ).children( '.image[data-insurance-key="'+ activeInsurance +'"]' ).show();
            
            if( height == 'math' ) height = slider.children( '.content' ).height() + padding;
            slider.children( '.images' ).css({ 'height': height });
        
        });

    }; 
    $.martanianHeadingSlider();   
    </script>
  </body>
</html>