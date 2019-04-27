
    <?php require_once('../config/db.php') ?>
    <?php

        $id = mysqli_real_escape_string($dbc,$_GET['id']);
        $query = "SELECT * FROM jobs j inner join companies c using(company_id) where job_id = ".$id;    
        $result = @mysqli_query($dbc, $query);
        if ($result) {
            $job = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
        }
        else {
        $error_msg = mysqli_error($dbc);
        echo $error_msg;
        }
    ?>

    <?php
        include 'inc/header.php';
    ?>

    <h1><?php echo $job['job_name']?></h1>

    <hr>


    <h3 class="text-primary mb-md-3"> Primary Information:</h3>

    <!--primary information-->
    <div class="mx-md-5 clearfix">

        <p> Location: <?php echo $job['job_location']?></p>

        <p> Salary: <?php echo $job['salary']?> tg</p>

        <p> Experience: <?php echo $job['year_of_experience']?> years</p>

        <p> Post date: <?php echo $job['post_date']?> years</p>

        <button class="btn btn-primary float-right">Apply</button>

    </div>

    <hr>

    <h3 class="text-info mb-md-3"> More Details:</h3>

    <!--description -->
    <div id="description" class="mb-md-5">
        <strong>Company Information:</strong>
        <p> Name: <?php echo $job['company_name']?></p>
        <p> details: <?php echo $job['company_description']?></p>
        <strong>Description:</strong>
        <p><?php echo $job['job_description']?></P>
    </div>


       <?php
        include 'inc/footer.php';
    ?>