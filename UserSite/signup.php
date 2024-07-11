


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TripBoss</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- fonts -->
    <link rel="stylesheet" href="font/fonts.css">
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
<!-- SignUp section -->
<section id="signup" class="py-4">
    <div class="container">
        <div class="title-wrap">
            <span class="sm-title">Create your account<br><a href="signin.html" style="color: #1ec6b6;">
                    OR login
                </a></span>

            <h2 class="lg-title">Sign Up</h2>

        </div>

        <div class="signup-row">
            <form class="signup-form" method="POST" action="process_signup.php">
                <input type="text" id="nameInput" name="nameInput" class="form-control" placeholder="Full Name">
                <span id="nameError" class="error"></span> <!-- Span for name error message -->
                <input type="email" id="emailInput" name="emailInput" class="form-control" placeholder="Email">
                <span id="emailError"></span> <!-- Span for email error message -->
                <input type="password" id="passwordInput" name="passwordInput" class="form-control" placeholder="Password">
                <span id="passwordError" class="error"></span> <!-- Span for password error message -->
                <input type="password" id="confirmpasswordInput" name="confirmpasswordInput" class="form-control" placeholder="Confirm password">
                <span id="confirmpasswordError" class="error"></span> <!-- Span for confirmpassword error message -->
                <div class="container checkboxcontainer" style="display: flex;">
                    <label class="check-control">
                        <input type="checkbox" value="remember me">
                        Remember me
                    </label>
                </div><br><br>
                <input type="submit" name="submit" class="btn" value="Sign Up">
            </form>
        </div>
    </div>
</section>
<!-- end of SignUp section -->
</body>
</html>
