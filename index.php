<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spike's Store | Welcome</title>

    <link rel="shortcut icon" href="img/webimg/icon.ico">
    <link rel="stylesheet" href="style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>

<body>

    <div class="container-fluid col-12 ">
        <div class="row">
            <!-- Side Panel (60%) -->

            <div class="side-panel-container col-lg-8 col-md-12 col-sm-12 ">
                <div class="row">

                    <div class="side-panel-signIn text-center">
                        <div class="banner-container">
                            <img src="img/webimg/text-spiket-logo-png.png" class="signin-banner-img">
                        </div>

                        <div class="paragraph-container">
                            <p>Welcome to Spike's Cactus Haven, where we bring the wild charm of the desert straight to your doorstep!<br>
                                Inspired by Spike from Brawl Stars, our store specializes in vibrant cactus variants—perfect for collectors, plant lovers, and gaming fans alike. <br>
                                Tough, low-maintenance, and full of character, our cacti are ready to spike up your space! 🌵✨</p>
                        </div>

                        <div class="signnIn-icon-container">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-envelope-at"></i>
                            <i class="bi bi-twitter"></i>
                            <i class="bi bi-linkedin"></i>
                        </div>
                    </div>


                </div>

            </div>

            <!-- Side Panel (60%) -->

            <div class="col-lg-4 col-md-12 col-sm-12 ">
                <div class="row login-panel-row">

                    <!-- Log In Panel (40%) -->
                    <div class="create-account-container text-center " id="createAcBox">

                        <div class="ca-logo-img-container">
                            <img src="img/webimg/spike-logo.png">
                        </div>

                        <div class="head-container-ca">
                            <h3> Let's Create an Account !</h3>
                        </div>

                        <div class="input-container-ca">

                            <div class="input-container">
                                <input type="text" id="customInput" class="custom-input" required>
                                <label for="customInput" class="custom-label">First Name</label>
                                <span class="custom-underline"></span>
                            </div>

                            <div class="input-container">
                                <input type="text" id="customInput" class="custom-input" required>
                                <label for="customInput" class="custom-label">Last Name</label>
                                <span class="custom-underline"></span>
                            </div>

                            <div class="input-container">
                                <input type="text" id="customInput" class="custom-input" required>
                                <label for="customInput" class="custom-label">Mobile</label>
                                <span class="custom-underline"></span>
                            </div>

                            <div class="input-container">
                                <input type="text" id="customInput" class="custom-input" required>
                                <label for="customInput" class="custom-label">E-Mail</label>
                                <span class="custom-underline"></span>
                            </div>

                            <div class="input-container password-container">
                                <input type="password" id="customPassword" class="custom-input" required>
                                <label for="customPassword" class="custom-label">Password</label>
                                <span class="custom-underline"></span>
                                <span id="eyeIcon" class="eye-icon" onclick="togglePassword()">🔒</span>
                            </div>
                        </div>

                        <div class="row col-12">

                            <div class="gender-dropdown col-6">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Gender
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                </ul>
                            </div>

                            <div class="col-6">
                                <label class="toggle-container"> Remeber Me
                                    <input type="checkbox" class="hidden-toggle">
                                    <span class="toggle-emoji"> <i class="bi bi-check2"></i> </span>
                                </label>

                            </div>

                        </div>

                        <div class="ca-button-container col-8">

                            <div class="row ">
                                <hr class="m-3">
                                <p>Fill the Required Informations and Click the Create Button to Create a Account
                                    if You Already have a Account Click On Log In !
                                </p>
                                <div class="col-4">
                                    <button class="animated-button blue-button">Create</button>
                                </div>
                                <div class="col-4 ">
                                    <button class="animated-button green-button" onclick="switchSignView()">Log In</button>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Log In Panel (40%) -->

                    <div class="log-in-container text-center d-none" id="logInBox">

                        <div class="ca-logo-img-container">
                            <img src="img/webimg/spike-logo.png">
                        </div>

                        <div class="head-container-ca">
                            <h3> Welcome Back !</h3>
                            <p>Use Your E-Mail and Password to Log In to Your Account</p>
                        </div>

                        <div class="input-container">
                            <input type="text" id="customInput" class="custom-input" required>
                            <label for="customInput" class="custom-label">E-Mail</label>
                            <span class="custom-underline"></span>
                        </div>

                        <div class="input-container password-container">
                            <input type="password" id="customPassword" class="custom-input" required>
                            <label for="customPassword" class="custom-label">Password</label>
                            <span class="custom-underline"></span>
                            <span id="eyeIcon" class="eye-icon" onclick="togglePassword()">🔒</span>
                        </div>



                        <div class="ca-button-container col-8">

                            <div class="row ">
                                <hr class="m-3">
                                <p>Fill Required Informations and Click Log In to Log in with Your
                                    Account ! If you Dont have a Account Use Create Button to Create an Account !
                                </p>
                                <div class="col-4 ">
                                    <button class="animated-button green-button">Log In</button>
                                </div>
                                <div class="col-4">
                                    <button class="animated-button blue-button" onclick="switchSignView()">Create</button>
                                </div>
                            </div>

                        </div>



                    </div>


                </div>
            </div>



        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>