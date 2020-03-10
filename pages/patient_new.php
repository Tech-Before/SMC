<?php
    include('../_stream/config.php');
    session_start();
    if (empty($_SESSION["user"])) {
        header("LOCATION:../index.php");
    }


    $notAdded = '';

    $date = date_default_timezone_set('Asia/Karachi');
    $currentYear = date('Y');
    $currentYearNewPatient = date('Y-');

    $pickYearly = mysqli_query($connect, "SELECT COUNT(*)AS yearlyCounted FROM `patient_registration` WHERE auto_date LIKE '%$currentYear%'");
    $fetch_pickYearly = mysqli_fetch_assoc($pickYearly);
    $yearlyCountedPatients = $fetch_pickYearly['yearlyCounted'];

    $newPatient = $currentYearNewPatient."0".($yearlyCountedPatients + 1);

    if (isset($_POST['patientRegister'])) {
        $name = $_POST['patientName'];
        $RegNo = $_POST['patientRegNo'];
        $Age = $_POST['patientAge'];
        $Gender = $_POST['patientGender'];
        $Address = $_POST['patientAddress'];
        $DateOfAdmission = $_POST['patientDateOfAdmission'];
        $DateOfOperation = $_POST['patientDateOfOperation'];
        $disease = $_POST['patientDisease'];
        $operation = $_POST['patientOperation'];
        $consultant = $_POST['patientConsultant'];
        $yearlyNumber = $_POST['patientYearlyNumber'];
        $currentPatient = $_POST['category'];

        $queryAddPatient = mysqli_query($connect, "INSERT INTO patient_registration(
            patient_name, 
            reg_no, 
            patient_age, 
            patient_gender, 
            patient_address, 
            patient_doa, 
            patient_doop, 
            patient_disease, 
            patient_operation, 
            patient_consultant, 
            patient_yearly_no,
            category)
            VALUES(
            '$name', 
            '$RegNo', 
            '$Age', 
            '$Gender', 
            '$Address', 
            '$DateOfAdmission', 
            '$DateOfOperation', 
            '$disease', 
            '$operation', 
            '$consultant',
            '$yearlyNumber',
            '$currentPatient'
        )");

        if (!$queryAddPatient) {
            //echo "Error";

            $notAdded = 'Not added';
        }else {
            header("LOCATION: patients_list.php");
        }
    }


    include('../_partials/header.php') 
?>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap-datetimepicker.css">
<!-- Top Bar End -->
<div class="page-content-wrapper ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="page-title">Add New Patient</h5>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mb-4 page-title">Patient Details</h4>
                        <form method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 offset-sm-6 col-form-label">M.R No.</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="<?php echo $newPatient ?>" placeholder="Yearly No." name="patientYearlyNumber" id="example-text-input" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="patientName" type="text" placeholder="Patient Name" id="example-text-input">
                                </div>

                                 <label class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="patientAge" type="number" placeholder="Patient Age" value="" id="example-text-input">
                                </div>
                              
                            </div>
                            <div class="form-group row">
                               
                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-4">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="1" name="patientGender">Male
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="2" name="patientGender">Female
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="3" name="patientGender">Other
                                        </label>
                                    </div>
                                </div>

                                <label class="col-sm-2 col-form-label">Case</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="patientDisease" placeholder="Patient Case" value="" id="example-text-input">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-4">
                                    <input type="text" id="textarea" class="form-control" name="patientAddress" placeholder="Address">
                                </div>
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="patientOperation">
                                        <option value="Apendix">abc</option>
                                        <option value="Heart Bypass">xyz</option>
                                    </select>
                                </div>

                            </div>
                            <hr>
                        <h4 class="mb-4 page-title">Patient Admission Details</h4>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Date of Admission</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input  class="form-control form_datetime" name="patientDateOfAdmission" placeholder="dd/mm/yyyy-hh:mm" >
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                    </div>
                                </div>

                                 <label class="col-sm-2 col-form-label">Refered by / Consultant</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="patientConsultant">
                                        <option value="Dr. Habib">Dr. Habib</option>
                                        <option value="Dr. Taj Muhammad">Dr. Taj Muhammad</option>
                                        <option value="Dr. Aman Ullah">Dr. Aman Ullah</option>
                                    </select>
                                </div>
                                


                                <!--<label class="col-sm-2 col-form-label">Date of Operation</label>
                                 <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="" class="form-control  form_datetime" name="patientDateOfOperation" placeholder="dd/mm/yyyy-hh:mm" >
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                    </div>
                                </div> -->
                            </div>

                           
                            <div class="form-group row">
                                 <label class="col-sm-2 col-form-label">Room No.</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="patientConsultant">
                                        <option value="Dr. Habib">1</option>
                                        <option value="Dr. Taj Muhammad">12</option>
                                        
                                    </select>
                                </div>

                               <label class="col-sm-2 col-form-label">Attendant Name</label>
                                <div class="col-sm-4">
                                    <input class="form-control" name="patientName" type="text" placeholder="Attendant Name" id="example-text-input">
                                </div>
                                
                            </div>
                           
                            <input type="hidden" name="category" value="currentPatient">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <?php include('../_partials/cancel.php') ?>
                                    <button type="submit" name="patientRegister" class="btn btn-primary waves-effect waves-light">Add Patient</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <h3>
                        <?php echo $notAdded; ?>
                    </h3>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container fluid -->
</div> <!-- Page content Wrapper -->
</div> <!-- content -->
<?php include('../_partials/footer.php') ?>

</div>
<!-- End Right content here -->
</div>
<!-- END wrapper -->
<!-- jQuery  -->
 <?php include('../_partials/jquery.php') ?>
<!-- App js -->
        <?php include('../_partials/app.php') ?>
        <?php include('../_partials/datetimepicker.php') ?>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd hh:ii"
    });
</script>
</body>

</html>