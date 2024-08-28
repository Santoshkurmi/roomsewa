
    <link rel="stylesheet" href="/style/register.css" class="css">


    <div class="container">
        <h3 style="font-weight: bold; text-align: center;"><?php echo $type == "owner" ? 'Owner': 'Tenant' ?> Register</h3>
        <hr><br>
        <form method="POST" action="/register" enctype="multipart/form-data">
          
        <input type="hidden"  id="location" name="location" value="">


            <input type="hidden" class="form-control"  name="role" value="<?php echo $type == "owner" ? 'owner': 'tenant' ?>">


            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input value="<?php echo $data['full_name'] ?? '' ?>" type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name"
                    >
                <span id="name-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="name-message" class="message"> <?php echo $errors['full_name'] ?? '' ?> </span>
            </div>


            <div class="form-group">
                <label for="email">Email:</label>
                <input value="<?php echo $data['email'] ?? '' ?>" type="text" class="form-control" id="email" placeholder="Enter Email" name="email" >
                <span id="email-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="email-message" class="message"> <?php echo $errors['email'] ?? '' ?></span>
            </div>


            <div class="form-group">
                <label for="password1">Password:</label>
                <input value="<?php echo $data['password'] ?? '' ?>" type="password" class="form-control" id="password1" placeholder="Enter Password" name="password"
                    >
                <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password1')"></i>
                <span id="password-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <div id="password-strength" class="message"></div>
                <span id="password-message" class="message"> <?php echo $errors['password'] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="password2">Confirm Password:</label>
                <input value="<?php echo $c_password ?? '' ?>" type="password" class="form-control" id="password2" placeholder="Enter Password Again"
                    name="c_password" >
                <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('password2')"></i>
                <span id="confirm-password-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="confirm-password-message" class="message"> <?php echo $errors['c_password'] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="phone_no">Phone No.:</label>
                <input value="<?php echo $data['phone_no'] ?? '' ?>" type="text" class="form-control" id="phone_no" placeholder="Enter Phone No." name="phone_no"
                    >
                <span id="phone-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="phone-message" class="message"> <?php echo $errors['phone_no'] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input value="<?php echo $data['address'] ?? '' ?>" type="text" class="form-control" id="address" placeholder="Enter Address" name="address"
                    >
                <span id="address-icon" class="icon"><i class="fas fa-circle-check"></i><i
                        class="fas fa-circle-exclamation"></i></span>
                <span id="address-message" class="message"> <?php echo $errors['address'] ?? '' ?></span>
            </div>

            <div class="form-group">
                <label for="id_type">Type of ID:</label>
                <select class="form-control" name="id_type" >
                    <option>Citizenship</option>
                    <option>Driving Licence</option>
                </select>
            </div>

            <div class="form-group">
                <label for="card_photo">Upload your Selected Card:</label>
                <input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*"
                    onchange="preview_image(event)" >
                <?php if (isset($errors['id_photo'])): ?>
                    <div style="color: red;"><?php echo $errors['id_photo']; ?></div>
                <?php endif; ?>
            </div>


            <div class="form-group">
                <label>Your selected File:</label><br>
                <img src="" id="output_image" alt="Selected File" height="100px" >
            </div>
            <hr>
            <button id="submit" name="tenant_register" class="btn btn-primary btn-block"
                onclick="return Validate()">Register</button><br>
            <div class="form-group text-right">
                <label class="">Register as a <a href="<?php echo $type == "owner" ? '/register/': '/register/owner' ?>"><?php echo $type != "owner" ? 'Owner': 'Tenant' ?></a>?</label><br>
            </div><br><br>
        </form>
    </div>

    <!-- Font Awesome CDN link -->
    <script href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <!-- <script src="/script/register.js"></script> -->


</body>

<br><br>
