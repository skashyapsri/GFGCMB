<?php
require_once 'header.php';
?>

<div class="container">


  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">
      <strong>Feedback Form</strong>
    </h2>
    <hr class="divider">
    <div id="container2">
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf8TtJORN8crQXYbW4bCLig_e8wuq7PqW8Ymn43HVW5dR89Lg/viewform?embedded=true" width="100%" height="1500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </div>
  </div>
  <div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">
      <strong>Contact</strong>
    </h2>
    <hr class="divider">
    <div class="row">
      <div class="col-lg-8">
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDy7-k3aoklchxeq2B41yH-p3UHKDWc8ZQ'></script><div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="googlemapsgenerator.com/en/">http://www.googlemapsgenerator.com/en/</a></small></div><div><small><a href="https://ww.premiumlinkgenerator.com/uploaded-net">https://ww.premiumlinkgenerator.com/uploaded-net</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(12.9664084,77.53943019999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.9664084,77.53943019999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Government First Grade College Malleshwaram</strong><br>Government First Grade College Malleshwaram<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

      </div>
      <div class="col-lg-4">
        <h5 class="mb-0">Phone:</h5>
        <div class="mb-4">+9180&nbsp;23560570</div>
        <h5 class="mb-0">Email:</h5>
        <div class="mb-4">
          <a href="mailto:ppgov15-cce-kabn@nic.in">ppgov15-cce-kabn@nic.in</a>
        </div>
        <h5 class="mb-0">Address:</h5>
        <div class="mb-4">
          Government First Grade College, 18th Cross, Malleshwaram
          <br>
          Bengaluru - 560&nbsp;032
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container -->

<?php
require_once 'footer.php';
?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Zoom when clicked function for Google Map -->
<script>
  $('.map-container').click(function () {
    $(this).find('iframe').addClass('clicked')
  }).mouseleave(function () {
    $(this).find('iframe').removeClass('clicked')
  });
</script>

</body>

</html>
