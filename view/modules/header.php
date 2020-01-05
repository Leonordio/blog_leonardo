<?php require_once "core/bootstrap.php"; ?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta name="viewpoprt" content="width=device widht, initial scale=1.0">
    <meta name="description" content="Leonardo's Blog" charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>

        <!-- Navbar -->

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FFBF00;">

            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/logo.png" style="width: 100px; height: 65px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Chi Sono</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio.php">Portfolio <span class="sr-only"></span></a>
                        </li>
                    </ul>

                    <!-- Side Buttons -->


                    <?php if (isLogged()) { ?>
                        <a class="btn btn-warning my-2 px-5 mr-3" role="button" href="post.php"><span style="color: white">Post</span></a>
                        <a class="btn btn-danger my-2 px-5 mr-3" role="button" href="logout.php">Logout</a>
                    <?php } else { ?>
                        <a class="btn btn-warning px-5  mr-3" role="button" href="login.php">Login</a>
                    <?php } ?>

                </div>
            </div>
        </nav>
    </header>