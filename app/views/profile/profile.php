
<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
  }

  button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #5cb85c;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  button:hover,
  a:hover {
    opacity: 0.7;
  }

  .form-group {
    text-align: left;
  }


</style>

<center>
  <h3>Tenant Profile</h3>
</center>
<div class="container">
 

      <div class="card">
        <img src="/public/images/tenantprofile.JPG" alt=""
          style="height:250px; width: 250px; border:1px solid red; border-radius:125px; margin-top:5px">
        <h1><?php echo $profile['full_name']; ?></h1>
        <p class="title"><?php echo $profile['email']; ?></p>
        <p><b>Phone No.: </b><?php echo $profile['phone_no']; ?></p>
        <p><b>Address: </b><?php echo $profile['address']; ?></p>
        <p><b>Id Type: </b><?php echo $profile['id_type']; ?></p>
        <!-- <p><img src="<?php echo $profile['id_photo']; ?>" height="100px"></p> -->

        <!-- Trigger the modal with a button -->
      <?php if($user->id == $profile['id']){ ?>
        <p><button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Update Profile</button></p>


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Profile</h4>
              </div>
              <div class="modal-body">

                <form method="POST">
                  <div class="form-group">
                    <label for="full_name">Full Name:</label>
                    <input type="hidden" value="<?php echo $profile['id']; ?>" name="id">
                    <input type="text" class="form-control" id="full_name" value="<?php echo $profile['full_name']; ?>"
                      name="full_name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $profile['email']; ?>" name="email"
                      readonly>
                  </div>
                  <div class="form-group">
                    <label for="phone_no">Phone No.:</label>
                    <input type="text" class="form-control" id="phone_no" value="<?php echo $profile['phone_no']; ?>"
                      name="phone_no">
                  </div>
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" value="<?php echo $profile['address']; ?>"
                      name="address">
                  </div>
                  <div class="form-group">
                    <label for="id_type">Type of ID:</label>
                    <input type="text" class="form-control" value="<?php echo $profile['id_type']; ?>" name="id_type" readonly>
                  </div>
                  <div class="form-group">
                    <label>Your Id:</label><br>
                    <img src="/public/uploads/<?php echo $profile['id_photo']; ?>" id="output_image"  height="100px" readonly>
                  </div>
                  <hr>
                  <center><button id="submit" name="tenant_update" class="btn btn-primary btn-block">Update</button>
                  </center><br>

                </form>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <?php }?>



      </div>
