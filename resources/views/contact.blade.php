@extends('layouts.master')

@section('title')
  Service
@endsection

@section('content')
  <!-- HERO  -->
<section id="hero" class="hero-full text-light parallax-section" data-parallax-image="files/uploads/hero-contact-1.jpg">

      <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2">Contact</h4>
          <hr class="zigzag mini colored">
          <h1><strong>How can we help you</strong></h1>
      </div> <!-- END #page-title -->

  </section>
  <!-- HERO -->


<!-- PAGEBODY -->
<section id="page-body" class="notoppadding">

     <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
        <div class="column one-third align-center text-light has-animation" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Adress</h5>
              <hr class="zigzag mini">
              <p>173 Elizabeth Street<br>67000 Sydney </p>
            <div class="spacer-medium"></div>
          </div>
          <div class="column one-third align-center text-light has-animation" data-delay="100" style="background:#000000;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Phone</h5>
              <hr class="zigzag mini">
              <p>+12 212-568-999+12<br>323-999-568</p>
            <div class="spacer-medium"></div>
          </div>
          <div class="column one-third last-col align-center text-light has-animation" data-delay="200" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Email</h5>
              <hr class="zigzag mini">
              <p>sayhello@sudo.com<br>appointment@sudo.com</p>
            <div class="spacer-medium"></div>
          </div>
      </div> <!-- END .column-section -->

      <div class="spacer-big"></div>

    <div class="wrapper-small">

          <div class="align-center">
        <hr class="zigzag medium">
          <div class="spacer-mini"></div>
            <h5 class="subtitle-2 colored">Get Social</h5>
              <ul class="socialmedia-widget style-circled size-small hover-slide-1">
                  <li class="facebook"><a href="#"></a></li>
                  <li class="twitter"><a href="#"></a></li>
                  <li class="dribbble"><a href="#"></a></li>
                  <li class="behance"><a href="#"></a></li>
                  <li class="instagram"><a href="#"></a></li>
              </ul>
          <div class="spacer-mini"></div>
        <hr class="zigzag medium">
          </div>

        <div class="spacer-medium"></div>

          <h3 class="align-center"><strong>Got a Question?</strong></h3>
          <h5 class="subtitle-2 align-center">Have a project you're interested in discussing with us?<br> Drop us a line below, we'd love to talk.</h5>


          <div class="spacer-medium"></div>
          <form id="contact-form" class="checkform sendemail" action="http://www.spab-rice.com/themeforest/sudo/demo/php/contact-send.php" method="post">
              <div class="form-row">
                  <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                  <input type="text" name="name" id="name" class="name req" value="" />
              </div>

              <div class="form-row">
                  <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                  <input type="text" name="email" id="email" class="email req" value="" />
              </div>

              <div class="form-row">
                  <label for="message">Message <abbr title="required" class="required">*</abbr></label>
                  <textarea name="message" id="message" class="message req" rows="15" cols="50"></textarea>
              </div>

              <div class="form-row form-note">
                  <div class="alert-error">
                    <h5>Something went wrong</h5>
                      Please check your entries!
                  </div>
              </div>

              <div class="form-row hidden">
                  <input type="text" id="form-check" name="form-check" value="" class="form-check" />
              </div> <!-- Spam check field -->

              <div class="form-row">
                  <input type="submit" name="submit" class="submit" value="Send Message" />
              </div>

              <input type="hidden" name="subject" value="Contact Subject Sudo html" />
              <input type="hidden" name="fields" value="name,email,message" />
        </form>

      </div> <!-- END .wrapper-small -->

      <div class="spacer-big"></div>

      <div id="map1" class="google-map " style="height:400px;"></div>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script type="text/javascript">
    function mapinitialize1() {
      var latlng = new google.maps.LatLng(-33.86938,151.204834);
      var myOptions = {
        zoom: 14,
        center: latlng,
        scrollwheel: false,
        scaleControl: false,
        disableDefaultUI: false,
        styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}],
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map1"),myOptions);

      var image = new google.maps.MarkerImage("files/uploads/map-pin.png", null, null, null, new google.maps.Size(51,68));
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        position: map.getCenter()
      });

      var contentString = "Agency Adress / Info";
      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      google.maps.event.addListener(marker, "click", function() {
        infowindow.open(map,marker);
      });


    }
    mapinitialize1();
  </script>

</section>
<!-- PAGEBODY -->
@endsection