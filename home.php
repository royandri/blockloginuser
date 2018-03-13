<?php
session_start();
    include_once 'config/dao.php';
    $user = new Dao();
    $uid = $_SESSION['id'];
    if (!$user->get_session()){
       header("location:index.php");
    }
    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/navbar-top-fixed.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">RealmApps</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <span class="mr-sm-3"> Hi, <?php $user->get_fullname($uid); ?></span>
            <a class="btn btn-primary" href="home.php?q=logout" role="button">Logout</a>
          </form>
        </div>
      </nav>
    </body>
</html>
