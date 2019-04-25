<!doctype html>
<html lang="en">
<head>
    <title>PHP programmer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/myStyle.css">
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

</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Best Job</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="jobList.php">Job List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myCV.php">My CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Apply Process</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-default btn-rounded " data-toggle="modal" data-target="#exampleModalLong"
                       id="signInLink">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>

<br>

<!--container-->
<div class="container">

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

    <hr>

    <!-- Copyright -->
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 Yedil, Aigerim</p>
    </footer>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
</html>