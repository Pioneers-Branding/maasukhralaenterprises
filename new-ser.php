<?php include('header.php');?>
<style>
 @media only screen and (max-width: 768px) {
                       img {
              max-height: 58vh;
            }

            }
       @media only screen and (min-width: 768px) {
                  img {
              max-height: 52vh;
            }

        }
     

a {
  color: inherit;
}

a:hover {
  color: #bbb;
}

.italic { font-style: italic; }
.small { font-size: 0.8em; }

/** LIGHTBOX MARKUP **/

.lightbox {
  /* Default to hidden */
  display: none;

  /* Overlay entire screen */
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  
  /* A bit of padding around image */
  padding: 8em;

  /* Translucent background */
  background: rgba(0, 0, 0, 0.8);
}

/* Unhide the lightbox when it's the target */
.lightbox:target {
  display: block;
}

.lightbox span {
  /* Full width and height */
  display: block;
  width: 100%;
  height: 100%;

  /* Size and position background image */
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}
</style>
  <div class="breadcumb-banner">
      <div class="overlay"></div>
      <div class="parallelogram"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                   <div class="breadcumb-content">
                      <h2 class="line-angel">CERTIFICATE</h2>
                  </div>
              </div>
          </div>
      </div>
  </div><!-- Breadcrumb -->
 <div class="section-bottom">
      <div class="container">
          <div class="row">
          
              <div class="col-lg-4 col-sm-6 col-md-6">
                  <div class="blog-area">
                         <a href="#img1">
                          <img src="images/Certificate2-min.jpg">
                        </a>

                        <!-- lightbox container hidden with CSS -->
                        <a href="#" class="lightbox" id="img1">
                          <span style="background-image: url('images/Certificate2-min1.jpg')"></span>
                        </a>
                      
                      
                     
                      <div class="blog-content">
                          <!--<div class="meta">-->
                          <!--    <span>25 JUNE, 2019</span>-->
                          <!--    <span class="point"></span>-->
                          <!--    <span>ADMIN</span>-->
                          <!--</div>-->
                          <h3 class="text-center">Registration Certificate</h3>
                          <!--<p class="text-center">Engineering Export Promotion Council</p>-->
                          <!--<a class="gearx-btn-red" href="#">DETAILS</a>-->
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-md-6">
                  <div class="blog-area">
                       <a href="#img2">
                          <img src="images/eepc logo-min.jpg">
                        </a>

                        <!-- lightbox container hidden with CSS -->
                        <a href="#" class="lightbox" id="img2">
                          <span style="background-image: url('images/eepc logo-min1.jpg')"></span>
                        </a>
                      
                      <div class="blog-content">
                          <!--<div class="meta">-->
                          <!--    <span>25 JUNE, 2019</span>-->
                          <!--    <span class="point"></span>-->
                          <!--    <span>ADMIN</span>-->
                          <!--</div>-->
                          <h3 class="text-center">Member of EEPC India</h3>
                          <p class="text-center">Engineering Export Promotion Council</p>
                          <!--<a class="gearx-btn-red" href="#">DETAILS</a>-->
                      </div>
                  </div>
              </div>
      
          </div>
      </div>  
  

    <?php include('footer.php');?>