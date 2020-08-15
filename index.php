<?php
include ('header.php');
?>

<!DOCTYPE html>
<html lang="en">

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li> -->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
              <div class="masthead-heading text-uppercase">Mihir Thakker</div>
              <div class="masthead-subheading">I am a Profesional Web Developer & Software Engineer</div>
              <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Find Out More</a>
            </div>
        </header>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Me</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <div class="row">
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/profilepic.jpg" style="height: 130px; border: 5px solid #D8D8D8" alt="" /></div>
                  <div class="col-lg-8 mx-auto text-center">
                    <p class="large" style="text-align: left;">I am an international student currently living in London, finished my second year in Computing and Management at Loughborough University.
                      My key interests are in Computer Science, Business and Economics.
                      I spend my time learning new languages and watching sports matches.</p>
                  </div>
                </div>
            </div>
        </section>
        <!-- Resume -->
        <section class="page-section" style="background-color: #23232c" id="resume">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Resume</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>

                <div class="row" style="padding: 20px 0px; border-bottom: 1px solid #e40c2b;">
                  <div class="timeline-image">
                    <h5 class="section-heading text-uppercase" style="border-bottom: 3px solid #DEC79B; padding-bottom: 6px;">Education</h5>
                  </div>
                  <div class="col-lg-8 mx-auto text-center">
                    <h5 style="text-align: left; color: #DEC79B ">Loughborough University</h5>

                    <p class="large" style="text-align: right;">September 2017 - June 2021</p>

                    <h6 style="text-align: left; color: #DEC79B ">BSc. in Computing and Management </h6>

                    <p class="large" style="text-align: left;">
                      • Passed with upper 2:2 in First Year <br>
                      • Passed with upper 2:1 in Second Year</p>
                  </div>
                </div>

                <div class="row" style="padding: 20px 0px;">
                  <div class="timeline-image">
                    <h5 class="section-heading text-uppercase" style="border-bottom: 3px solid #DEC79B; padding-bottom: 6px;">Experience</h5>
                  </div>
                  <div class="col-lg-8 mx-auto text-center">
                    <h5 style="text-align: left; color: #DEC79B ">London Magical Tours</h5>

                    <p class="large" style="text-align: right;">November 2019 - August 2020</p>

                    <h6 style="text-align: left; color: #DEC79B ">Internship - Web Developer </h6>

                    <p class="large" style="text-align: left;">
                      Full-stack Web Developer using principles of Software Engineering. <br>
                      My primary focus on E-Commerce and Tourism. <br>
                      Main languages used - HTML, CSS, PHP, MySQL and JavaScript.</p>
                  </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Finish</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact-->
        <section class="page-section" style="background-color: #23232c" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Mihir Thakker 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                      <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/mihir-thakker-265ba8164/"><i class="fab fa-linkedin-in"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="http://github.com/mihirt13"><i class="fab fa-github"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/channel/UC4IYtkEeXyVTC3pBBaLzD3w"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/close-icon.png" style="height: 35px;" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="img/portfolio/01-full.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/02-full.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/03-full.jpg" alt="Third slide">
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>

                                    <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="" /> -->
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/close-icon.png" style="height: 35px;" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="img/portfolio/02-full.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/03-full.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/04-full.jpg" alt="Third slide">
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>


                                    <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="" /> -->
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Explore</li>
                                        <li>Category: Graphic Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/close-icon.png" style="height: 35px;" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="img/portfolio/03-full.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/04-full.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/05-full.jpg" alt="Third slide">
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>

                                    <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="" /> -->
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Finish</li>
                                        <li>Category: Identity</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/close-icon.png" style="height: 35px;" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="img/portfolio/04-full.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/05-full.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/06-full.jpg" alt="Third slide">
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>

                                    <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="" /> -->
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Lines</li>
                                        <li>Category: Branding</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/close-icon.png" style="height: 35px;" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="img/portfolio/05-full.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/06-full.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/07-full.jpg" alt="Third slide">
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>

                                    <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="" /> -->
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Southwest</li>
                                        <li>Category: Website Design</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="img/close-icon.png" style="height: 35px;" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="img/portfolio/06-full.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/07-full.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="img/portfolio/08-full.jpg" alt="Third slide">
                                        </div>
                                      </div>

                                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>

                                    <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="" /> -->
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Window</li>
                                        <li>Category: Photography</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="mail/jqBootstrapValidation.js"></script>
        <script src="mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>