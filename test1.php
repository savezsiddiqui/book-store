<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

<?php
include 'connection.php';
session_start();
?>

<style>
    .nav {
        position: -webkit-sticky;
        /* Safari */
        position: sticky;
        top: 40;
    }
</style>

<body>

    <div class="row">
        <div class="col-2" style="margin-top: 50px;">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-all-books-tab" data-toggle="pill" href="#v-pills-all-books" role="tab"
                    aria-controls="v-pills-all-books" aria-selected="false">BUY BOOKS</a>
                <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                    aria-controls="v-pills-home" aria-selected="false">ADD BOOKS</a>
                <?php if (!isset($_SESSION['username'])) { ?>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                    aria-controls="v-pills-messages" aria-selected="false">LOGIN</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                    aria-controls="v-pills-settings" aria-selected="false">SIGNUP</a>
                <?php 
            } else { ?>
                <a href="logout_script.php"><button class="btn btn-outline-primary btn-sm" style="margin: 15px;">LOGOUT</button>
                </a>
                <?php 
            } ?>
            </div>
        </div>

        <div class="col-9" style="margin: 50px;">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <?php include 'views/add_books.php'; ?>
                </div>
                <div class="tab-pane fade show active" id="v-pills-all-books" role="tabpanel" aria-labelledby="v-pills-all-books-tab">
                    <?php include 'views/all_books.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <?php include 'views/login.php'; ?>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <?php include 'views/signup.php'; ?>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</html>