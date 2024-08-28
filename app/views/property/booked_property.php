<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

        margin: auto;
        padding: 10px;
        /* margin: 30px 0px; */
        width: 200px;
        text-align: center;
        font-family: arial;
        display: inline;
        display: flex;
        flex-direction: column;
        border-radius: 10px;
    }

    .booked_cont {
        padding: 30px;
        display: flex;
        flex-wrap: wrap;
        gap: 30px;

    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        opacity: 0.8;
    }

    .container {
        padding: 2px 16px;
    }

    .btn {
        width: 100%;
    }

    .image {
        border-radius: 10px;
    }
</style>


<center>
    <h1>Booked Properties</h1>
</center>


    <div class="booked_cont">
    <?php foreach ($properties as $property) { ?>


        <div class="card">
            <img class="image" src="/owner/<?php echo $property['p_photo'] ?>">
            <h4><b><?php echo $property['property_type']; ?></b></h4>
            <h4><b>Rs.<?php echo $property['estimated_price']; ?></b></h4>
            <p><?php echo $property['city'] . ', ' . $property['district'] ?></p>
            <p> <a href="/property/<?php echo $property['id'] ?>" class="btn btn-lg btn-primary btn-block">View Property
                </a><br>'
            </p><br>
        </div>
        <?php } ?>



</div>