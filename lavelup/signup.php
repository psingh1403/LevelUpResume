<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Style css file -->
    <link rel="stylesheet" href="style.css">
    <title>LavelUpResume - Sign-up</title>
</head>

<body onload="document.querySelector('#fullname2').focus()">

    <!-- Navbar php file import -->
    <?php
    require 'navbar.php'
        ?>


    <!-- Register section start -->
    <div class="container-fluid back-register-img">
        <div class="container container-section-register">
            <div class="row">
                <div class="col-md-6">
                    <div class="back">
                        <div class="div-center">
                            <div class="content">
                                <h3>Sign-Up</h3>
                                <hr />
                                <form class="form1" action="welcom.php" method="post" name="signupform"
                                    onsubmit="return signupvalidations()">
                                    <div class="form-group">
                                        <label for="fullname2">Full name <span style="color: red;">*</span></label>
                                        <input type="text" class="form-control no-outline" id="fullname2"
                                            placeholder="Full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email2">Email address <span style="color: red;">*</span></label>
                                        <input type="text" autocomplete="off" class="form-control no-outline"
                                            id="email2" placeholder="example@gamil.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="password2">Password <span style="color: red;">*</span></label>
                                        <input type="password" class="form-control" id="password2"
                                            placeholder="min 8 characters password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign-in Here</button>
                                    <p>Already have an account <a href="signin.php">Sign-in</a></p>
                                    <hr />
                                    <div class="social-media-register-links">
                                        <a href=""><i class="fab fa-facebook"></i></a>
                                        <a href=""><i class="fab fa-google"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </form>
                            </div>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 right-side-register">
                    <img src="img/register.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Register section end -->

    <?php
    require 'footer.php'
        ?>


</body>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->


<!-- fontawesome kit -->
<script src="https://kit.fontawesome.com/d86ae2f46d.js" crossorigin="anonymous"></script>

<!-- validation javascript file -->
<script src="js/signupValidation.js"></script>

</html>