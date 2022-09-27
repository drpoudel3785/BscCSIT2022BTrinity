<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    </head>
<body>
    <div class="container">
    <?php include('inc_header.php');?>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">Slider</div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">Thumb</div>
                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6 col-sm-6">Details</div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">Thumb</div>
                        <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6 col-sm-6">Details</div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">Thumb</div>
                        <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-6 col-sm-6">Details</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 com-sm 12">
                <div class="card" style="width: 18rem;">
                    <img class="img-fluid img-thumbnail card-img-top" src="images/car1.jpg" alt="Car1" />
                     <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
               
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 com-sm 12"><img class="img-fluid img-thumbnail" src="images/car2.jfif" alt="car2" /></div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 com-sm 12"><img class="img-fluid img-thumbnail" src="images/car3.jfif" alt="Car3" /></div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 com-sm 12"><img class="img-fluid img-thumbnail" src="images/car4.jfif" alt="Car4" /></div>            
        </div>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">Column1</div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div id="accordion">
                <h3>Section 1</h3>
                <div>
                  <p>
                  Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                  ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                  amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                  odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                  </p>
                </div>
                <h3>Section 2</h3>
                <div>
                  <p>
                  Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                  purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                  velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                  suscipit faucibus urna.
                  </p>
                </div>
                <h3>Section 3</h3>
                <div>
                  <p>
                  Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                  Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                  ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                  lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                  </p>
                  <ul>
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three</li>
                  </ul>
                </div>
                <h3>Section 4</h3>
                <div>
                  <p>
                  Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                  et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                  faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                  mauris vel est.
                  </p>
                  <p>
                  Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                  inceptos himenaeos.
                  </p>
                </div>
              </div>
               

            </div>           
        </div>
        <div class="row">
            <div class="col-xxl-12">Google Map</div>         
        </div>
        <?php include('inc_footer.php');?>
        


    </div><!-- container-->

    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
    
</body>
</html>