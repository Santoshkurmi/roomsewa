<style>
  .recommendation-loadmore {

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 20px;

  }

  .myclass {
    box-shadow: black;
    border-radius: 10px;
    stop-color: red;
    color: hotpink;
    background-color: black;
    font-size: 2.5rem;

  }

  .myclass :hover {
    background-color: orange;
    border-radius: 10px;
    color: white;

  }

  .design {
    font-size: 40px;
    font-weight: bold;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: black;

  }
</style>


<?php
include('config/config.php');
include('review-engine.php');
include('booking-engine.php');

?>


<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">


      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">





          <div class="item active">
            <img class="d-block img-fluid" src="/owner/<?php echo $property['p_photo'] ?>" alt="First slide"
              width="100%" style="max-height: 600px; min-height: 600px;">
          </div>




        </div>


        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
    <div class="col-sm-6">
      <center>
        <h2 class="design">
          <?php echo $property['property_type'] ?>
        </h2>
      </center>
      <div class="row">
        <div class="col-sm-6">

          <div class="row">
            <div class="col-sm-6">
              <?php
              $dataToPrint = ['Country' => 'country', 'Province' => 'province',
               'Zone' => 'zone','District'=>'district','City'=>'city',
               'VDC/Municipality'=>'vdc_municipality','Ward No.'=>'ward_no',
               'Tole'=>'tole','Contact No'=>'contact_no',
               'Estimated Price'=>'estimated_price'];
              ?>


              <table>
              <?php foreach($dataToPrint as $label=>$key){?>
                <tr>
                  <td>
                    <h4 class="simple"><?php echo $label ?>:</h4>
                  </td>
                  <td>
                    <h4 class="simple">
                      <?php echo $property[$key]; ?>
                    </h4>
                  </td>
                </tr>
                <?php }?>
              </table>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
        <?php
              $dataToPrint = ['Total Rooms' => 'total_rooms', 'Bedrooms' => 'bedrooms',
               'Living Room' => 'living_room','Kitchen'=>'kitchen','Bathroom'=>'bathroom',
               'booked'=>'booked','Description.'=>'description'];
              ?>
          <table>
          <?php foreach($dataToPrint as $label=>$key){?>
            
            <tr>
              <td>
                <h4 class="simple">Total Rooms:</h4>
              </td>
              <td>
                <h4 class="simple">
                  <?php echo $property['total_rooms']; ?>
                </h4>
              </td>
            </tr>
            <?php }?>
           
          </table>
        </div>
      </div>

    </div>

  </div>
  <br>

  <?php

//booking button to book the book
  if ($auth) {
    ?>
    <form method="POST" action="">
      <div class="row">
        <div class="col-sm-6">
          <?php
          $booked = $property['booked'];

          if ($booked == 'No') { ?>
            <input type="hidden" name="property_id" value="<?php echo $property['property_id']; ?>">
            <input type="submit" class="btn btn-lg btn-primary" name="book_property" style="width: 100%"
              value="Book Property">
          <?php } else { ?>
            <input type="submit" class="btn btn-lg btn-primary" style="width: 100%" value="Property Booked" disabled>
          <?php } ?>
        </div>

    </form>


    <form method="POST" action="../roomsewa/chat/index.php">
      <div class="col-sm-6">
        <input type="hidden" name="sender_id" value="<?php echo $tenant_id; ?>">
        <input type="hidden" name="receiver_id" value="<?php echo $rows['owner_id']; ?>">
        <input type="submit" class="btn btn-lg btn-success" name="send_message" style="width: 100%" value="Send Message">

      </div>
    </form>
  </div>

<?php } else {
    echo "<center><p class='notification'>You should login to book property</p></center>";
  }


  ?>

<br>

<!-- map code started here -->
<script type='text/javascript'
  src='https://www.bing.com/api/maps/mapcontrol?key=AlSfV3wSTlPFqxEdS97v1d1ZK25Qg4OxZerOAjFYQPZwtY4bQqhz4jDRou_kCmbJ&callback=loadMap'
  async defer></script>
