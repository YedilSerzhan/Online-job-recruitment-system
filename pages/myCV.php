    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=bek4zv42gwp1dhkb51g1s1r6ocg6c2qpwegbs1epvekl7xxw"></script>
  <script>
  tinymce.init({
    selector: '#description'
  });
  </script>

<?php
   if(isset($_POST['update'])){
    require_once('../config/db.php');
    $query = "INSERT INTO `jobs`(`job_name`, `job_location`, `salary`, `year_of_experience`,  `job_description`, `company_id`) VALUES ('database manager','Almaty',8000,5,?,'1')";
 
        if($stmt = mysqli_prepare($dbc, $query)){
            $description = $_POST['publicinfo'];
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $description);
            mysqli_stmt_execute($stmt);
        }  

   }
?>
</head>

    <?php 
    include 'inc/header.php'
    ?>

    <p class="text-center display-4">My Curriculum Vitae</p>
    <p class="text-center text-muted mb-lg-5"> here's your basic info, your applied companys will see.</p>

    <div class="row">
        <div class="col-md-8 offset-2">
            <form method="post">
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">First Name</label>
                    <div class="col-8">
                        <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Last Name</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here"
                               type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Gender</label>
                    <div class="col-8">
                        <select id="select" name="select" class="custom-select">
                            <option value="admin">Man</option>
                            <option value="admin">Womanan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Degree</label>
                    <div class="col-8">
                        <select id="degree" name="degree" class="custom-select">
                            <option value="admin">Bachelor's degree</option>
                            <option value="admin">Master's degree</option>
                            <option value="admin">Doctoral's degree</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Years of experience</label>
                    <div class="col-8">
                        <input id="experience" name="experience" placeholder="Enter the number years of experience of your" class="form-control here"
                               type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email*</label>
                    <div class="col-8">
                        <input id="email" name="email" placeholder="Email" class="form-control here" 
                               type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel" class="col-4 col-form-label">Tel</label>
                    <div class="col-8">
                        <input id="tel" name="tel" placeholder="Telephone number" class="form-control here"
                               type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="publicinfo" class="col-4 col-form-label mb-4">Experience & skills</label>
                    <div class="col-12">
                        <textarea id="description" name="publicinfo" cols="80" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <!--<div class="form-group row">-->
                    <!--<label for="newpass" class="col-4 col-form-label">New Password</label>-->
                    <!--<div class="col-8">-->
                        <!--<input id="newpass" name="newpass" placeholder="New Password" class="form-control here"-->
                               <!--type="text">-->
                    <!--</div>-->
                <!--</div>-->
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="update" type="submit" class="btn btn-primary">Update My Profile</button>
                    </div>
                </div>
            </form>
        

   <?php 
   include 'inc/footer.php';
   ?>