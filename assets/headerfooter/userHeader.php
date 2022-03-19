<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>cemetery New</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.php">Argao Catholic Cemetery</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="Booking.php">Reserve Mass for Decease</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><?php echo $_SESSION['user']; ?></a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="UserProfile.php">Profile</a><a class="dropdown-item" href="#">
                                <div class="d-inline-flex justify-content-center"><a class="btn btn-primary btn-sm" role="button" href="#Logout" data-bs-toggle="modal" style="background: rgba(13,110,253,0);color: var(--bs-dark);font-size: 16px;border-style: hidden;padding: 0px;">Logout</a></div>
                            </a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" role="dialog" tabindex="-1" id="Logout">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Log Out Account?</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center text-muted">Are you sure to log out? </p>
                </div>
                <div class="modal-footer">
                    <form action="./assets/php/dbLogout.php" method="POST">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