<style>
  #map {
    height: 300px;
    width: 100%;
    border-radius: 10px;
    border-width: 5px;
    border-color: green;
  }
</style>
<!-- map here -->
<div id="map">
  <script>
    function loadMap() {
      <?php

      $latitude = $property['latitude'];
      $longitude = $property['longitude'];
      ?>
      var map = new Microsoft.Maps.Map('#map', {
        credentials: 'AlSfV3wSTlPFqxEdS97v1d1ZK25Qg4OxZerOAjFYQPZwtY4bQqhz4jDRou_kCmbJ',
        center: new Microsoft.Maps.Location(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
        zoom: 5.5
      });

      // Fetch locations from the database and add markers to the map


      // Add marker using fetched data
      addMarker(<?php echo $latitude; ?>, <?php echo $longitude; ?>);

      function addMarker(latitude, longitude) {
        var location = new Microsoft.Maps.Location(latitude, longitude);
        var pin = new Microsoft.Maps.Pushpin(location);
        map.entities.push(pin);
      }
    }

    // Load the map after the page has fully loaded
    document.addEventListener('DOMContentLoaded', loadMap);
  </script>


</div>
<!-- map here -->

<br>



</div>

<div class="recommendation-loadmore">


  <div class="myclass">
    <form action="/load-more.php" method="post">
      <button type="submit" class="btn btn-outline-dark" name="load more" style="width: 300px"
        background-color="blue">Load More</button>
    </form>
  </div>
  <?php if ($auth) { ?>


    <div class="myclass">
      <form id="recommendPropertyForm" action="./recommendation.php" method="post">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <input type="hidden" name="property_id" value="<?php echo $property_id; ?>">
        <button type="submit" class="btn btn-outline-dark" name="recommended" style="width: 300px">Recommended</button>
      </form>
    </div>
  <?php } ?>
</div>


<!-- Review Code started here  -->

<div class="container-fluid">
  <h2>Review Property:</h2>
  <div class="well well-sm">
    <div class="text-right">
      <?php

      if ($auth) {
        ?>
        <a class="btn btn-success btn-info" href="#reviews-anchor" style="width: 100%" id="open-review-box">Leave a
          Review</a>
      </div>

      <div class="row" id="post-review-box" style="display:none;">
        <div class="col-md-12">
          <form accept-charset="UTF-8" method="POST">
            <input name="property_id" type="hidden" value="<?php echo $property['property_id']; ?>">
            <input id="ratings-hidden" name="rating" type="hidden">
            <textarea class="form-control animated" cols="50" id="new-review" name="comment"
              placeholder="Enter your review here..." rows="5"></textarea>

            <div class="text-right">
              <div class="stars starrr" data-rating="0"></div>
              <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                <span class="glyphicon glyphicon-remove"></span>Cancel</a>
              <button class="btn btn-success btn-lg" type="submit" name="review">Save</button>
            </div>
          </form>
        </div>
      </div>
    <?php } else {
        echo "<center>You should login to review property.</center>";
      }
      ?>


  </div>

</div>


<?php


echo '<div class="container-fluid">';
echo '<h4 class="simple">Reviews:</h4>';
echo '</div>';

foreach ($reviews as $review) {
  ?>
  <div class="container-fluid">
    <ul>
      <li>
        <?php echo $review['comment']; ?> &nbsp;&nbsp;&nbsp;(<span class="glyphicon glyphicon-star-empty"
          style="size: 50px;">
          <?php echo $review['rating']; ?>
        </span>)
      </li>
    </ul>
  </div>


  <?php
}

?>
<br><br>








<style>
  .simple {
    font-size: 2.25rem;
    color: black;
    font-family: sans-serif;
  }

  h4 {
    font-size: 20px;
  }

  .notification {
    font-size: 2.5rem;
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color: rgba(255, 20, 25, 1);
    color: white;
    border-radius: 10px;
    text-transform: capitalize;
  }

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td,
  th {
    text-align: left;
    padding: 1px;
  }
</style>

<style>
  .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
  }

  .stars {
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
  }
</style>
