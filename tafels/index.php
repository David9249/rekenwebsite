<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- verbinding met de css-file -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- verbinding maken met de css-file van Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tafelapp</title>
</head>

<body data-bs-theme="dark">
<?php   
    // include '../include/nav.php';
     include '../include/nav.php';
    ?>
   
    <div class="container">
        <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://getbootstrap.com/docs/5.3/getting-started/introduction/"
                                target="_blank">Bootstrapbijbel</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Rekenen
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/tafels/">Tafels</a></li>
                                <li><a class="dropdown-item" href="/tafelsoefenen/">Tafels oefenen</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                    <!-- </ul> -->
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </nav>  -->


        <!-- 3 kolommen in 1 rij-->
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="row g-3 mb-3">
                    <div class="col-4">
                        <label for="inputTafelVan" class="form-label">Welke tafel?</label>
                        <input type="number" class="form-control" id="inputTafelVan">
                    </div>
                    <div class="col-4">
                        <label for="inputTafelLengte" class="form-label">Lengte tafel</label>
                        <input type="number" class="form-control" id="inputTafelLengte" value="10">
                    </div>
                    <div class="col-4" style="margin-top: 48px;">
                        <button type="button" class="btn btn-success" onclick="displaytafel()">GO</button>
                    </div>
                </form>
                <div class="card text-center">
                    <div id="tafelheader" class="card-header">
                        Tafel van ...
                    </div>
                    <div id="tafel" class="card-body">

                    </div>
                    <div class="card-footer text-body-secondary">
                        
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>


    </div>
    <!-- dit zorgt ervoor dat animaties in bootrstrap het doen -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
</body>

</html>