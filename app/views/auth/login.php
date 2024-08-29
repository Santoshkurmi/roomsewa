<?php

// include 'tenant-engine.php';
?>


    <link rel="stylesheet" href="/public/css/login.css" class="css">

    <div class="container">
        <h3 style="font-weight: bold; text-align: center;"><?php echo $type == "owner" ? 'Owner': 'Tenant' ?> Login</h3>
        <hr><br><br>
        <form method="POST" action="/login">
            <div class="form-group">
                <span style="color:red;"><?php echo $error ?? '' ?></span>
                <label for="email">Email:</label>
                <input type="text" value="<?php echo $email ?? '' ?>" class="form-control" id="email" placeholder="Enter email" name="email" >
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <div class="password-container"> <!-- Added container -->
                    <input type="password" value="<?php echo $password ?? '' ?>" class="form-control" id="pwd" placeholder="Enter password" name="password"
                        >
                    <i class="toggle-password fas fa-eye-slash" onclick="togglePasswordVisibility('pwd')"></i>
                    <!-- Eye icon -->
                </div>
            </div>
            <div class="form-group">
                <a href="forgot-password-tenant.php">Forgot your Password ? </a> 
            </div>
            <input type="submit" id="submit" name="tenant_login" class="btn btn-primary btn-block" value="Login">
        </form>
    </div>


    <!-- <script src="/public/js/login.js"></script> -->
   
   
<script>
   
 
// Toggle password visibility
function togglePasswordVisibility(fieldId) {
    const passwordField = document.getElementById(fieldId);
    const icon = passwordField.nextElementSibling;
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}
</script>
        