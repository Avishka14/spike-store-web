<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="img/webimg/icon.ico">
    <link rel="stylesheet" href="style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="col-12 header-container ">

        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid top-header">
                <img src="img/webimg/text-spiket-logo-small-png.png" style="width: 200px;" class="p-3">

                <div class="searchbox-container ">
                    <input type="text" class="search-box" placeholder="Search...">
                    <button class="search-button">&#128269;</button>
                </div>

                <div class="top-header-icon-container">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href=""> <i class="bi bi-person-circle"></i> </a>
                    </li>

                    <li class="nav-item">
                        <a href=""> <i class="bi bi-bag"></i></i> </a>
                    </li>

                </ul>

                </div>

            </div>
        </nav>

        <nav class="navbar navbar-expand-lg bottom-nav-main-container p-3 d-flex">
            <div class="container-fluid">
                <img src="img/webimg/hand-waving-spike.png" style="width: 50px;">

               
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav btm-nav-ul ">
                        <li class="nav-item">
                            <a class="nav-link disabled" style="color:  rgb(0, 255, 149);">Welcome </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled" style="color:  rgb(0, 255, 149); font-weight: bold;"> Lakmal </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"  style="color: white">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white" >Categories</a>
                        </li>

                    </ul>
                </div>

                <span class="ms-auto side-panel-t-btn" onclick="navBarExpand()" style="font-size: 25px; color :white;"> <i class="bi bi-list"></i> </span>
              

            </div>
        </nav>

        <div class="side-paneldic-sm d-none" id="navPanelSm">
                    <ul class="navbar-nav btm-nav-ul ">
                        <li class="nav-item">
                            <a class="nav-link disabled" style="color:  rgb(0, 255, 149);">Welcome </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled" style="color:  rgb(0, 255, 149); font-weight: bold;"> Lakmal </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"  style="color: white">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"  style="color: white" >Categories</a>
                        </li>

                    </ul>
                </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>


</body>

</html>