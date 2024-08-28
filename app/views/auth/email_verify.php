
<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f9fa;
    /* Light gray background */
}

.container {
    margin-top: 50px;
    max-width: 400px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.header-box {
    background-color: #5cb85c;
    /* Primary blue background */
    color: #fff;
    /* White text color */
    padding: 15px;
    border-radius: 8px 8px 0 0;
    text-align: center;
}

h2 {
    margin: 0;
    font-size: 28px;
    /* Larger font size */
}

.verification-box {
    background-color: #fff;
    /* White background */
    padding: 20px;
    border-radius: 0 0 8px 8px;
}

label {
    color: #5cb85c;
    /* Primary blue text color */
}

input::placeholder {
    color: #a8a8a8;
    /* Placeholder text color */
}

.verify {
    background-color:#5cb85c;
    /* Primary blue background */
    color: #fff;
    /* White text color */
    border: 1px solid #5cb85c;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;

    /* transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out; */
}

.verify:hover {
    background-color: #4cae4c;
    transform: scale(1.15);
    /* Darker green on hover */
}
</style>



<div class="container">
        <div class="header-box mb-4">
            <h2>Verify Your Email</h2>
        </div>

        <div class="verification-box">
        <div style="color:green; padding:10px;"><?php echo $msg ?? '' ?></div>
            <p>Enter Code Within <?php echo $expire ?? '' ?> minutes</p>
            <form method="post" action="/verify_email">
                <div class="form-group">
                    <input type="hidden" name="id"
                        value="<?php echo $id ?? '' ?>" >
                    <label for="verificationCode">Enter the Verification Code:</label>
                    <input type="text" class="form-control" id="verificationCode" name="verification_code"
                        placeholder="Verification Code" required>
                </div>
                    <div style="color:red; padding:10px;"><?php echo $error ?? '' ?></div>
                <div class="form-group text-center">
                    <button class="verify" type="submit" class="btn btn-block" name="verify_email">Verify</button>
                    <br>
                    <br>
                   
                </div>
            </form>
            <form method="post" action="/resend_otp">
                        <input name="id" value="<?php echo $id ??'' ?>"  hidden>
                        <input type="submit" value="resend otp">
                    </form>
        </div>
    </div>
