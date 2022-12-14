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
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <link rel="stylesheet" href="css/UserStyle.css">
    <title>User Profile</title>
</head>

<body>

    <!-- Navbar php file import -->
    <?php
    require 'userNavbar.php'
        ?>

    <!-- sidebar php file import -->
    <?php
    require 'userSidebar.php'
        ?>

    <div class="main-containt">
        <div class="container">
            <div class="title-links">
                <h1>Links:</h1>
                <span class="add-links-icon" onclick="edit()"><i class="fas fa-edit"> - Edit</i></span>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post" style="margin-bottom: 120px" class="linkform">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Leetcode</label>
                            <input type="text" class="form-control input1" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="&#xf5fc; Leetcode  (https://leetcode/deshboard.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Hackerearth</label>
                            <input type="text" class="form-control input2" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="&#xf121; Hackerearth  (https://hackerearth/deshboard.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Hackerrank</label>
                            <input type="text" class="form-control input3" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder="&#xf5f7; Hackerrank  (https://hackerrand/deshboard.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> LinkedIn</label>
                            <input type="text" class="form-control input4" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="&#xf08c; LinkedIn  (https://linkedin.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Twitter</label>
                            <input type="text" class="form-control input5" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="&#xf081; Twitter  (https://twitter.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Facebook</label>
                            <input type="text" class="form-control input6" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="&#xf082; Facebook (https://facebook.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Instagram</label>
                            <input type="text" class="form-control input7" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xe055; Instagram (https://instagram.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">GitHub</label>
                            <input type="text" class="form-control input8" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xf092; GitHub (https://github.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stack Overflow</label>
                            <input type="text" class="form-control input9" id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                placeholder=" &#xf16c; Stack Overflow (https://stackoverflow.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Website</label>
                            <input type="text" class="form-control input10" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xf0ac; Website (https://brand.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Blog</label>
                            <input type="text" class="form-control input11" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder=" &#xf37c; Blog (https://blogpost.com)"
                                style="font-family:Arial, FontAwesome" disabled>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="submit" class="btn btn-primary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- my javascript file include -->
    <script src="../js/script.js"></script>

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

    <script src="js/linkedit.js"></script>
</body>

</html>