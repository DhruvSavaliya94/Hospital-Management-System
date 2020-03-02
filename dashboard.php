<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="resources/js/jquery-3.4.1.js"></script>
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
        <script src="resources/js/bootstrap.js"></script>
        <title>Dashboard</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 border">
                    <div class="text-center">
                        <a href="dashboard.html"><img src="resources/images/hospital.png" alt="Logo"></a>
                    </div>
                    <div class="text-center py-3">
                        <img width="25%" src="resources/images/user.png" alt="user_photo">
                        <p class="m-0 p-0">User Name</p>
                    </div>
                    <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Dashboard')"
                        id="defaultOpen">Dashboard</button>
                    <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Doctors')">Doctors</button>
                    <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Patient')">Patient</button>
                    <button class="tablinks btn btn-block button-hover"
                        onclick="typ(event, 'Appointment')">Appointment</button>
                    <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Setting')">Setting</button>
                </div>
                <div class="col-md-10 border">
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-2 text-center Logout-button-margin">
                            <a class="btn btn-danger btn-block" href="Signup.html" role="button">Log out</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- ############################ Dashboard page ############################-->
                            <div id="Dashboard" class="tabcontent">
                                <!--   First Row Of Chart  -->
                                <div class="row m-0 p-0">
                                    <div class="col-md-4">
                                        <div class="media border">
                                            <img width="50%" src="resources/images/dashboard-graph-1.png" alt="graph">
                                            <div class="media-body">
                                                <h1 class="mt-0 text-center">15</h1>
                                                <h5 class="py-2 text-center">Appotiment</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="media border">
                                            <img width="35%" src="resources/images/dashboard-graph-2.jpg" alt="graph">
                                            <div class="media-body">
                                                <h1 class="mt-0 text-center">200</h1>
                                                <h5 class="py-2 text-center">Patients</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="media border">
                                            <img class="py-2" width="30%" src="resources/images/doctor.png" alt="graph">
                                            <div class="media-body">
                                                <h1 class="mt-0 text-center">100</h1>
                                                <h5 class="py-2 text-center">Doctors</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--   Second Row Of Chart  -->
                                <div class="row m-0 p-0">
                                    <div class="col border my-3">
                                        <h4 class="pt-2">Total Progress</h4>
                                        <img class="py-2 mx-auto d-block" width="60%"
                                            src="resources/images/main-graph.png" alt="graph">
                                    </div>
                                </div>
                            </div>

                            <!-- ############################ Doctors page ############################-->

                            <div id="Doctors" class="tabcontent">
                                <div class="row m-0 p-0">
                                    <div class="col border">
                                        <h4 class="py-2">Doctors Registrations</h4>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-10">
                                                <form method="POST" action="">
                                                    <!--row is first name in form-->
                                                    <div class="form-group row">
                                                        <label for="firstname"
                                                            class="col-sm-2 col-form-label font-weight-bold">First
                                                            Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="firstname"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--row is last name in form-->
                                                    <div class="form-group row">
                                                        <label for="lastname"
                                                            class="col-sm-2 col-form-label font-weight-bold">Last
                                                            Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="lastname"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--row is mobile no in form-->
                                                    <div class="form-group row">
                                                        <label for="mobileno"
                                                            class="col-sm-2 col-form-label font-weight-bold">Mobile
                                                            No.</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control" id="mobileno"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--row is Gender in form-->
                                                    <div class="form-group row">
                                                        <label for="gender"
                                                            class="col-sm-2 col-form-label font-weight-bold">Gender</label>
                                                        <div class="col-sm-5">
                                                            <input type="radio" name="gender" value="male" checked> Male
                                                            <input type="radio" name="gender" value="female"> Female
                                                            <input type="radio" name="gender" value="other"> Other
                                                        </div>
                                                    </div>
                                                    <!--row is DOB in form-->
                                                    <div class="form-group row">
                                                        <label for="dateofbirth"
                                                            class="col-sm-2 col-form-label font-weight-bold">DOB</label>
                                                        <div class="col-sm-5">
                                                            <input type="date" name="dateofbirth" id="dateofbirth">
                                                        </div>
                                                    </div>
                                                    <!--row is degree in form-->
                                                    <div class="form-group row">
                                                        <label for="degree"
                                                            class="col-sm-2 col-form-label font-weight-bold">Degree</label>
                                                        <div class="col-sm-9">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="Checkbox1" value="option1" checked>
                                                                <label class="form-check-label"
                                                                    for="Checkbox1">MS</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="Checkbox2" value="option2" checked>
                                                                <label class="form-check-label"
                                                                    for="Checkbox2">MD</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="Checkbox3" value="option3">
                                                                <label class="form-check-label"
                                                                    for="Checkbox3">BHMS</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="Checkbox4" value="option4">
                                                                <label class="form-check-label"
                                                                    for="Checkbox4">BDS</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--row is add picture in form-->
                                                    <div class="form-group row">
                                                        <label for="picture"
                                                            class="col-sm-2 col-form-label font-weight-bold">Picture</label>
                                                        <div class="col-sm-5">
                                                            <input type="file" name="fileupload" value="fileupload"
                                                                id="fileupload">
                                                        </div>
                                                    </div>
                                                    <!--row is buttons in form-->
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 d-flex justify-content-between">
                                                            <a class="btn btn-primary px-4" href="#"
                                                                role="button">Submit</a>
                                                            <a class="btn btn-warning px-4" href="#"
                                                                role="button">Clear</a>
                                                            <a class="btn btn-danger px-4" href="#"
                                                                role="button">Cancel</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ############################ Patient page ############################-->

                            <div id="Patient" class="tabcontent">
                                <div class="row m-0 p-0">
                                    <div class="col border">
                                        <h4 class="py-2">Register New Patients</h4>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-10">
                                                <form method="POST" action="">
                                                    <!--row is situation in form-->
                                                    <div class="form-group row">
                                                        <label for="situation"
                                                            class="col-sm-2 col-form-label font-weight-bold">Situation</label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" id="situation">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--row is first name in form-->
                                                    <div class="form-group row">
                                                        <label for="firstname"
                                                            class="col-sm-2 col-form-label font-weight-bold">First
                                                            Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="firstname"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--row is middlename in form-->
                                                    <div class="form-group row">
                                                        <label for="middlename"
                                                            class="col-sm-2 col-form-label font-weight-bold">Middle
                                                            Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="middlename"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--row is last name in form-->
                                                    <div class="form-group row">
                                                        <label for="lastname"
                                                            class="col-sm-2 col-form-label font-weight-bold">Last
                                                            Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="lastname"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--row is mobile no in form-->
                                                    <div class="form-group row">
                                                        <label for="mobileno"
                                                            class="col-sm-2 col-form-label font-weight-bold">Mobile
                                                            No.</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control" id="mobileno"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                    <!--row is blood group in form-->
                                                    <div class="form-group row">
                                                        <label for="bloodgroup"
                                                            class="col-sm-2 col-form-label font-weight-bold">Blood
                                                            Group</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" id="bloodgroup">
                                                                <option>O+</option>
                                                                <option>O-</option>
                                                                <option>AB+</option>
                                                                <option>AB-</option>
                                                                <option>A+</option>
                                                            </select>
                                                        </div>
                                                        <label for="disease"
                                                            class="col-sm-1 col-form-label font-weight-bold">Disease</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" id="disease">
                                                                <option>O+</option>
                                                                <option>O-</option>
                                                                <option>AB+</option>
                                                                <option>AB-</option>
                                                                <option>A+</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--row is Gender in form-->
                                                    <div class="form-group row">
                                                        <label for="gender"
                                                            class="col-sm-2 col-form-label font-weight-bold">Gender</label>
                                                        <div class="col-sm-5">
                                                            <input type="radio" name="gender" value="male"> Male
                                                            <input type="radio" name="gender" value="female"> Female
                                                            <input type="radio" name="gender" value="other"> Other
                                                        </div>
                                                    </div>
                                                    <!--row is DOB in form-->
                                                    <div class="form-group row">
                                                        <label for="dateofbirth"
                                                            class="col-sm-2 col-form-label font-weight-bold">DOB</label>
                                                        <div class="col-sm-5">
                                                            <input type="date" name="dateofbirth" id="dateofbirth">
                                                        </div>
                                                    </div>
                                                    <!--row is add picture in form-->
                                                    <div class="form-group row">
                                                        <label for="picture"
                                                            class="col-sm-2 col-form-label font-weight-bold">Picture</label>
                                                        <div class="col-sm-5">
                                                            <input type="file" name="fileupload" value="fileupload"
                                                                id="fileupload">
                                                        </div>
                                                    </div>
                                                    <!--row is address in form-->
                                                    <div class="form-group row">
                                                        <label for="address"
                                                            class="col-sm-2 col-form-label font-weight-bold">Address</label>
                                                        <div class="col-sm-5">
                                                            <textarea class="form-control" id="address"
                                                                rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--row is buttons in form-->
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 d-flex justify-content-between">
                                                            <a class="btn btn-primary px-4" href="#"
                                                                role="button">Submit</a>
                                                            <a class="btn btn-warning px-4" href="#"
                                                                role="button">Clear</a>
                                                            <a class="btn btn-danger px-4" href="#"
                                                                role="button">Cancel</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ############################ Appointments page ############################-->

                            <div id="Appointment" class="tabcontent">
                                <div class="row m-0 p-0">
                                    <div class="col border">
                                        <h4 class="py-2">Book Appointment</h4>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-10">
                                                <form method="POST" action="">
                                                    <!--row is patient in form-->
                                                    <div class="form-group row">
                                                        <label for="patient"
                                                            class="col-sm-2 col-form-label font-weight-bold">Patient</label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" id="patient">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--row is doctor in form-->
                                                    <div class="form-group row">
                                                        <label for="doctor"
                                                            class="col-sm-2 col-form-label font-weight-bold">Doctor</label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" id="doctor">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--row is date/time in form-->
                                                    <div class="form-group row">
                                                        <label for="date/time"
                                                            class="col-sm-2 col-form-label font-weight-bold">Date/Time</label>
                                                        <div class="col-sm-3">
                                                            <input type="date" name="date/time1" id="date/time1">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="date" name="date/time2" id="date/time2">
                                                        </div>
                                                    </div>
                                                    <!--row is discription in form-->
                                                    <div class="form-group row">
                                                        <label for="discription"
                                                            class="col-sm-2 col-form-label font-weight-bold">Discription</label>
                                                        <div class="col-sm-5">
                                                            <textarea class="form-control" id="discription"
                                                                rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--row is buttons in form-->
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 d-flex justify-content-between">
                                                            <a class="btn btn-primary px-4" href="#"
                                                                role="button">Submit</a>
                                                            <a class="btn btn-warning px-4" href="#"
                                                                role="button">Clear</a>
                                                            <a class="btn btn-danger px-4" href="#"
                                                                role="button">Cancel</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ############################ Data page ############################-->

                            <div id="Setting" class="tabcontent">
                                <div class="row m-0 p-0">
                                    <div class="col border">
                                        <h4 class="py-2">Book Appointment</h4>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-10">
                                                <form method="POST" action="">
                                                    <!--row is sms alert in form-->
                                                    <div class="form-group row">
                                                        <label for="smsalert"
                                                            class="col-sm-2 col-form-label font-weight-bold">SMS
                                                            Alert</label>
                                                        <div class="col-sm-5 py-2">
                                                            <input type="radio" name="smsalert" value="enable" checked>
                                                            Enable
                                                            <input type="radio" name="smsalert" value="disable"> Disable
                                                        </div>
                                                    </div>
                                                    <!--row is email alert in form-->
                                                    <div class="form-group row">
                                                        <label for="emailalert"
                                                            class="col-sm-2 col-form-label font-weight-bold">Email
                                                            Alert</label>
                                                        <div class="col-sm-5 py-2">
                                                            <input type="radio" name="emailalert" value="enable"
                                                                checked> Enable
                                                            <input type="radio" name="emailalert" value="disable">
                                                            Disable
                                                        </div>
                                                    </div>
                                                    <!--row is buttons in form-->
                                                    <div class="form-group row">
                                                        <div class="col-sm-4 d-flex justify-content-between">
                                                            <a class="btn btn-primary px-4" href="#"
                                                                role="button">Save</a>
                                                            <a class="btn btn-danger px-4" href="#"
                                                                role="button">Cancel</a>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label font-weight-bold">Change Color</label>
                                                    <input class="my-2" type="color" id="favcolor" />
                                                    <a class="col-sm-3 btn btn-info px-4 mx-2" href="#" role="button"
                                                        onclick="clch();">Click</a>
                                                </div>
                                                <div style="width: 200px; height: 200px; border: 1px solid black;">
                                                    <h3 id="a">This is a heading</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ############################ Data page finish ############################-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--For change all color which user want-->
        <script>
            function clch() {
                var n = document.getElementById("favcolor").value;
                var t = document.getElementById("a");
                t.style.backgroundColor = n;
            }

        </script>

        <!--For open pacific data which user want-->
        <script>
            function typ(evt, about) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(about).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>

    </body>

</html>
