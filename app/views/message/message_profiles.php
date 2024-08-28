<style>
    
    
     a{
        display: block;
    }
    .parent {
        height: 70vh;
        padding: 100px;
        padding-bottom: 20px;
        display: flex;
        flex-direction: column;
    }

    .profiles {
        padding: 10px;
        margin-top: 20px;
        border: 1px solid black;
        border-radius: 10px;

    }

    .list {
        overflow-y: auto;
        flex-grow: 1;

    }

    .profiles:hover {
        background-color: gray;
        color: white;
    }
</style>


<div class="parent">
    <h3>Profiles</h3>
    <div class="list">

    <?php foreach($profiles as $profile) {?>
        <a href="/message/<?php echo $profile['id'] ?>" class="profiles">
            <div class="person">
                <h4> <?php echo $profile['full_name'] ?> </h4>
            </div>
    </a>

        <?php }?>


    </div>

</div>