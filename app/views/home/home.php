

<link rel="stylesheet" href="/public/css/home_style.css">

<div class="bg">
    <div class="hero-text">
        <h1>FIND PERFECT ROOMS </h1>
        <h2>FOR LIVING With</h2>
        <h3>RoomSewa</h3>
    </div>

</div> <br>
<div class="container active-cyan-4 mb-4 inline">
    <div class="form-container">
        <form id="search" method="POST" action="/search_property">
            <input id="search_location" type="text" placeholder="Enter location to search house." name="search_property" aria-label="Search"
                required>
            <select id="property_type" name="property_type">
                <option value="">Property Type</option>
                <option value="roomrent">Room Rent</option>
                <option value="flatrent">Flat Rent</option>
            </select>
            <select id="price_range" name="price_range">
                <option value="">Price Range</option>
                <option value="0-5000">NRs.0 - NRs.5000</option>
                <option value="5000-10000">NRs. 5000 - NRs.10000</option>
                <option value="10000-20000">NRs.10000 - NRs.20000</option>
                <option value="20000-100000000">NRs.20000+</option>
            </select>
            <button type="button" name="submit">Search</button>
        </form>
    </div>
</div>

<!-- //show properties -->

<div id="card_template" style="display: none;" class="card">
        <img class="image" class="image" src="owner/ here location of the iamge" alt="Property Image">

        <div class="label">
                    <span class="label available_or_not available">Available or Booked</span>
        </div>
        <div class="label">
                    <span class="price label available"></span>
        </div>
        <div class="property-info">
        <h4><b class="type">property_type</b></h4>
        <p class="city_dis">city_and_district</p>
        <a  href="/property/property_id" class="btn link">View Property</a>
        </div>
    </div>

    
    <h2 id="helper" style="display: none;margin-left: 100px;">Search Results</h2>


<div id="list_box" class="container">

    

<?php foreach($properties as $property) {?>
    <div class="card">
        <?php if (isset($property['p_photo'])) { ?>
        <img class="image" src="owner/<?php echo $property['p_photo'] ?>" alt="Property Image">
        <?php } ?>
        <div class="label">
                    <span class="label available"><?php echo $property['booked'] == "No"? 'Available': 'Booked' ?></span>
        </div>
        <div class="label">
                    <span class="label available">Rs. <?php echo $property['estimated_price'] ?></span>
        </div>
        <div class="property-info">
        <h4><b><?php echo $property['property_type']; ?></b></h4>
        <p><?php echo $property['city'].', '.$property['district']; ?></p>
        <a href="/property/<?php echo $property['property_id']; ?>" class="btn">View Property</a>
        </div>
    </div>

    <?php }?>

 
</div>

<script src="/public/js/search.js"></script>



<br>
