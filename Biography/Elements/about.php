                <!-- About Start -->
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="img/Profil.jpg" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <p>
                                    Kurt Loue Ochia Saranillo
                                    Web designer, front end developer and Web developer
                                    Being with these so called I want to be in the future is very hard to achieve when you don't have a dedication and hard work in what you're going to be. In year 2021, entering CITE (Central for Industrial Technology and Enterprise) bringing my courage and inspiration to study their for parents and especially for myself, I'm seeing myself now that I'm in the right path for my future.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Design</p><p>85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Development</p><p>90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Skills</p><p>1%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Coding</p><p>1%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div></div>
                    </div>
                </div>
                <!-- About End -->
                
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
        <?php 
        $details = array(
                    array("Birthdate" , "August 08, 1998"),
                    array("Age" , "23"),
                    array("Country" , "Philippines"),
                    array("Address" , "Capitol Site, Cebu City"),
                    array("Email" , "hiikurt2@gmail.com"),
                    array("Number" , "09957716029"),
                    array("Status" , "Single"),
                    array("Gender" , "Male")
                    );
        for($i=0;$i<=7;$i++){
            echo $details[$i][0]." : ".$details[$i][1]."<br>";
            
        }
                ?>                
    </body>
</html>