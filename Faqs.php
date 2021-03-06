
<!--
    - Backyard Media 
    - Filename: Faqs.html
    - this is for common questions and asnwers relating to the company 
    - @author: Chatsuda Rattarasan
    - @author: Ngoc Tran
    - Copyright (c) 2018 Backyard Media Company & XN TEAM (Chatsuda Rattarasan, Ngoc Tran, Haocheng Li)
    - Date: May 29 2018   
    - For the full copyright and license information, please view the LICENSE
-->

<?php
require_once './phpControl/Includes/authenticate.php'
?>


<!Doctype html>

<html>
   <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Backyard Media</title>
        <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" href="css/faqs.css">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/nav.js"></script>   
       
    </head>
   
    
    <body>

  <!-- header starts here -->
        <header>
            <!---  Navigation Start here---->
            <!-- company logo -->
            <nav class="navbar fixed-top navbar-expand-lg bg-custom">
                <a class="navbar-brand mx-md-2" href="index.php">
                    <img src="img/logo.png">
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars fa-2x white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mr-md-4 mx-0">
                        <!-- About Us tab -->
                            <a class="nav-link" href="AboutUs.php">AboutUs</a>
                        </li>
                        <!-- Podcast tab -->
                        <li class="nav-item dropdown mr-md-4 mx-0">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Podcasts
                                </a>
                                <!-- drop down list for podcast -->
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">News</a>
                                    <a class="dropdown-item" href="#">Laws</a>
                                    <a class="dropdown-item" href="#">Technology</a>
                                    <a class="dropdown-item" href="#">Art</a>
                                    <a class="dropdown-item" href="#">All</a>
                                </li>
                                <!-- blog tab -->
                        <li class="nav-item mr-md-4 mx-0">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <!-- Faqs tab -->
                        <li class="nav-item mr-md-4 mx-0">
                            <a class="nav-link" href="Faqs.php">Faqs</a>
                        </li>
                        <!-- contact us tab -->
                        <li class="nav-item mr-md-4 mx-0">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <?php
                    // user can log in if has an account 
                        if (isset($_SESSION['username']))
                        {
                            
                            echo "<p class='blue'>";
                            echo "<i class='fas fa-user fa-2x blue mr-2'></i>";
                            echo   htmlentities($_SESSION['username']);
                            echo "</p>";

                            include './phpControl/includes/logout_button.php';
                        // if not, create an account 
                        }
                        else{
                            echo "<div class='loginbtn'>";
                            echo "<a href='login.php' class='d-inline btnstyle' role='button'>Log in</a>";
                            echo "</div>";
                            echo "<div class='vl mx-2'></div>";
                            echo "<div class='Signupbtn'> ";
                            echo  "<a href='Signup.php' class='d-inline btnstyle' role='button'>Sign Up</a>";
                            echo "</div>";
                        }
                    ?>
                </div>
            </nav>

            <!--- end of header Navigation---->
        
        </header>
        
    <!-- end of the header -->
        
    
    <!-- Body content start here-->

        <h1 id="pageTitle" align="center">FREQUENTLY ASKED QUESTIONS</h1>

        <div class="container">
            <p id="Faqs_intro">Here we've answered the questions we often get from prospective sponsors. If you have a question not covered here, please don't hesitate to get in touch with us through our <a href ="contact.html">contact form</a>.</p>


            <div class="accordion" id="accordionExample">
                <!-- FAQ1 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingOne">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>What is a podcast?</h4>      
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
              
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="col-md-12">A podcast is a pre-recorded, on-demand audio file distributed over the Internet through a channel called an RSS feed. 
                                Podcasting technology has come a long way - most listeners today access their podcasts through a variety of smartphone apps, and the only thing you need to start listening is an Internet-connected device. 
                                We give a more detailed background of podcasts as a medium on our blog <a href="#">here</a>. We also describe the most popular types of podcasts <a href="#">here</a>. </p>
                        </div>
                    </div>
                </div>
                <!-- FAQ2 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" id="headingTwo">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>What is a podcast ad?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="col-md-12">A podcast ad is an ad spot that runs between 10 and 90 seconds. It can come in at the start of the episode (a pre-roll), during the episode (a mid-roll), or at the end of the episode (a post-roll). We dicuss the different types of ads in depth <a href="#">here</a> </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ3 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" id="headingThree">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>What will the ad sound like?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <p class="col-md-12">The majority of podcast ads are host-read and will either consist of the podcast host reading from an ad script or giving an ad-libbed personal recommendation.

                            You can listen to a few examples of recent Backyard Media podcast ads <a href="#">here</a>. 
                            We also talk about why most podcast ads are host-read in a blog post <a href="#">here</a>. </p>
                    </div>
                  </div>
                </div>

                <!-- FAQ4 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" id="headingFour">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>What do I need to provide Backyard Media for the ad?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="col-md-12">Generally, an ad campaign will require either an ad script for the host or directions regarding what selling points the host should cover. Most campaigns will also need a promotional code or website URL from the sponsor that will be referenced during the ad. But don't worry, we'll be sure to walk you through the whole process, start to finish. </p>
                            </div>
                      </div>
                </div>

                <!-- FAQ5 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseFifth" aria-expanded="true" aria-controls="collapseFifth" id="headingFifth">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>How can I make sure my ad sounds great?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                    <div id="collapseFifth" class="collapse" aria-labelledby="headingFifth" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="col-md-12">we will work with all new sponsors to make sure their ad's content is maximally effective for a podcast listening audience. We have outlined a few helpful steps that sponsors can take to improve their ads <a href="#">here</a>.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ6 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseSixth" aria-expanded="true" aria-controls="collapseSixth" id="headingSixth">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>How does pricing work?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                    <div id="collapseSixth" class="collapse" aria-labelledby="headingSixth" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="col-md-12">Podcast ad prices are priced in CPM (cost per thousand impressions). A podcast's CPM is based on a podcast's reported listener downloads, and the exact price can vary depending on a variety of factors, including the podcast's popularity, the ad's placement, and whether the podcast serves a specialized audience.</p>
                            <p class="col-md-12">We share our podcasts' CPMs with prospective sponsors before any ad purchase. For more about podcast CPMs, <a href="contact.html">contact us</a> or take a look at <a href="#">our pricing example here</a>.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ7 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven" id="headingSeven">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>How often should my ad run?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                                <p class="col-md-12">Research shows that podcast ads are most effective when they run for multiple podcast episodes (with five or more ads being the most effective frequency). For more information about podcast ad campaigns, <a href="contact.html">contact us</a> or <a href="#">see our blog post about campaigns here</a>.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ8 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight" id="headingEight">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>Who listens to podcasts?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="col-md-12">Lots of people! In 2017, a full 42 million Americans reported having listened to a podcast in the last week, a 100% increase from 2014.</p>
                            <p class="col-md-12">Podcast listeners are an ideal group of consumers. They're well-educated - 51% of them have a college degree, compared to just 36% of the general population. They also have above-average incomes, with a median annual income of $63,000 and 15% of listeners making over $150,000. Research also shows that listeners are intellectually curious, with high rates of media consumption. </p>
                            <p class="col-md-12">When compared with other digital media audiences, podcast listeners are uniquely loyal and engaged, as measured by their podcast listening habits and responsiveness to podcast ads. </p>
                            <p class="col-md-12">We've covered in our blog <a href="#">the habits of podcast listeners</a>, the habits of podcast evangelists known as <a href="#">"super" listeners</a>, and <a href="#">some of our podcast hosts' experiences with their listeners</a>.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ9 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine" id="headingNine">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>How do I know the ad will work?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="col-md-12">There's lots of research showing that <span class="font-weight-bold">podcasts are the most cost-effective digital marketing tool out there</span>. 61% of podcast listeners report they've purchased a product after hearing an ad, and podcast ads on average lead to a 55% increase in unaided brand awareness. A sponsor can immediately see the ROI of their podcast ads because most ads include trackable codes provided to listeners - we talk more about these "direct response" ads in a blog post <a href="#">here</a>.</p>
                            <p class="col-md-12">For more research regarding the effectiveness of podcast ads, take a look at some of our analysis <a herf="#">here</a>. You can also check out our <a href="#">Resources page</a> for more studies looking at podcasting and podcast ads.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ10 -->
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen" id="headingTen">
                        <h5 class="row mb-0">
                            <section class="col-md-10">
                                <h4>Okay, I'm interested in buying a podcast ad. How do I start working with Backyard Media?</h4>
                            </section>
                            <aside class="col-md-2">
                                <img class="plus" src="img/add.png">
                            </aside>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="col-md-12">Great! You can contact us <a href="contact.html">with this form</a> and we'll be in touch with you shortly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!--- Footer part -->
        
        <footer>
            <div>
                <!-- <img src="img/logo.png"> -->
                <p class="copy_right">Copyright © Backyard Media 2018</p>
                <div class="d-flex justify-content-center">
                <a href="https://www.facebook.com/backyardmediacompany/" class="facebook fab fa-facebook-square fa-2x mr-2"></a>
                <a href="#" class="twitter fab fa-twitter-square fa-2x"></a>
                </div>
            </div>
        </footer>

    <!-- End of the footer  -->
    </body>
</html>
