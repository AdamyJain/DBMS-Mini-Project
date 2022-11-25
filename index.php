<?php include 'config.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a website which will provide nurse to old age patients.">
    <meta name="keywords" content="nurse,hospital">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Nurse4U Home page</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! --

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 85px;">
        <a class="navbar-brand" href="index.html">
            <img src="https://www.aginganddisabilitybusinessinstitute.org/wp-content/uploads/2018/02/Elderly-Couple-Blue-Vector-Image.jpg" width="60" style="border-radius:50px; margin:10px" alt="Hustlers-logo">
        </a>
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Nurse4U</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about us.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="contact us.php">CONTACT US</a>
                    </li>
                </ul>
                <form class="d-flex nav-search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <a href="register.php" style="margin-left:10px;margin-right:0px; background: #27AAE2" class="btn" >Hospital Registration </a>
            <li class="nav-item dropdown" style="list-style-type: none;">					
            <a class="login dropdown-toggle" href="#" type="button" style="color:black;font-weight: 400;font-size: 18px;background: #27AAE2;transition: 0.5s;border-radius: 7px;letter-spacing: 1px;padding: 4px 10px;margin:4px;border: 2px solid #27AAE2; text-decoration:none; font-style: system-ui,-apple-system,"Segoe UI;"class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                Login
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
            <a class="dropdown-item" data-bs-toggle="modal" href="index.1" data-bs-target="#ModalLogin">PATIENT</a>
            </li>
            <li>
            <a class="dropdown-item" data-bs-toggle="modal" href="dashboard.php" data-bs-target="#StaffLogin">HOSPITAL STAFF</a>
            </li>
            </ul>
            </li>
                <button style="background: #27AAE2" class="btn" data-bs-toggle="modal" data-bs-target="#SignUpModal">Sign Up</button>
            </div>
        </div>
    </nav>
							<!-- Modal -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel" style="font-weight:bold;font-family: Georgia, 'Times New Roman', Times, serif;">Login to your account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                    <div class="mb-3">
                        <label for="recipient-email" class="col-form-label">Email Id</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Id" required >
                    </div>    
                        <div class="mb-3">
                        <label for="recipient-password" class="col-form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required >
                    </div>  
                        <br>
                <div class="modal-footer">
                    <button type="submit"  style="background: #27AAE2" name="Login" class="btn" data-bs-dismiss="modal">Login</button>
                </div>
                </form>    
            </div>
            </div>
</div>
    </div>
    			<!-- Modal -->
        <div class="modal fade" id="StaffLogin" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel" style="font-weight:bold;font-family: Georgia, 'Times New Roman', Times, serif;">Login to your account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                    <div class="mb-3">
                        <label for="recipient-email" class="col-form-label">Hospital Email Id</label>
                        <input type="email" name="Hospital_email" class="form-control" id="email" placeholder="Email Id" required >
                    </div>    
                        <div class="mb-3">
                        <label for="recipient-password" class="col-form-label">Hospital Password</label>
                        <input type="password" name="Hospital_password" class="form-control" id="password" placeholder="Password" required >
                    </div>  
                        <br>
                <div class="modal-footer">
                    <button type="submit" name="Hospital_Login" class="btn btn-success" data-bs-dismiss="modal">Login</button>
                </div>
                </form>    
            </div>
            </div>
</div>
    </div>
    <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SignUpModalLabel" style="font-weight:bold;font-family: Georgia, 'Times New Roman', Times, serif; ">Create a new account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required >
                    </div>
                        <div class="mb-3">
                        <label for="recipient-email" class="col-form-label">Email Address</label>
                        <input type="email" id="exampleInputEmail1" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                        <label for="recipient-phone" class="col-form-label">Phone Number</label>
                        <input type="phone" name="phone_no" id="phone" class="form-control"  placeholder="Phone Number" required >
                        </div>
                        <div class="mb-3">
                        <label for="recipient-password" class="col-form-label">Password</label>
                        <input type="password" id="InputPassword" class="form-control" name="password" required>
                        </div>
                        <div class="mb-3">
                        <label for="recipient-confirmpass" class="col-form-label">Confirm Password</label>
                        <input type="password" id="InputPassword" class="form-control" name="con_pass" required>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal" name="submit">Create your account</button>
                </div>   
                </form> 
            </div>
        </div>
        </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
            <div class="carousel-item active" >
                <img src="slide1.jpg" class="d-block w-100" alt="slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h3>ENROLL TODAY ONLY!</h3>
                    <p>Not Tomorrow Not Next Week But Right Now</p>
                    <button type="button" class="btn btn-primary">Get your First live meeting</button>
                    <button type="button" class="btn btn-success">Ask our Trusted users</button>
                    <button type="button" class="btn btn-danger">Enroll Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slide2.jpg" class="d-block w-100" alt="slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h3>NEVER HESITATE TO TRUST US!</h3>
                    <p>Cause we are the only association whom you can trust the most</p>
                    <button type="button" class="btn btn-primary">Get your First live meeting</button>
                    <button type="button" class="btn btn-success">Ask our Trusted users</button>
                    <button type="button" class="btn btn-danger">Enroll now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slide3.jpg" class="d-block w-100 " alt="slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Find About our Doctors and Nurse First</h3>
                    <p>Once you will get the idea about our Doctors then your enrollment becomes easier</p>
                    <button type="button" class="btn btn-primary">Get your First live meeting</button>
                    <button type="button" class="btn btn-success">Ask our Trusted users</button>
                    <button type="button" class="btn btn-danger">Enroll now</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br><br>
    <div class="ChatBot">
    <img src="Doctor_chatbot.png" alt="Doctor Chatbot" style="width:30%;height:30%;margin-left:550px;border:black;">
    <button class="btn btn-danger" id="DocBot"style="padding:4px;height:50px;margin-left:40px;width:250px;">TALK WITH OUR DOCBOT</button>
    <br><br><br><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#HowToTalkModal" style="height:50px;margin-left:680px;width:150px;">HOW TO TALK</button>
    </div>
    <br><br><br><br><br>
    <div class="modal fade" id="HowToTalkModal" tabindex="-1" aria-labelledby="HowToTalkModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>How To Talk To Our DOCBOT Talking ChatBot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
            <p><b>Click on the "TALK WITH OUR DOCBOT" Button and you can VERBALLY ask  the Given Questions to our ChatBot:</b></p>
        </div>
