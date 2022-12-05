<?php
require_once('dbconnect.php');
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Activity</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="iqac.css">
    <style>

    </style>
</head>

<body>
<div class="jumbotron jumbol" >
	<center><img class="img-fluid" src="logo.png" width="60px" height="60px" alt="spitlogo" ></center><br>
	<h3><center><b>Bharatiya Vidya Bhavan's Sardar Patel Institute of Technology</b></center></h3><br>
</div>
    <div class="container">
        <div class="row" style="background-color :  rgb(27,27,27)">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 style="color:white; "> Welcome <?php  echo $_SESSION['fname'];?>
                            <?php  echo  $_SESSION['lname'];    ?> </h1>
                        <h1 style="color:white; "> Username : <?php  echo $_SESSION['username'];?> </h1>
                    </div>


                    <div class="col-md-4" style="margin:auto;  ">
                        <div class="col-md-6" style="margin:auto; ">
                            <a class="btn btn-outline-danger btn-lg " role="button" href="logout.php"> <i
                                    class="fa fa-ban" aria-hidden="true"></i> Logout</a>
                        </div>
                        <div class="col-md-6" style="margin:auto; ">
                            <a class="btn btn-outline-danger btn-lg " role="button" href="update.php"> <i
                                    class="fa fa-ban" aria-hidden="true"></i> Update Profile</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br><br>

        <h1><b>Fill the form and details about the Activity</h1></b>

        <form action="iqac_activityphp.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="jumbotron jumbo ">

                    <div class="row ">
                        <div class="col-md-4">
                            <span class="label-input100"><span class="glyphicon glyphicon-calendar"></span> Date
                                :</span>
                            <input class="form-control form-control-lg" type="date" name="date" placeholder="Enter Date"
                                required>

                        </div>
                        <div class="col-md-4">

                            <span class="label-input100"><span class="glyphicon glyphicon-time"></span> Time
                                From:</span>
                            <input class="form-control form-control-lg" type="time" name="timefrom"
                                placeholder="Enter Time From" required>

                        </div>
                        <div class="col-md-4">

                            <span class="label-input100"><span class="glyphicon glyphicon-time"></span> Time To:</span>
                            <input class="form-control form-control-lg" type="time" name="timeto"
                                placeholder="Enter Time to" required>



                        </div>
                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-md-4">
                            <span class="label-input100"><span class="glyphicon glyphicon-map-marker"></span> Venue
                                :</span>
                            <div>
                                <input class="form-control form-control-lg" type="text" name="venue"
                                    placeholder="Enter Venue of Activity" required>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Name of the
                                Activity : </span>
                            <input class="form-control form-control-lg" type="text" name="nameofactivity"
                                placeholder="Enter name of Activity" required>


                        </div>
                        <div class="col-md-4">
                            <span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span> Nature of
                                Activity :</span>
                            <div>

                                <select class="form-control dropdown btn btn-outline-dark btn-block btn-lg " id="nature"
                                    name="nature" required>
                                    <option>Indoor</option>
                                    <option>Outdoor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">

                            <span class="label-input100"><span class="glyphicon glyphicon-user"></span> Coordinator Name
                                : </span>
                            <input class="form-control form-control-lg" type="text" name="coordinator"
                                placeholder="Enter name of Coordinator" required>


                        </div>
                        <div class="col-md-4">

                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Department /
                                Committee : </span>
                            <input class="form-control form-control-lg" type="text" name="department"
                                placeholder="Enter Department / Committee" required>

                        </div>

                        <div class="col-md-4">

                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Support /
                                Assistance : </span>
                            <input class="form-control form-control-lg" type="text" name="sup"
                                placeholder="Enter Names of Support / Assistance" required>

                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Number of
                                Participants : </span>
                            <input class="form-control form-control-lg" type="number" name="numberofp"
                                placeholder="Enter Number of Participants" required>
                        </div>

                        <div class="col-md-4">
                            <span class="label-input100"><span class="glyphicon glyphicon-asterisk"></span> Students /
                                Teachers :</span>
                            <div>

                                <select class="form-control dropdown btn btn-outline-dark btn-block btn-lg "
                                    id="stud/teach" name="stud/teach" required>
                                    <option>Students</option>
                                    <option>Teachers</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <br><br>
                    <h2><b><u>BRIEF INFORMATION ABOUT THE ACTIVITY </u></b></h2>
                    <h4>(Max 500 Characters for each)</h4><br><br>
                    <div class="row">

                        <div class="col-md-12">
                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Activity
                                Criterias : </span><br><br>
                            <h4>
                                <label class="checkbox-inline"><input type="checkbox" name='checklist[]'
                                        value=" 1. Curricular Aspects "> 1. Curricular Aspects </label>
                                <label class="checkbox-inline"><input type="checkbox" name='checklist[]'
                                        value=" 2. Teaching Learning and Evaluation "> 2. Teaching Learning and
                                    Evaluation </label>
                                <label class="checkbox-inline"><input type="checkbox" name='checklist[]'
                                        value=" 3. Research Innovations and Extensions "> 3. Research Innovations and
                                    Extensions </label>
                                <label class="checkbox-inline"><input type="checkbox" name='checklist[]'
                                        value=" 4. Infrastructure and Learning Resources "> 4. Infrastructure and
                                    Learning Resources </label>
                                <label class="checkbox-inline"><input type="checkbox" name='checklist[]'
                                        value=" 5. Student Support and Progression "> 5. Student Support and Progression
                                </label>
                                <label class="checkbox-inline"><input type="checkbox" name='checklist[]'
                                        value=" 6. Governance Leadership and Management "> 6 .Governance Leadership and
                                    Management </label>
                                <label class="checkbox-inline"><input type="checkbox" name='checklist[]'
                                        value=" 7. Institutional Values and Best Practices "> 7. Institutional Values
                                    and Best Practices</label>
                            </h4>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-6">
                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Topic /
                                Subject of Activity : </span>
                            <textarea class="form-control" rows="5" id="topic" name="topic" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Objectives:
                            </span>
                            <textarea class="form-control" rows="5" id="obj" name="obj" required></textarea>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Methodology
                                : </span>
                            <textarea class="form-control" rows="5" id="method" name="method" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Outcomes :
                            </span>
                            <textarea class="form-control" rows="5" id="outcome" name="outcome" required></textarea>
                        </div>

                    </div>

                    <br><br>
                    <h2><b> <u>PROOFS & DOCUMENTS ATTACHED (Tick mark the proofs attached) </u> </b></h2>
                    <h4>(Please upload images of lower sizes)</h4><br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> Proofs
                                Attached : </span><br><br>
                            <h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="1. Notice  & Letters">1. Notice & Letters </label>
                                        <input class="form-control-lg" type="file" name="notice1" class="form-control">
                                        <input class="form-control-lg" type="file" name="notice2" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="2. Student list of participation">2. Student list of
                                            participation</label>
                                        <input class="form-control-lg" type="file" name="list1" class="form-control">
                                        <input class="form-control-lg" type="file" name="list2" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="3. Activity report">3. Activity report</label>

                                    </div>
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="4. Photos (GEO TAG)">4. Photos (GEO TAG)</label>
                                        <input class="form-control-lg" type="file" name="geotag1" class="form-control">
                                        <input class="form-control-lg" type="file" name="geotag2" class="form-control">
                                        <input class="form-control-lg" type="file" name="geotag3" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="5. Feedback form">5. Feedback form</label>
                                        <input class="form-control-lg" type="file" name="feedback1"
                                            class="form-control">
                                        <input class="form-control-lg" type="file" name="feedback2"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="6. Feedback analysis">6. Feedback analysis</label>
                                        <input class="form-control-lg" type="file" name="analysis1"
                                            class="form-control">
                                        <input class="form-control-lg" type="file" name="analysis2"
                                            class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="7. News clip with details">7. News clip with details</label>
                                        <input class="form-control-lg" type="file" name="news1" class="form-control">
                                        <input class="form-control-lg" type="file" name="news2" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="8. Certificate">8. Certificate</label>
                                        <input class="form-control-lg" type="file" name="certi1" class="form-control">
                                        <input class="form-control-lg" type="file" name="certi2" class="form-control">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="checkbox-inline"><input type="checkbox" name="checkvalue[]"
                                                value="9. Any other">9. Any other</label>
                                        <input class="form-control-lg" type="file" name="other" class="form-control">
                                    </div>

                                </div>
                            </h3>
                        </div>

                    </div><br><br>
                    <div class="row">

                        <span class="label-input100"><span class="glyphicon glyphicon-list-alt"></span> IQAC CELL
                            ACTIVITY NUMBER : </span>
                        <input class="form-control form-control-lg" type="text" name="cellno"
                            placeholder="Enter IQAC CELL ACTIVITY NUMBER" required>
                    </div>


                    <br><br>
                    <div class="row">

                        <div class="col-md-2">

                            <button type="button submit" class="btn btn-outline-success btn-block btn-lg" role="button"
                                name="submitdet">SUBMIT</button>
                        </div>


                        <div class="col-md-2">
                            <a type="button " class="btn btn-outline-danger btn-block btn-lg"
                                href="iqac_dashboard.php">CANCEL</a>
                        </div>
                    </div>
        </form>
    </div>
    </div>
    </div>

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </div>
</body>

</html>