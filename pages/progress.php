    

    <?php
        include 'inc/header.php';
    ?>


    <p class="text-center display-4 mb-md-5"> My apply progress</p>
    <div class="row">
        <div class="col text-center">
            <p>
                <a class="btn btn-primary w-75 " data-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false"
                   aria-controls="collapseExample">
                    Beeline: Android Programmer
                </a>
            </p>
        </div>
    </div>
    <div class="collapse mb-md-4" id="collapseExample">
        <div class="card card-body">
            <span class="text-danger">Denied!</span> Sorry, you're not qualified.
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <p>
                <a class="btn btn-primary w-75" data-toggle="collapse" href="#collapseExample2" role="button"
                   aria-expanded="false"
                   aria-controls="collapseExample">
                    Google: AI engineer
                </a>
            </p>
        </div>
    </div>
    <div class="collapse mb-md-4" id="collapseExample2">
        <div class="card card-body">
            <span class="text-success">Congradulations!</span> Please come to interview at 2:00pm Friday.
        </div>
    </div>

    <?php
        include 'inc/footer.php';
    ?>