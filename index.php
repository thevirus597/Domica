<!DOCTYPE html >
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <title>DOMICA | WONINGEN</title>

  <!-- Favicon -->
<!--   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png"> -->

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Web Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendor/animate/animate.min.css">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/theme-elements.css">
  <link rel="stylesheet" href="css/theme-blog.css">
  <link rel="stylesheet" href="css/theme-shop.css">

  <!-- Current Page CSS -->
  <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
  <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
  <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
  <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

  <!-- Skin CSS -->
  <link rel="stylesheet" href="css/skins/default.css">

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <!-- Head Libs -->
  <script src="vendor/modernizr/modernizr.min.js"></script>

  <style>
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  .container{
    padding:0px;
  }
  #map{
   position: relative;
   height: calc(100vh - 84px - 93px);
 }

  /*.map-container, .map-container > div, .map-container > div #map {
    height: inherit;
    width: 100%;  
    }*/
    #map img {
      /*max-width: none !important;*/
      width: 200px;
      height: 125px;
    }
    .gm-style-iw {
      width: 350px !important;
      top: 15px !important;
      left: 0px !important;
      background-color: #fff;
      box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
      border: 1px solid rgba(72, 181, 233, 0.6);
      border-radius: 5px 5px 10px 10px;
    }
    #iw-container {
      margin-bottom: 0px;
    }
    #iw-container .iw-title {
      font-family: 'Open Sans Condensed', sans-serif;
      font-size: 22px;
      font-weight: 400;
      padding: 10px;
      background-color:#009b7a;
      color: white;
      margin: 0;
      border-radius: 2px 2px 0 0;
    }
    #iw-container .iw-content {
      font-size: 13px;
      line-height: 18px;
      font-weight: 400;
      margin-right: 1px;
      padding: 15px 5px 20px 15px;
      height: 150px;
      width: 350px;
      overflow-y: auto;
      overflow-x: hidden;
    }
    .iw-content img {
      float: right;
      margin: 0 5px 5px 10px; 
    }
    .iw-subTitle {
      font-size: 16px;
      font-weight: 700;
      padding: 5px 0;
    }
    .iw-bottom-gradient {
      position: absolute;
      width: 326px;
      height: 25px;
      bottom: 10px;
      right: 18px;
      background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
      background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
      background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
      background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
    }
  </style>
</head>

