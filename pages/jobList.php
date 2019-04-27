
    <?php require_once('../config/db.php') ?>
    <?php
    $query = "select * from jobs order by post_date desc";    
    $result = @mysqli_query($dbc, $query);
    if ($result) {
      $jobs=mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <!--search form-->
    <div class="row">
        <form class="form-inline col-md-8 offset-2 shadow-lg py-4">
             <input type="text" class="form-control transparent-input text-primary col-md-8 offset-1" placeholder="I am looking for...">
                <button type="submit" class="btn btn-outline-primary text-md-center col-md-1.5 offset-1">Search</button>
        </form>
    </div>

    <br>

    <!--filter options-->
    <form>
        <div class="form-row justify-content-end">
            <div class="form-group col-md-2">
 
                <select class="styled-select blue semi-square">
                    <option selected>Order by</option>
                    <option >By date</option>
                    <option>By salary</option>
                </select>
            </div>
            <div class="form-group col-md-2">

                <select class="styled-select blue semi-square">
                    <option selected>For all time</option>
                    <option >For month</option>
                    <option>For week</option>
                </select>
            </div>
        </div>

    </form>
    <h3 class="pb-3 mb-4 font-italic border-bottom">
        All Jobs:
    </h3>

    <!--job list:-->
    <?php foreach($jobs as $job): ?>
            <!-- job boxes-->
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250 shadow-lg jobBox4">
                        <div class="card-body d-flex flex-column align-items-start">
                            <h3><strong class="d-inline-block mb-0 text-primary"><?php echo $job['job_name']?></strong></h3>
                            <p class="mb-0">
                                <a class="text-dark" href="#"><?php echo $job['job_location']?></a>
                            </p>
                            <div class="mb-1 text-muted"><?php echo $job['post_date']?></div>
                            <p class="card-text mb-auto"><?php echo substr($job['job_description'],0,100)."..."?></p>
                            <a href="details.php?id=<?php echo $job['job_id']?>">Continue reading</a>

                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach; ?>

    <?php
        include 'inc/footer.php';
    ?>