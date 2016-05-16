<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Golden Development Group</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/animate.css" rel="stylesheet">
    <link href="lib/no-ui-slider/jquery.nouislider.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/earlyaccess/notosansmyanmar.css' rel='stylesheet' type='text/css'>
    <link href="/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="main-nav navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="img/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Related EB-5 Program <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/manhattan-tower.html">Manhattan Tower</a></li>
                <li><a href="/hudson-yards.html">Hudson Yards</a></li>
                <li><a href="/letters-of-approval.html">Letters of Approval</a></li>
              </ul>
            </li>
            <!-- <li><a href="#">About Us</a></li> -->
            <li><a href="/contact.html">Contact Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <div class="page-header" style="background: url('img/manhattan-2.jpg')">
    <div class="container">
      <h1>Letters of Approval</h1>
    </div>
  </div>
  <div class="container margin-top">
    <div class="row">
      <div class="col-md-3">
        <a href="img/letter-1.jpg" data-toggle="lightbox" data-title="Hudson Yards ERY Platform Subscriber I-526"><img src="img/letter-1-sm.jpg" class="img-responsive"></img></a>
        <h3>Approval of Hudson Yards ERY Platform Subscriber I-526</h3>
      </div>
      <div class="col-md-3">
        <a href="img/letter-2.jpg" data-toggle="lightbox" data-title="Approval of Related EB-5 Regional Center"><img src="img/letter-2-sm.jpg" class="img-responsive"></img></a>
        <h3>Approval of Related EB-5 Regional Center</h3>
      </div>
      <div class="col-md-3">
        <a href="img/letter-3.jpg" data-toggle="lightbox" data-title="Letter of Government Support"><img src="img/letter-3-sm.jpg" class="img-responsive"></img></a>
        <h3>Letter of Government Support</h3>
      </div>
      <div class="col-md-3">
        <a href="img/letter-4.jpg" data-toggle="lightbox" data-title="Letter of Government Support"><img src="img/letter-4-sm.jpg" class="img-responsive"></img></a>
        <h3>Letter of Government Support</h3>
      </div>
    </div>
  </div>

  <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <ul class="nav nav-pills">
                <li role="presentation"><strong>Company:</strong></li>
                <li role="presentation"><a href="/">Home</a></li>
                <!-- <li role="presentation"><a href="#">About Us</a></li> -->
                <li role="presentation"><a href="/contact.html">Contact Us</a></li>
              </ul>
              <ul class="nav nav-pills">
                <li role="presentation"><strong>Related EB-5:</strong></li>
                <li role="presentation"><a href="#">Overview</a></li>
                <li role="presentation"><a href="/manhattan-tower.html">Manhattan Tower</a></li>
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
      <script src="lib/ekko-lightbox.min.js"></script>
      <script type="text/javascript">

      var header = document.querySelector(".main-nav");
          var headroom = new Headroom(header, {
              offset: '40'
          });
          headroom.init();

      $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox({
              scale_height: false
          });
      });
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