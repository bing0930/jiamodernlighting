<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand"><img src="image/JIA-logo.png" alt="logo" width="100" height="50"></a>
                
                <button class="navbar-toggler" type="button" data-bs-togglr="collapse" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 2rem;">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active text-white" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link text-white">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="product.php" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="surface.php" class="dropdown-item">Surface Light</a></li>
                                <li><a href="recessive.php" class="dropdown-item">Recessive Light</a></li>
                                <li><a href="wallLight.php" class="dropdown-item">Wall Light</a></li>
                                <li><a href="pendant.php" class="dropdown-item">Pendant Light</a></li>
                                <li><a href="step.php" class="dropdown-item">Step Light</a></li>
                                <li><a href="outdoorL.php" class="dropdown-item">Outdoor Light</a></li>
                                <li><a href="outdoorW.php" class="dropdown-item">Outdoor Wall Light</a></li>
                                <li><a href="outdoorP.php" class="dropdown-item">Outdoor Pendant Light</a></li>
                                <li><a href="table.php" class="dropdown-item">Table Lamp</a></li>
                                <li><a href="track.php" class="dropdown-item">Track Light</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="others.php" class="dropdown-item">Others</a></li>
                                <li><a href="fans.php" class="dropdown-item">Fans</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="plan.php" class="nav-link text-white">Package</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

