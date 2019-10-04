<?php 

    session_start();
    if(!isset($_SESSION['username'])) {
        header('Location: login.php');
    }

    require_once('header.php');
    require_once('footer.php');
    require_once('db/dbconf.php');
    require_once('showProfilePic');

    include 'action.php';

?>

<div id="nav-section">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <h1 class="title-note">CRUD</h1>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            </div>
        </div>
    </nav>
</div>