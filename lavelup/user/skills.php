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

    <div class="modal fade" id="skill-modal" tabindex="-1" role="dialog" aria-labelledby="skill-modalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Skill</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" onsubmit="return skills_detail_validation()">
                        <div class="form-group">
                            <label for="skills">Skill</label>
                            <input type="text" class="form-control" id="skills" aria-describedby="emailHelp"
                                placeholder="Skill">
                        </div>
                        <div class="form-group">
                            <label for="select-skill">Skill level</label>
                            <select id="select-skill" class="form-control">
                                <option value="0">Selec one</option>
                                <option value="Beginner-Level">Beginner Level</option>
                                <option value="Intermediate-Level">Intermediate Level</option>
                                <option value="Advance-Level">Advance Level</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">

                </div> -->
            </div>
        </div>
    </div>

    <div class="main-containt">
        <div class="container skill-containt">
            <div class="title-skill">
                <h1>Skills</h1>
                <span class="add-skill-icon" data-toggle="modal" data-target="#skill-modal"><i
                        class="far fa-plus-square"> - Add</i></span>
                <hr>
            </div>
            <table class="table table-borderless">
                <colgroup>
                    <col span="1" style="width: 25%;">
                    <!-- <col span="1" style="width: 70%;">
                    <col span="1" style="width: 15%;"> -->
                </colgroup>
                <tbody>
                    <tr>
                        <td>C Programming</td>
                        <td>Advance Level</td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Python</td>
                        <td>Beginner Level</td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>JavaScript</td>
                        <td>Intermediate Level</td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- my javascript file include -->
    <script src="../js/script.js"></script>
    <script src="js/skills.js"></script>

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
</body>

</html>