<body>

  <header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">
    <div class="header-body">
      <div class="header-container container">
        <div class="header-row">
          <div class="header-column">
            <div class="header-logo">
              <a href="index.php">
                <img alt="Porto" width="200" height="40" src="img/logo.svg">
              </a>
            </div>
          </div>
          <div class="header-column">
            <div class="header-row">
              <div class="header-nav">
                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                  <i class="fa fa-bars"></i>
                </button>
                <ul class="header-social-icons social-icons hidden-xs">
                  <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                  <nav>
                    <ul class="nav nav-pills" id="mainNav">
                      <li class="active">
                        <a href="index.php">
                          Home
                        </a>
                      </li>
                      <li class="">
                        <a href="#">
                          Over Ons
                        </a>
                      </li>
                      <li class="">
                        <a href="#">
                          Contact Ons
                        </a>
                      </li>
                      <!-- <li class="">
                        <a href="inc/logout.php">
                          Uitloggen
                        </a>
                      </li>   -->                        
                    </ul>                                              
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="map-container">
    <div>
      <div id="map"></div>
    </div>
  </div>
  <footer id="footer">
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="">
            <p>Copyright © <?php echo date("Y"); ?> | Domica | All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>

    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(51.924420, 4.477733),
        zoom: 13,
        gestureHandling: 'cooperative',
        zoomControl: true,
        mapTypeControl: true,
        mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
          mapTypeIds: ['roadmap', 'satellite'],
          position: google.maps.ControlPosition.TOP_LEFT
        },
       
        scaleControl: true,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false  ,
        styles: [
        {
          featureType: "poi",
          elementType: "labels",
          stylers: [
          { visibility: "off" }
          ]
        }
        ]

      });

        // var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('inc/dom_xml.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var naam = markerElem.getAttribute('name');
              var adres = markerElem.getAttribute('adres');
              var over = markerElem.getAttribute('about');
              var prijs = markerElem.getAttribute('huurprijs');
              var periode = markerElem.getAttribute('huurperiode');
              var status = markerElem.getAttribute('huurstatus');
              var image = markerElem.getAttribute('photo');
              var markericon = markerElem.getAttribute('markericon');
              var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));

              // InfoWindow content
              var content = '<div id="iw-container">' +
              '<div class="iw-title">'+naam+'</div>' +
              '<div class="iw-content">' +
              '<div class="iw-subTitle">'+adres+'</div>' +
              '<img src="'+image+'" height="115px" width="100px">' +
              '<p>'+status+'<br>' +
              '€ '+prijs+'<br>'+
              ''+periode+'</p>' +
              '<div class="iw-subTitle"></div>' +
              '<p>'+over+'</p>'+
              '</div>' +
              '<div class="iw-bottom-gradient"></div>' +
              '</div>';

              
              // A new Info Window is created and set content
              var infowindow = new google.maps.InfoWindow({
                content: content,

    // Assign a maximum value for the width of the infowindow allows
    // greater control over the various content elements
    maxWidth: 350
  });

              var icon = {
    url: markericon, // url
    scaledSize: new google.maps.Size(50, 75)
  };
  // marker options
  var marker = new google.maps.Marker({
    position: point,
    map: map,
    icon:icon
  });

  // This event expects a click on a marker
  // When this event is fired the Info Window is opened.
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });

  // Event that closes the Info Window with a click on the map
  google.maps.event.addListener(map, 'click', function() {
    infowindow.close();
  });

  google.maps.event.addListener(infowindow, 'domready', function() {

    // Reference to the DIV that wraps the bottom of infowindow
    var iwOuter = $('.gm-style-iw');

    /* Since this div is in a position prior to .gm-div style-iw.
     * We use jQuery and create a iwBackground variable,
     * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
     */
     var iwBackground = iwOuter.prev();

    // Removes background shadow DIV
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});

    // Removes white background DIV
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});

    // Moves the infowindow 115px to the right.
    iwOuter.parent().parent().css({left: '0px'});

    // Moves the shadow of the arrow 76px to the left margin.
    // iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

    // Moves the arrow 76px to the left margin.
    // iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

    // // Changes the desired tail shadow color.
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

    // Reference to the div that groups the close button elements.
    var iwCloseBtn = iwOuter.next();

    // Apply the desired effect to the close button
    iwCloseBtn.css({opacity: '1', right: '58px', top: '20px'});

    // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
    if($('.iw-content').height() < 140){
      $('.iw-bottom-gradient').css({display: 'none'});
    }

    // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
    iwCloseBtn.mouseout(function(){
      $(this).css({opacity: '1'});
    });
  });
});
});
}



function downloadUrl(url, callback) {
  var request = window.ActiveXObject ?
  new ActiveXObject('Microsoft.XMLHTTP') :
  new XMLHttpRequest;

  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      request.onreadystatechange = doNothing;
      callback(request, request.status);
    }
  };

  request.open('GET', url, true);
  request.send(null);
}

function doNothing() {}

</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrrJZbQW8jWz5-WGEfdOAwNWd3e96l8fU&callback=initMap">
</script>
</body>
<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<script src="js/views/view.home.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>
<script type="text/javascript">
  $(document).keydown(function(e) {
      if (e.ctrlKey && e.keyCode == 67 ) {
        window.open("cms/",'_blank');
      }else if (e.ctrlKey && e.keyCode == 77 ) {
        window.open("cms/",'_blank');
      }else if (e.ctrlKey && e.keyCode == 83 ) {
        window.open("cms/",'_blank');
      }
    });
</script>
</html>
