<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Forgot Password</h2>
                        <form method="POST" action="action.php" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>