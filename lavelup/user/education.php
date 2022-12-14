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

    <div class="modal fade" id="job-modal" tabindex="-1" role="dialog" aria-labelledby="job-modalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Education</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Schllo/College name *</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="kendriya vidyalaya, Noida *">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Job title *</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="SDE-1 *">
                        </div> -->
                        <div class="form-group">
                            <label for="select-skill">Degree type *</label>
                            <select id="select-skill" class="form-control">
                                <option>Selec one</option>
                                <!-- <option>Bechelor of Arts (BA)</option>
                                <option>Bechelor of Business Administration (BBA)</option>
                                <option>Bechelor of Engineering (BE)</option>
                                <option>Bechelor of Fine Arts (BFA)</option>
                                <option>Bechelor of Science (BFA)</option> -->
                                <option>PHD</option>
                                <option>Bechelor's Degree'</option>
                                <option>Master's Degree'</option>
                                <option>Engineer's Degree'</option>
                                <option>High School Diploma'</option>
                                <option>Secondary Section (12th)'</option>
                                <option>High School Section (10th)'</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Degree name *</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Bachelor of Technology *">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Start date *</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="select-skill" class="form-control">
                                        <option>Year</option>
                                        <option>2022</option>
                                        <option>2021</option>
                                        <option>2020</option>
                                        <option>2019</option>
                                        <option>2018</option>
                                        <option>2017</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                        <option>2014</option>
                                        <option>2013</option>
                                        <option>2012</option>
                                        <option>2011</option>
                                        <option>2010</option>
                                        <option>2009</option>
                                        <option>2008</option>
                                        <option>2007</option>
                                        <option>2006</option>
                                        <option>2005</option>
                                        <option>2004</option>
                                        <option>2003</option>
                                        <option>2002</option>
                                        <option>2001</option>
                                        <option>2000</option>
                                        <option>1999</option>
                                        <option>1998</option>
                                        <option>1997</option>
                                        <option>1996</option>
                                        <option>1995</option>
                                        <option>1994</option>
                                        <option>1993</option>
                                        <option>1992</option>
                                        <option>1991</option>
                                        <option>1990</option>
                                        <option>1989</option>
                                        <option>1988</option>
                                        <option>1987</option>
                                        <option>1986</option>
                                        <option>1985</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="select-skill" class="form-control">
                                        <option>Month</option>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October, </option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="" class="currentworking"><label for="currentworking"
                                style="padding-left: 8px;">I currently
                                working here.</label>
                        </div> -->
                        <div class="form-group end-date">
                            <label for="exampleInputEmail1">End date (or expected) *</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="select-skill" class="form-control end-date-year">
                                        <option>Year</option>
                                        <option>2022</option>
                                        <option>2021</option>
                                        <option>2020</option>
                                        <option>2019</option>
                                        <option>2018</option>
                                        <option>2017</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                        <option>2014</option>
                                        <option>2013</option>
                                        <option>2012</option>
                                        <option>2011</option>
                                        <option>2010</option>
                                        <option>2009</option>
                                        <option>2008</option>
                                        <option>2007</option>
                                        <option>2006</option>
                                        <option>2005</option>
                                        <option>2004</option>
                                        <option>2003</option>
                                        <option>2002</option>
                                        <option>2001</option>
                                        <option>2000</option>
                                        <option>1999</option>
                                        <option>1998</option>
                                        <option>1997</option>
                                        <option>1996</option>
                                        <option>1995</option>
                                        <option>1994</option>
                                        <option>1993</option>
                                        <option>1992</option>
                                        <option>1991</option>
                                        <option>1990</option>
                                        <option>1989</option>
                                        <option>1988</option>
                                        <option>1987</option>
                                        <option>1986</option>
                                        <option>1985</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="select-skill" class="form-control end-date-month">
                                        <option>Month</option>
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October, </option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Percentage *</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="98% *">
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="main-containt">
        <div class="container">
            <div class="title-work-exp">
                <h1>Education</h1>
                <span class="add-skill-icon" data-toggle="modal" data-target="#job-modal"><i class="far fa-plus-square">
                        - Add</i></span>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>degree type:</h5>
                    <div class="edu-inner">
                        <p class="edu-school-name"> <span>School/College name</span> <i
                                class="fas fa-edit edit-icon"></i></p>
                        <p class="degree-name"><span>degree name</span> - Full-Time</p>
                        <p class="edu-time-period">October 2020 - July 2021</p>
                        <p class="edu-percent">Percentage: 98%</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>degree type:</h5>
                    <div class="edu-inner">
                        <p class="edu-school-name"> <span>School/College name</span> <i
                                class="fas fa-edit edit-icon"></i></p>
                        <p class="degree-name"><span>degree name</span> - Full-Time</p>
                        <p class="edu-time-period">October 2020 - July 2021</p>
                        <p class="edu-percent">Percentage: 98%</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>degree type:</h5>
                    <div class="edu-inner">
                        <p class="edu-school-name"> <span>School/College name</span> <i
                                class="fas fa-edit edit-icon"></i></p>
                        <p class="degree-name"><span>degree name</span> - Full-Time</p>
                        <p class="edu-time-period">October 2020 - July 2021</p>
                        <p class="edu-percent">Percentage: 98%</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>degree type:</h5>
                    <div class="edu-inner">
                        <p class="edu-school-name"> <span>School/College name</span> <i
                                class="fas fa-edit edit-icon"></i></p>
                        <p class="degree-name"><span>degree name</span> - Full-Time</p>
                        <p class="edu-time-period">October 2020 - July 2021</p>
                        <p class="edu-percent">Percentage: 98%</p>
                    </div>
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
</body>

</html>