@extends('layouts.master')

@section('title')
  Contact Us
@endsection

@section('content')

<section id="hero" class="hero-full text-light parallax-section" data-parallax-image="{{ asset('files/uploads/contact.png')}}">

      <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2" style="color:white;">Contact</h4>
          <hr class="zigzag mini colored">
          <h1 style="color:red;"><strong>Apa yang bisa kami bantu?</strong></h1>
      </div>

  </section>


<section id="page-body" class="notoppadding">

     <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
        <div class="column one-third align-center text-light has-animation" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Alamat</h5>
              <hr class="zigzag mini">
              <p>Jl. Banda Aceh-Medan Km. 280,3, Buketrata<br>Mesjid Punteut, Blang Mangat, Kota Lhokseumawe, Aceh 24301, Indonesia </p>
            <div class="spacer-medium"></div>
          </div>
          <div class="column one-third align-center text-light has-animation" data-delay="100" style="background:#000000;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Handphone</h5>
              <hr class="zigzag mini">
              <p>+6282360602080</p>
            <div class="spacer-medium"></div>
          </div>
          <div class="column one-third last-col align-center text-light has-animation" data-delay="200" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Email</h5>
              <hr class="zigzag mini">
              <p>ichsan.mulya@outlook.com</p>
            <div class="spacer-medium"></div>
          </div>
        </div>

      <div class="spacer-big"></div>

    <div class="wrapper-small">

          <div class="align-center">
        <hr class="zigzag medium">
          <div class="spacer-mini"></div>
            <h5 class="subtitle-2 colored">Get Social</h5>
              <ul class="socialmedia-widget style-circled size-small hover-slide-1">
                  <li class="facebook"><a href="#"></a></li>
                  <li class="twitter"><a href="#"></a></li>
                  <li class="instagram"><a href="#"></a></li>
              </ul>
          <div class="spacer-mini"></div>
        <hr class="zigzag medium">
          </div>

        <div class="spacer-medium"></div>

          <h3 class="align-center"><strong>Punya Pertanyaan?</strong></h3>
          <h5 class="subtitle-2 align-center">Kami Siap Membantu Anda<br> Tinggalkan Pertanyaan pada kolom di bawah ini !!</h5>


          <div class="spacer-medium"></div>
          <form id="contact-form" class="checkform sendemail" action="{{ url('p/contact') }}" method="post">

            {{ csrf_field() }}

              <div class="form-row">
                  <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                  <input type="text" name="name" id="name" class="name req" value="" />
              </div>

              <div class="form-row">
                  <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                  <input type="text" name="email" id="email" class="email req" value="" />
              </div>

              <div class="form-row">
                  <label for="subject">Subject <abbr title="required" class="required">*</abbr></label>
                  <input type="text" name="subject" id="subject" class="subject req" value="" />
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
              </div>

              <div class="form-row">
                  <input type="submit" name="submit" class="submit" value="Send Message" />
              </div>

              <input type="hidden" name="subject" value="Contact Subject" />
              <input type="hidden" name="fields" value="name,email,message" />
        </form>

      </div>

      <div class="spacer-big"></div>

      <div id="map1" class="google-map " style="height:400px;"></div>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCGBmXJ6bMftK_U47D-iXClTL6oe6KWmIM"></script>
      <script type="text/javascript">
    function mapinitialize1() {
      var latlng = new google.maps.LatLng(5.119553,97.157197);
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

      var image = new google.maps.MarkerImage("{{ asset('files/uploads/map-pin.png')}}", null, null, null, new google.maps.Size(51,68));
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        position: map.getCenter()
      });

      var contentString = "PNL PROGRAMMER COMMUNITY";
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
