<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header('Location: ' . "http://localhost/Hospital-Mangement-System/Login.php");
}
include_once("resources/config/database.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="resources/js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <script src="resources/js/bootstrap.js"></script>
    <script src="resources/js/javascript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="icon" href="../Hospital-Mangement-System/resources/images/dashboard.png">
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
                    <p class="m-0 p-0"><?php echo $_SESSION["userid"]; ?></p>
                </div>
                <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Dashboard')" id="defaultOpen">Dashboard</button>
                <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Doctors')">Doctors</button>
                <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Patient')">Patient</button>
                <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Appointment')">Appointment</button>
                <button class="tablinks btn btn-block button-hover" onclick="typ(event, 'Data')">Data</button>
            </div>
            <div class="col-md-10 border">
                <div class="row d-flex justify-content-end">
                    <div class="col-md-2 text-center Logout-button-margin">
                        <a class="btn btn-danger btn-block" href="resources/api/logout.php" role="button">Log out</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- ############################ Dashboard page ############################-->
                        <?php
                        $result = mysqli_query($conn, "SELECT
                            (SELECT COUNT(*) FROM appointment) as table1Count, 
                            (SELECT COUNT(*) FROM patient) as table2Count,
                            (SELECT COUNT(*) FROM doctor) as table3Count");
                        $row = mysqli_fetch_assoc($result);

                        ?>
                        <div id="Dashboard" class="tabcontent">
                            <!--   First Row Of Chart  -->
                            <div class="row m-0 p-0">
                                <div class="col-md-4">
                                    <div class="media border">
                                        <img width="50%" src="resources/images/dashboard-graph-1.png" alt="graph">
                                        <div class="media-body">
                                            <h1 class="mt-0 text-center"><?php
                                                                            echo $row["table1Count"];
                                                                            ?></h1>
                                            <h5 class="py-2 text-center">Appotiment</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media border">
                                        <img width="35%" src="resources/images/dashboard-graph-2.jpg" alt="graph">
                                        <div class="media-body">
                                            <h1 class="mt-0 text-center"><?php
                                                                            echo $row["table2Count"];
                                                                            ?></h1>
                                            <h5 class="py-2 text-center">Patients</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media border">
                                        <img class="py-2" width="30%" src="resources/images/doctor.png" alt="graph">
                                        <div class="media-body">
                                            <h1 class="mt-0 text-center"><?php
                                                                            echo $row["table3Count"];
                                                                            ?></h1>
                                            <h5 class="py-2 text-center">Doctors</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--   Second Row Of Chart  -->
                            <div class="row m-0 p-0">
                                <div class="col border my-3">
                                    <h4 class="pt-2">Progress</h4>
                                    <!-- <img class="py-2 mx-auto d-block" width="60%" src="resources/images/main-graph.png" alt="graph"> -->
                                    <canvas id="myChart"></canvas>
                                    <script>
                                        var ctx = document.getElementById('myChart');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                                datasets: [{
                                                    label: '# of Votes',
                                                    data: [12, 19, 3, 5, 2, 3],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(255, 206, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(255, 99, 132, 1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(255, 206, 86, 1)',
                                                        'rgba(75, 192, 192, 1)',
                                                        'rgba(153, 102, 255, 1)',
                                                        'rgba(255, 159, 64, 1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
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
                                            <form action="resources/api/adddr.php" method="POST" onSubmit="return drValidation();">
                                                <!--row is first name in form-->
                                                <div class="form-group row">
                                                    <label for="firstname" class="col-sm-2 col-form-label font-weight-bold">First
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="firstname" name="drfname" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <!--row is last name in form-->
                                                <div class="form-group row">
                                                    <label for="lastname" class="col-sm-2 col-form-label font-weight-bold">Last
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lastname" name="drlname" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <!--row is mobile no in form-->
                                                <div class="form-group row">
                                                    <label for="mobileno" class="col-sm-2 col-form-label font-weight-bold">Mobile
                                                        No.</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="mobileno" name="drmobile" placeholder="Contact" required>
                                                    </div>
                                                </div>
                                                <!--row is Gender in form-->
                                                <div class="form-group row">
                                                    <label for="gender" class="col-sm-2 col-form-label font-weight-bold">Gender</label>
                                                    <div class="col-sm-5">
                                                        <input type="radio" name="gender" value="male" checked> Male
                                                        <input type="radio" name="gender" value="female"> Female
                                                    </div>
                                                </div>
                                                <!--row is DOB in form-->
                                                <div class="form-group row">
                                                    <label for="dateofbirth" class="col-sm-2 col-form-label font-weight-bold">DOB</label>
                                                    <div class="col-sm-5">
                                                        <input type="date" name="dateofbirth" id="dateofbirth" required>
                                                    </div>
                                                </div>
                                                <!--row is degree in form-->
                                                <div class="form-group row">
                                                    <label for="degree" class="col-sm-2 col-form-label font-weight-bold">Degree</label>
                                                    <div class="col-sm-9">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="dgr[]" id="color" value="MS" checked>
                                                            <label class="form-check-label" for="Checkbox1">MS</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="dgr[]" id="color" value="MD" checked>
                                                            <label class="form-check-label" for="Checkbox2">MD</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="dgr[]" id="color" value="BHMS">
                                                            <label class="form-check-label" for="Checkbox3">BHMS</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="dgr[]" id="color" value="BDS">
                                                            <label class="form-check-label" for="Checkbox4">BDS</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--row is buttons in form-->
                                                <div class="form-group row">
                                                    <div class="col-sm-6 d-flex justify-content-between">
                                                        <input type="submit" class="btn btn-primary px-4" href="#" role="button">
                                                        <input type="reset" class="btn btn-warning px-4" href="#" role="button">
                                                        <a class="btn btn-danger px-4" href="#" role="button">Cancel</a>
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
                                    <h4 class="py-2">Patients Registrations</h4>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-10">
                                            <form method="POST" action="resources/api/patientregi.php" onSubmit="return ptValidation();">
                                                <!--row is first name in form-->
                                                <div class="form-group row">
                                                    <label for="firstname" class="col-sm-2 col-form-label font-weight-bold">First
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="firstname" name="ptfname" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <!--row is last name in form-->
                                                <div class="form-group row">
                                                    <label for="lastname" class="col-sm-2 col-form-label font-weight-bold">Last
                                                        Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="lastname" name="ptlname" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <!--row is mobile no in form-->
                                                <div class="form-group row">
                                                    <label for="mobileno" class="col-sm-2 col-form-label font-weight-bold">Mobile
                                                        No.</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="ptmobileno" name="ptmobile" placeholder="Contact" required>
                                                    </div>
                                                </div>
                                                <!--row is blood group in form-->
                                                <div class="form-group row">
                                                    <label for="bloodgroup" class="col-sm-2 col-form-label font-weight-bold">Blood
                                                        Group</label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="bloodgroup" name="bloodgroup">
                                                            <option>O+</option>
                                                            <option>O-</option>
                                                            <option>AB+</option>
                                                            <option>AB-</option>
                                                            <option>A+</option>
                                                            <option>A-</option>
                                                            <option>B+</option>
                                                            <option>B-</option>
                                                        </select>
                                                    </div>
                                                    <label for="disease" class="col-sm-1 col-form-label font-weight-bold">Disease</label>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="disease" name="disease">
                                                            <option>Diabetes</option>
                                                            <option>Multiple Sclerosis</option>
                                                            <option>Crohn's & Colitis</option>
                                                            <option>Heart Disease</option>
                                                            <option>Liver Disease</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--row is Gender in form-->
                                                <div class="form-group row">
                                                    <label for="gender" class="col-sm-2 col-form-label font-weight-bold">Gender</label>
                                                    <div class="col-sm-5">
                                                        <input type="radio" name="gender" value="male" checked> Male
                                                        <input type="radio" name="gender" value="female"> Female
                                                    </div>
                                                </div>
                                                <!--row is DOB in form-->
                                                <div class="form-group row">
                                                    <label for="dateofbirth" class="col-sm-2 col-form-label font-weight-bold">DOB</label>
                                                    <div class="col-sm-5">
                                                        <input type="date" name="dateofbirth" id="ptdateofbirth" required>
                                                    </div>
                                                </div>
                                                <!--row is address in form-->
                                                <div class="form-group row">
                                                    <label for="address" class="col-sm-2 col-form-label font-weight-bold">Address</label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <!--row is buttons in form-->
                                                <div class="form-group row">
                                                    <div class="col-sm-6 d-flex justify-content-between">
                                                        <input type="submit" class="btn btn-primary px-4" href="#" role="button">
                                                        <input type="reset" class="btn btn-warning px-4" href="#" role="button">
                                                        <a class="btn btn-danger px-4" href="#" role="button">Cancel</a>
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
                                            <form method="POST" action="resources/api/appoitmentregi.php" onSubmit="return apValidation();">
                                                <!--row is patient in form-->
                                                <div class="form-group row">
                                                    <label for="patient" class="col-sm-2 col-form-label font-weight-bold">Patient</label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" id="patient" name="patient">
                                                            <?php
                                                            $sql = "SELECT `id`, `fname`, `lname` FROM `patient`";
                                                            $result = mysqli_query($conn, $sql);
                                                            while ($row = $result->fetch_assoc()) {
                                                                $uid = $row['id'];
                                                                $fullname = $row['fname'] . " " . $row['lname'];
                                                                echo '<option value=" ' . $uid . '"  >' . $uid . " " . $fullname . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--row is doctor in form-->
                                                <div class="form-group row">
                                                    <label for="doctor" class="col-sm-2 col-form-label font-weight-bold">Doctor</label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" id="doctor" name="doctor">
                                                            <?php
                                                            $sql = "SELECT `id`, `fname`, `lname` FROM `doctor`";
                                                            $result = mysqli_query($conn, $sql);
                                                            while ($row = $result->fetch_assoc()) {
                                                                $uid = $row['id'];
                                                                $fullname = $row['fname'] . " " . $row['lname'];
                                                                echo '<option value=" ' . $uid . '"  >' . $uid . " " . $fullname . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--row is date/time in form-->
                                                <div class="form-group row">
                                                    <label for="date/time" class="col-sm-2 col-form-label font-weight-bold">Date/Time</label>
                                                    <div class="col-sm-3">
                                                        <input type="date" name="datetime1" id="datetime1" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="date" name="datetime2" id="datetime2" required>
                                                    </div>
                                                </div>
                                                <!--row is discription in form-->
                                                <div class="form-group row">
                                                    <label for="discription" class="col-sm-2 col-form-label font-weight-bold">Discription</label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" id="discription" name="discription" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <!--row is buttons in form-->
                                                <div class="form-group row">
                                                    <div class="col-sm-6 d-flex justify-content-between">
                                                        <input type="submit" class="btn btn-primary px-4" href="#" role="button">
                                                        <input type="reset" class="btn btn-warning px-4" href="#" role="button">
                                                        <a class="btn btn-danger px-4" href="#" role="button">Cancel</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ############################ Data page ############################-->

                        <div id="Data" class="tabcontent">
                            <div class="row m-0 p-0">
                                <div class="col border">
                                    <h4 class="py-2">Data</h4>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-10">
                                            <table class="table">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">Contact</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Date of birth</th>
                                                        <th scope="col">Degree</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $result = mysqli_query($conn, "SELECT * FROM `doctor`");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['id'] . "</td>";
                                                        echo "<td>" . $row['fname'] . "</td>";
                                                        echo "<td>" . $row['lname'] . "</td>";
                                                        echo "<td>" . $row['contact'] . "</td>";
                                                        echo "<td>" . $row['gender'] . "</td>";
                                                        echo "<td>" . $row['dob'] . "</td>";
                                                        echo "<td>" . $row['degree'] . "</td>";

                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <table class="table">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">Contact</th>
                                                        <th scope="col">Blood Group</th>
                                                        <th scope="col">Disease</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Date of birth</th>
                                                        <th scope="col">Address</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $result = mysqli_query($conn, "SELECT * FROM `patient`");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['id'] . "</td>";
                                                        echo "<td>" . $row['fname'] . "</td>";
                                                        echo "<td>" . $row['lname'] . "</td>";
                                                        echo "<td>" . $row['contact'] . "</td>";
                                                        echo "<td>" . $row['bloodgp'] . "</td>";
                                                        echo "<td>" . $row['disease'] . "</td>";
                                                        echo "<td>" . $row['gender'] . "</td>";
                                                        echo "<td>" . $row['dob'] . "</td>";
                                                        echo "<td>" . $row['address'] . "</td>";

                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                            <table class="table">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Doctor Name</th>
                                                        <th scope="col">Patient Name</th>
                                                        <th scope="col">From</th>
                                                        <th scope="col">TO</th>
                                                        <th scope="col">Discription</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $result = mysqli_query($conn, "SELECT `a`.`id`, `d`.`fname` AS dfname, `d`.`lname` AS dlname, `p`.`fname` AS pfname, `p`.`lname` AS plname, `a`.`fromDate`, `a`.`toDate`, `a`.`discription` FROM `appointment` AS `a` , `doctor` AS `d` , `patient` AS `p` WHERE d.id=a.doctor_id AND p.id=a.patient_id");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['id'] . "</td>";
                                                        echo "<td>" . $row['dfname'] . " " . $row['dlname'] . "</td>";
                                                        echo "<td>" . $row['pfname'] . " " . $row['plname'] . "</td>";
                                                        echo "<td>" . $row['fromDate'] . "</td>";
                                                        echo "<td>" . $row['toDate'] . "</td>";
                                                        echo "<td>" . $row['discription'] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
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