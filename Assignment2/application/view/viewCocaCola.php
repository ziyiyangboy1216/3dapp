<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="../application/css/bootstrap-4.4.1.css">

    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../application/css/all.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css">

    <!-- Link in some fonts — Not used because we finally installed the fonts
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    -->

    <!-- Use a light box to view images in the gallery -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">

    <title>Web 3D Applications coca—cola</title>

  </head>
  <body id="bodyColor">
    
    <!-- Logo and navigation bar -->
    <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container-fluid">  
        <!-- Brand -->
        <div class="logo">
          <a id="navHome" class="navbar-brand" href="#">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
          </a>
        </div>
                 
        <!-- Collapsible Navbar Menu Icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <nav class="nav">
            <ul class="menu">
                <li class="item">
                    <a href="#" class="link">
                        <i id="navHome" class="fa fa-home" aria-hidden="true" ></i>
                        <span>home</span>
                    </a>
                </li>
                <li class="item">
                    <a href="https://www.coca-cola.com/gb/en/apps" class="link">
                        <i id="navAbout" class="fa fa-clipboard" aria-hidden="true" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="Coca-Cola official website for more product information ..."></i>
                        <span>about</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="link">
                        <i id="navModels" class="fa fa-tv" aria-hidden="true" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper"></i>
                        <span>Drink</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#" class="link">
                        <i class="fa fa-envelope" aria-hidden="true" class="nav-link" href="#" data-toggle="modal" data-target="#contactModal"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </nav>
      </div>
    </nav>

    <!-- Start 3D App SPA Contents -->
    <div class="container-fluid main_contents"> <!-- Start SPA Contents -->
        <!-- Home page block element -->
        <div id="home">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../application/assets/images/site_images/coke1.jpg" class="d-block carousel-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coke</h5>
                            <p>Coca-Cola: Timeless refreshment in every sip.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../application/assets/images/site_images/pepper1.jpg" class="d-block carousel-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Pepper</h5>
                            <p>Bold flavor with a hint of sweetness.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../application/assets/images/site_images/sprite1.jpg" class="d-block carousel-img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Sprite</h5>
                            <p> Crisp, effervescent, citrusy, invigorating, refreshing, zesty, bubbly, tangy, lively.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

          <!-- Row of cards on the grid -->
          <div class="row">
            <div class="card mb-3" style="max-width: 1600px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <a href="../application/assets/images/render_images/coke.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
                    </a>
                  </div>
                  <div class="col-md-8 text-center">
                    <div class="card-body">
                        <div id="title_left" class="card-title drinksText"></div>
                        <div id="subTitle_left" class="card-subtitle drinksText"></div>
                        <div id="description_left" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Find out more ...</a>          
                    </div>
                  </div>
                </div>
              </div>

                <div class="card mb-3" style="max-width: 1600px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <a href="../application/assets/images/render_images/sprite.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/site_images/sprite.jpg" alt="Sprite">
                        </a>
                      </div>
                      <div class="col-md-8 text-center">
                        <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                        <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                        <div id="description_centre" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                        </div>
                      </div>
                    </div>
                  </div>
        
            <div class="card mb-3" style="max-width: 1600px;">
                <div class="row no-gutters">
                  <div class="col-md-4 ">
                    <a href="../application/assets/images/render_images/pepper.jpg" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                        <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/site_images/dr_pepper.jpg" alt="Dr Pepper">
                    </a>
                  </div>
                  <div class="col-md-8 text-center">
                    <div id="title_right" class="card-title drinksText"></div>
                        <div id="subTitle_right" class="card-subtitle drinksText"></div>
                        <div id="description_right" class="card-text drinksText"></div>   
                        <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                  </div>
                </div>
              </div>


          </div>
        </div> <!-- End home page -->

        <!-- About page block element -->
        <div id="about" >
          Insert About Contents
        </div> <!-- End home page -->

        <!-- Start X3D models and 3D Image Gallery -->
        <div id="models">
          <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
          <div class="row">
              <!-- X3D Models — Place 4 models in here for the assignment -->
              <div class="col-sm-8">
                  <div class="card text-left">
                      <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                          <a id="navCoke" class="nav-link active" href="#">Coke</a>
                          </li>
                          <li class="nav-item">
                          <a id="navSprite" class="nav-link" href="#">Sprite</a>
                          </li>
                          <li class="nav-item">
                          <a id="navPepper" class="nav-link" href="#">Pepper</a>
                          </li>
                      </ul>
                      </div>
                      <div class="card-body">
                      <!-- Coke X3D model -->
                      <div id="coke">
                          <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d>
                                  <scene>
                                    <inline url="../application/assets/model3D/coco.x3d"> </inline>
                                    <Viewpoint id="cokeFront"  position="-0.08751 0.00000 9.99962" orientation="0.00000 -1.00000 0.00000 0.00875" zNear="6.23705" zFar="14.64336" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode" ></Viewpoint>
                                  
                                  <Viewpoint id="cokeBack"position="-6.49229 0.09887 -7.60529" orientation="0.01634 0.99987 -0.00041 3.84826" 
                                  zNear="6.23705" zFar="14.64336" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
                                  
                                  <Viewpoint id="cokeLeft" position="7.44229 0.33521 -6.67083" orientation="-0.01214 0.99982 0.01468 2.30156" zNear="6.24723" zFar="14.65863" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode" ></Viewpoint>
                                  
                                  <Viewpoint id="cokeRight"position="-9.71792 0.55672 2.29175" orientation="-0.03763 -0.99899 -0.02471 1.34005" zNear="6.21165" zFar="14.60525" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
                                  <Viewpoint id="cokeTop"position="0.18816 9.99814 -0.04281" orientation="-0.99991 0.00729 -0.01147 1.57521" zNear="5.92443" zFar="14.17443" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
                                  </scene>
                              </x3d>
                          </div> 
                      </div>
                      <!-- Sprite X3D model -->
                      <div id="sprite" style="display:none;">
                          <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d id="model">
                                  <scene>
                                    <inline url="../application/assets/model3D/sprite1.x3d"> </inline>
                                    <Viewpoint id="spriteFront"  position="13.30482 1.48049 3.19711" orientation="-0.05633 0.99605 0.06864 1.34010" 
                                    zNear="6.23705" zFar="14.64336" description="defaultX3DViewpointNode" ></Viewpoint>
                                  
                                  <Viewpoint id="spriteBack"position="-6.49229 0.09887 -7.60529" orientation="0.01634 0.99987 -0.00041 3.84826" 
                                  zNear="6.23705" zFar="14.64336" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
                                  
                                  <Viewpoint id="spriteLeft" position="7.44229 0.33521 -6.67083" orientation="-0.01214 0.99982 0.01468 2.30156" zNear="6.24723" zFar="14.65863" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode" ></Viewpoint>
                                  
                                  <Viewpoint id="spriteRight"position="-9.71792 0.55672 2.29175" orientation="-0.03763 -0.99899 -0.02471 1.34005" zNear="6.21165" zFar="14.60525" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
                                  <Viewpoint id="spriteTop"position="0.22527 11.97090 -0.05126" orientation="-0.99991 0.00729 -0.01147 1.57521" 
                                  zNear="5.92443" zFar="14.17443" description="defaultX3DViewpointNode"></Viewpoint>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                      </div>
                      <!-- Pepper X3D model -->
                      <div id="pepper" style="display:none;">
                          <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                          <!-- Place the X3D code here -->
                          <div class="model3D">
                              <x3d>
                                  <scene>
                                    <inline url="../application/assets/model3D/pepper4.x3d"> </inline>
                                    <Viewpoint id="pepperFront"  position="-0.08751 0.00000 9.99962" orientation="0.00000 -1.00000 0.00000 0.00875" zNear="6.23705" zFar="14.64336" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode" ></Viewpoint>
                                  
                                  <Viewpoint id="pepperBack"position="-6.49229 0.09887 -7.60529" orientation="0.01634 0.99987 -0.00041 3.84826" 
                                  zNear="6.23705" zFar="14.64336" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
                                  
                                  <Viewpoint id="pepperLeft" position="7.44229 0.33521 -6.67083" orientation="-0.01214 0.99982 0.01468 2.30156" zNear="6.24723" zFar="14.65863" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode" ></Viewpoint>
                                  
                                  <Viewpoint id="pepperRight"position="-9.71792 0.55672 2.29175" orientation="-0.03763 -0.99899 -0.02471 1.34005" zNear="6.21165" zFar="14.60525" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
                                  <Viewpoint id="pepperTop"position="0.18816 9.99814 -0.04281" orientation="-0.99991 0.00729 -0.01147 1.57521" zNear="5.92443" zFar="14.17443" centerOfRotation="0.00000 0.00000 0.00000" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- 3D image gallery -->
              <div class="col-sm-4">
                  <div class="card text-left">
                      <div class="card-header gallery-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                              <a class="nav-link active" href="#">Gallery</a>
                          </li>
                      </div>
                      <div class="card-body">
                          <div class="card-title title_gallery drinksText"></div>
                          <div class="gallery" id="gallery"></div>
                          <div class="card-text description_gallery drinksText"></div>
                      </div>
                  </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->
          </div> <!-- End row for X3D Model and Gallery -->
        </div> <!-- End X3D Models and Gallery -->
    
        <!-- Start the interaction panels -->
        <div id="interaction" class="row" >
                <!-- Column for the camera view controls -->
                <div class="col-sm-8">
                    <div class="card text-left">
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>    
                            
                          <ul class="navigation">
                            <li><a href="#"  onclick="document.getElementById('cokeFront').setAttribute('set_bind', 'true'); document.getElementById('spriteFront').setAttribute('set_bind', 'true'); document.getElementById('pepperFront').setAttribute('set_bind', 'true');">Front</a></li>
                            <li><a href="#"  onclick="document.getElementById('cokeBack').setAttribute('set_bind', 'true'); document.getElementById('spriteBack').setAttribute('set_bind', 'true'); document.getElementById('pepperBack').setAttribute('set_bind', 'true');">Back</a></li>
                            <li><a href="#"  onclick="document.getElementById('cokeLeft').setAttribute('set_bind', 'true'); document.getElementById('spriteLeft').setAttribute('set_bind', 'true'); document.getElementById('pepperLeft').setAttribute('set_bind', 'true');">Left</a></li>
                            <li><a href="#"  onclick="document.getElementById('cokeRight').setAttribute('set_bind', 'true'); document.getElementById('spriteRight').setAttribute('set_bind', 'true'); document.getElementById('pepperRight').setAttribute('set_bind', 'true');">Right</a></li>
                            <li><a href="#"  onclick="document.getElementById('cokeTop').setAttribute('set_bind', 'true'); document.getElementById('spriteTop').setAttribute('set_bind', 'true'); document.getElementById('pepperTop').setAttribute('set_bind', 'true');">Top</a></li>
                            <span class="toggleMenu"></span>
                        </ul>

                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>

                <!-- Column for the animation controls -->

        </div> <!-- End the interaction panels -->

        <!-- Row to hold one card to hold the coke descriptive text, etc.-->
        <div id="cokeDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_coke" class="card-title drinksText"></div>
                        <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                        <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End coke description contents -->

        <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
        <div id="spriteDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_sprite" class="card-title drinksText"></div>
                        <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                        <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End sprite description contents -->

        <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
        <div id="pepperDescription" class="row" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                    </div>
                </div>
            </div>
        </div> <!-- End pepper description contents -->  
    </div>  <!-- End 3D App SPA Contents --> 

    <!-- Your 3D App footer -->
    <nav id="footerColor" class="navbar navbar-expand-sm footer">
        <div class="container-fluid">   
            <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2024 3D Apps | <a href="javascript:changeLook()">Restyle Page</a> </span></p>
            </div>
            <div class="navbar-text social">
                  <a href="#"><i class="fab fa-youtube-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                  <a href="#"><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav> 

    <!-- My 3D App modals -->
    <!-- Contact modal -->
    <!-- The Modal -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <p>Please check out the official Coca-Cola website</p>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../application/js/jquery-3.4.1.js"></script>
    <script src="../application/js/popper.min.js"></script>
    <!--<script src="js/bootstrap.js"></script>-->
    <script src="../application/js/bootstrap-4.4.1.js"></script>

    <!-- Include the x3dom JavaScript -->
    <script src='../application/js/x3dom.js'></script>

    <!-- Custom JavaScript code for your 3d App -->
    <!-- Also, intialises popovers-->
    <script src="../application/js/custom.js" crossorigin="anonymous"></script>

    <!-- JavaScript to swap for SPA and restyle -->
    <script src="../application/js/swap_restyle.js"></script>

    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="../application/js/gallery_generator.js"></script>

    <!-- JQuery code to get content data from a backend JSON file -->
    <script src="../application/js/getJsonData.js"></script>

    <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
    <script src="../application/js/jquery.fancybox.min.js"></script>


  </body>
</html>