</div>
</div></div>    
<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 1190px;">
        <div class="col-sm-6 col-lg-4 mb-4 my-5 mx-5 " style="position: absolute; left: 0%; top: 0px;">
            <div class="card">
                <img src="nurse1.jpg" alt=" private coaching" svg class="bd-placeholder-img card-img-top" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text></svg>

                <div class="card-body">
                    <h5 class="card-title">Personal Nurse</h5>
                    <p class="card-text">Get the personal nurse for the old age patients.<br></p>
                    <p>Who are highly trained and suitable for this purpose only.<br>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4 my-5" style="position: absolute; left: 50%; top: 0px;">
            <div class="card p-3">
                <figure class="p-3 mb-0">
                    <blockquote class="blockquote">
                        <p>Help the Old age patients.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-muted my-2">
                    Usman Yousaf <cite title="Source Title"></cite>
                    </figcaption>
                </figure>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4 my-5" style="position: absolute; left: 50%; top: 252px;width:475px; height:200px">
            <div class="card">
                <img src="nurse2.jpg" alt="Training" svg class="bd-placeholder-img card-img-top" style="width:450px;" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="80%" fill="#dee2e6" dy=".3em"></text></svg>

                <div class="card-body Training">
                    <h5 class="card-title">Training Nurse</h5>
                    <p class="card-text my-4">Get in touch with the nurse under training in college.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4 my-4" style="position: absolute; left: 50%; top: 654px;">
            <div class="card">
                <img src="nurse3.jpg" alt="Events" svg class="bd-placeholder-img card-img" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Card image" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text></svg>

            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4 mx-5" style="position: absolute; left: 0%; top: 826px;">
            <div class="card p-3 text-end">
                <figure class="mb-0">
                    <blockquote class="blockquote">
                        <p>Treat them well if you want to be treated good in future.</p>
                        <br>
                    </blockquote>
                    <figcaption class="blockquote-footer mb-0 text-muted">
                    Naresh Trehan<cite title="Source Title"></cite>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4 my-4" style="position: absolute; left: 50%; top: 940px;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <p class="card-text my-4">Experience our Doctors giving live speech regarding how to take care of your old parents and relatives.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container marketing Achievements" style=" padding: 2%; height:auto; width:auto;">
            <!-- Three columns of text below the carousel -->
            <h3><br>OUR TOP TRUSTED DOCTORS</h3>
            <br>
            <div class="row" style="padding-left: 65px;">
                <div class="col-lg-4">
                    <img src="doctor1.jpg" style="padding-left:10px;" alt="success story 1" svg class="bd-placeholder-img rounded-circle" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
                    <h2 style="padding-left:10px;"><br>Usman Yousaf</h2>
                   
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="doctor2.jpg" alt="success story 2" svg class="bd-placeholder-img rounded-circle" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
                    <h2><br>Naresh Trehan</h2>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="doctor3.jpg" alt="success story 3" svg class="bd-placeholder-img rounded-circle" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

                    <h2><br>Lalit Panchal</h2>
                   
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
    </div>

    <div class="container-fluid">
        <footer class="py-5">
            <div class="row">
                <div class="col-2">

                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Site map</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Media inquiries</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Return policy</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Accessibility</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Careers</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Customer support</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Policies</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Crew Program</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Feedback</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                    <form>
                        <h3>Get our Doctors articles, podcasts and videos in your inbox, biweekly.</h3>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2017-2022 Nurse4U, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <div class="nav-link active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                      </svg>
                    </div>
                    <div class="nav-link active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg>
                    </div>

                    <div class="nav-link active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    </div>
                </ul>
            </div>
        </footer>
    </div>
<script src="bot.js"></script>
</body>

</html>