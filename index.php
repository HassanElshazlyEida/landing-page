<?php
            include('C:\xampp\htdocs\PHP_TEST\Courses\Navbar&Slider.php');
  ?>
  <!---Popular Courses section-->
  <section  style="padding-top: 150px;padding-bottom:150px;" class="PopularCourses-section"> 
    <div class="popular">
      <h1 class="text-center">Popular Courses</h1>
    </div>
    <div class="courses">
      <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
              <div class="img-card" style="overflow: hidden;">
              <img src="images/course_1.jpg">
              </div>
              <h4 >A complete guide to design</h4>
              <h6>Adobe Guide, Layes, Smart Objects etc...</h6>
              <div class="fot-courses">
                <img src="images/author.jpg">
                <p>Michael Smith, <span>Author</span></p>
                <div><span>28$</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div  class="img-card"  style="overflow: hidden;">
                  <img src="images/course_2.jpg">
                </div>
                <h4>A complete guide to design</h4> 
                <h6>Adobe Guide, Layes, Smart Objects etc...</h6>
                <div class="fot-courses">
                  <img src="images/author.jpg">
                  <p>Michael Smith, <span>Author</span></p>
                    <div><span>28$</span></div>
                  </div>
              </div>
            </div>
              <div class="col-lg-4">
                <div class="card">
                    <div   class="img-card" style="overflow: hidden;">
                        <img src="images/course_3.jpg">
                    </div>
                  <h4>A complete guide to design</h4>
                  
                  <h6>Adobe Guide, Layes, Smart Objects etc...</h6>
                  <div class="fot-courses">
                    <img src="images/author.jpg">
                    <p>Michael Smith, <span>Author</span></p>
                    <div><span>28$</span></div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </section>
  <!---Form-course  section-->
  <section class="FormCourse-section">
    <div class="row">
      <div class="col-lg-6" style="padding-right: 0;">
            <div class="discount text-center" >
              <h1 style="color: white">Register now and get a discount
              <br><span style="color:black;font-weight: 700;line-height: 2;">50%</span>
              discount until 1 January</h1>
              <p >In aliquam, augue a gravida rutrum, ante nisl fermentum nulla,
              vitae tempor nisl ligula vel nunc. Proin quis mi malesuada,
              finibus tortor fermentum. Aliquam, augue a gravida rutrum,
              ante nisl fermentum nulla, vitae tempo.</p>
              <button class="btn btn-dark">REGISTER NOW</button>
            </div>
         </div>
        <div class="col-lg-6" style="padding:0 !important;" >
          <div class="course-form" >

            <?php
            //Validation
            $showing_error = array('CouseName'=>'','Category'=>'','Email'=>'','Message'=>''); 
            $Course=$Category=$Email="";
            if (isset($_POST['SubmitAction']))
            {
                $Course=$_REQUEST['CourseName'];
                $Category=$_REQUEST['Category'];
                $Email=$_REQUEST['email'];
                if ((empty($Category)) || (empty($Course)) || (empty($Email)) ) {
                      $showing_error['Message']="Please fill all field with informations";
                }
                if (!filter_var($Email,FILTER_VALIDATE_EMAIL)){
                    $showing_error['Email']="Email is not valid <br/>";
                }
                if (!preg_match('/^[a-zA-Z\s+]+$/',$Course)){
                    $showing_error['CouseName']="CouseName is not valid <br/>";
                }
                if (preg_match('/^([a-zA-Z\s+])(,\s*[a-zA-Z\s]*)*$/',$Category)) {
                    $showing_error['Category']="Category must be sebrated with comma <br/>";
                } 
                //instead of array_filter
                $success=0;
                foreach ($showing_error as $key => $value ){ 
                      if ($value !=""){
                        $success=1;
                        break;
                       }
                  }
                echo $success;
                if ($success==1){
                    // Showing Error 
                    /*
                    foreach ($showing_error as $key => $value ){
                      echo $key  . "      ". $value . "<br>";
                  }
                  */
                  $showing_error['Message']="There is an error in form";
                }    
                else {
                    header('location: User.php');
                }
            }
          ?>
          <div class="search_content text-center">
              <h1>Search For Your Course</h1>
              <!-- Form validation -->
              <form id="search_form" class="search_form " action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
              <div class="Error_Form_Tag"> <p> <?php echo $showing_error['Message']; ?></p> </div >
                  <input id="search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required." name="CourseName">
                  <div class="Error_Form"> <p> <?php echo $showing_error['CouseName']; ?></p> </div >
                  <input id="search_form_category" type="text" placeholder="Category" name="Category">
                  <div class="Error_Form"> <p> <?php echo $showing_error['Category']; ?></p> </div >
                  <input id="search_form_degree" type="text" placeholder="Email" name="email">
                  <div class="Error_Form"> <p> <?php echo $showing_error['Email']; ?></p> </div >
                  <input id="search_submit_button" name="SubmitAction" type="submit" class="btn btn-primary trans_200" value="Submit information Course">

              </form>
          </div>

          
            <!--<div class="form-background" style="background-image:url(images/search_background.jpg);"></div>-->
          </div>
      </div>
  </section>

  <!--- Our Services  section-->
  <section class="OurServices-section">
    <div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="image-services">
                <img src="images/earth-globe.svg" >
            </div>
            <div class="text-services">
              <h3>Online Courses</h3>
              <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                 tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus
                  tortor fermentum.</p>
            </div>
          </div>
          <div class="col-lg-4">
              <div class="image-services">
                <img src="images/blackboard.svg" >
              </div>
              <div class="text-services">
                <h3>Online Courses</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                   tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus
                    tortor fermentum.</p>
              </div>
            </div>
            <div class="col-lg-4">
                <div class="image-services">
                  <img src="images/books.svg" >
                </div>
                <div class="text-services">
                  <h3>Online Courses</h3>
                  <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                     tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus
                      tortor fermentum.</p>
                </div>
              </div>
          <!-- New line over -->
          <div class="col-lg-4">
              <div class="image-services">
                  <img src="images/mortarboard.svg" >
              </div>
              <div class="text-services">
                <h3>Online Courses</h3>
                <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                   tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus
                    tortor fermentum.</p>
              </div>
            </div>
            <div class="col-lg-4">
                <div class="image-services">
                    <img src="images/milestone_2.svg" >
                </div>
                <div class="text-services">
                  <h3>Online Courses</h3>
                  <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                     tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus
                      tortor fermentum.</p>
                </div>
              </div>
              <div class="col-lg-4">
                  <div class="image-services">
                    <img src="images/milestone_1.svg" >
                  </div>
                  <div class="text-services">
                    <h3>Online Courses</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                       tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus
                        tortor fermentum.</p>
                  </div>
                </div>
        </div>
      </div>
    </div>
  </section>

  <!--- Our Services section-->








  <!---Footer section-->
  <section class="Footer-section" style="padding-bottom: 0 !important;">
    	<footer class="footer" >
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <div class="foot-subscribe">
                <h1 style="color:white">Subscribe to newsletter</h1>
                <div class="foot-subscribe-form">         
                  <form action="post">
                    <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                      <input type="text" placeholder="Email Address" class="form-control">
                      <button class="search_submit_button trans_200">Subscribe</button> 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>  
        <div class="fot-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="footer-title">
                    <img class="logo" src="images/logo.png"><span class="Course-footer" >COURSE</span>
                </div>
                <div class="footer-ul-te">
                  <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus</p>
                </div>
              </div>
              <div class="col-lg-3">
                  <div class="footer-title">
                      <p>Usefull Links</p>
                  </div>
                  <div class="footer-ul">
                    <ul>
                      <li>Home</li>
                      <li>About Us</li>
                      <li>Courses</li>
                      <li>News</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-title">
                        <p>Menu</p>
                    </div>
                    <div class="footer-ul">
                      <ul>
                          <li>Testimonials</li>
                          <li>FAQ</li>
                          <li>Community</li>
                          <li>Campus Pictures</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="footer-title">
                          <p> Contact</p>
                      </div>
                      <div class="footer-ul">
                        <ul>
                            <li><img src="images/placeholder.svg" >	Blvd Libertad, 34 m05200 Arévalo</li>
                            <li><img src="images/smartphone.svg" >+0034 37483 2445 322</li>
                            <li><img src="images/envelope.svg" >hello@company.com</li>

                        </ul>
                      </div>
                    </div>
            </div>
        </div>     
      </div>
      </footer>
  </section>
  <!---Aphorism section-->
  

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/contact_custom.js"></script>
<script type="text/javascript" src="js/courses_custom.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/elements_custom.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/news_post_custom.js"></script>
<script type="text/javascript" src="js/news_custom.js"></script>
<script type="text/javascript" src="js/teachers_custom.js"></script>

</html>