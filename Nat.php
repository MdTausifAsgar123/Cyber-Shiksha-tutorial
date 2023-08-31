
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>K&T Group</title>
<!-- Swayam CSS -->
<link rel="icon" href="https://storage.googleapis.com/swayam2_central/assets/img/favicon.ico"/>
<link rel="apple-touch-icon" sizes="152x152" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/152x152.png">
<link rel="apple-touch-icon" sizes="167x167" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/167x167.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/180x180.png">
<link rel="icon" type="image/png" sizes="196x196" href="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/ico/196x196.png">
<link href="https://storage.googleapis.com/swayam2_central/assets/css/swayam_css/bootstrap.min.css" rel="stylesheet">
<link href="https://storage.googleapis.com/swayam2_central/assets/css/swayam_css/main.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Restrict CSS/JS loading from external CDN. Reverting to cloudflare as its not working from our CDN. Check this later -->
<!--link rel="stylesheet" href="https://storage.googleapis.com/swayam2_central/assets/css/swayam_css/font-awesome.min.css" -->

<!-- STYLE for POP-up on landing page -->



<style>
.modal-backdrop{
    opacity:0.8 !important;
}

@media (min-width: 992px) {
    #homePageModal {
      text-align: center;
      padding: 0!important;
    }

    #homePageModal:before {
      content: '';
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -4px;
    }

    #homePageModal .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }
}

@media (max-width: 768px) {
  .modal-dialog.modal-sm {
    width: 300px;
    margin: 30px auto;
  }
}
</style>
<!-- END :: STYLE for POP-up on landing page -->

<!-- Swayam JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://storage.googleapis.com/swayam2_central/assets/js/swayam_js/jquery.js"></script>
<script src="https://storage.googleapis.com/swayam2_central/assets/js/swayam_js/bootstrap.min.js"></script>
<script type="text/javascript">
var idleTime = 0;
$(document).ready(function () {
    //home page modal triggered here based on session storage check
    let popUpFlagVal = sessionStorage.getItem("popUpFlag");
    if(popUpFlagVal !== "true" || popUpFlagVal === "undefined"){
        $("#homePageModal").modal({
            show: true,
            backdrop: 'static',
            keyboard: false
        });
        sessionStorage.setItem("popUpFlag", "true");
    }
    //Increment the idle time counter every minute.
    var currentUserEmail = 'None'

    if (currentUserEmail != "None"){
       var idleInterval = setInterval(timerIncrement, 60000); // 1 minute
    }


    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;

    if (idleTime > 119) { // 120 minutes
        window.location.replace("https://swayamopenid.b2clogin.com/swayamopenid.onmicrosoft.com/B2C_1_swayam2/oauth2/v2.0/logout?post_logout_redirect_uri=https://swayam.gov.in/wso_logout");
    }
}
</script>
</head>
<body class="homepage">
<header id="header">
  <!--Top Bar [START]-->
  <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12 top-left">
              <a class="navbar-brand" href="/">
                  <img src="img\cs.png" alt="swayam-logo">
              </a>
              <a class="navbar-brand" href="https://www.g20.org/en/" target="_blank">
              </a>

              
          </div>
		  
          <div class="col-sm-9 col-xs-12">
            <div class="top-navigation">
			<button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin: 0px;"><b>
			<a href="index.php"class="active"><font color="black"><b>Home</b></font></a> |
                  <a href="About.php"><font color="black"><b>About</b></font></a> |
                  <a href="Courses.php"><font color="black"><b>All Courses</b></font></a> |
                  <a href="Nat.php"><font color="black"><b>National Coordinators</b></font></a> |
                  <a href="LCL.php"><font color="black"><b>Local Chapters</b></font></a>
                  <!--<a href="swayam_universities">Universities</a> |-->
                  <!--<a href="swayam_institutes">Institutes</a> |-->
                  <!--<a href="swayam_instructors">Instructors</a>-->
            </div>
          </div>
        </div></b>
		</button>
      </div>
    </div>
	
  <!--Top Bar [END]-->

  <!--Menu Container [START]-->
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!--Mobile + Brand Logo [START]-->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          </div>
          <!--Mobile + Brand Logo [END]-->

          <!--Main Menu [START]-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="/explorer" class="dropdown-toggle" data-toggle="dropdown">
                    COURSE CATALOG <i class="fa fa-angle-down"></i>
                </a>
                <div class="dropdown-menu" role="list" style="width: 240px;">
                  <div class="megamenuWrapper">
                    <div><a href="/explorer">All</a></div>

                            <div><a href="/explorer?category=ARPIT">Annual Refresher Programme in Teaching (ARPIT)</a></div>
                       
                            <div><a href="/explorer?category=ARCHI_COURSES">Architecture and Planning</a></div>

                            <div><a href="/explorer?category=Design">Design</a></div>
                         
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">Engineering and Technology &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=Engineering_and_Technology">All</a></div>
                                                <div><a href="/explorer?category=AERO_COURSES">Aerospace Engineering</a></div>
                                
                                    <div><a href="/explorer?category=AGRI_COURSES">Agricultural and Food Engineering</a></div>
                               
                                    <div><a href="/explorer?category=BIO_TECH">Biological Sciences &amp; Bioengineering</a></div>

                                    <div><a href="/explorer?category=CHEMICAL_COURSES">Chemical Engineering</a></div>
                               
                                    <div><a href="/explorer?category=CIVIL_ENGINEERING">Civil Engineering</a></div>
                                
                                    <div><a href="/explorer?category=COMP_SCI_ENGG">Computer Science and Engineering</a></div>

                                    <div><a href="/explorer?category=DESIGN_COURSES">Design Engineering</a></div>
                               
                                    <div><a href="/explorer?category=ELEC_ENGG">Electrical, Electronics and Communications Engineering</a></div>

                                    <div><a href="/explorer?category=MECH_ENGG">Mechanical Engineering</a></div>
                                
                                    <div><a href="/explorer?category=METALLURGY_COURSES">Metallurgy and Material science &amp; Mining Engineering</a></div>
                                
                                    <div><a href="/explorer?category=Multidisciplinary">Multidisciplinary</a></div>
                                
                                    <div><a href="/explorer?category=OCEAN_COURSES">Ocean Engineering</a></div>
                                
                                    <div><a href="/explorer?category=TEXTILE_COURSES">Textile Engineering</a></div>
                                
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">Health Sciences &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=Health_Sciences">All</a></div>
                                                <div><a href="/explorer?category=Dental">Dental</a></div>
                                
                                    <div><a href="/explorer?category=Health_research">Health research</a></div>
                                
                                    <div><a href="/explorer?category=Medical">Medical</a></div>
                                
                                    <div><a href="/explorer?category=Public_health">Public health</a></div>
                                
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">Humanities &amp; Arts &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=Humanities_and_Arts">All</a></div>
                                                <div><a href="/explorer?category=Anthropology">Anthropology</a></div>
                                
                                    <div><a href="/explorer?category=Arts">Arts</a></div>
                                
                                    <div><a href="/explorer?category=Communications">Communications</a></div>
                                
                                    <div><a href="/explorer?category=Economics">Economics</a></div>
                                
                                    <div><a href="/explorer?category=English">English</a></div>
                                
                                    <div><a href="/explorer?category=Geography">Geography</a></div>
                               
                                    <div><a href="/explorer?category=History">History</a></div>
                                
                                    <div><a href="/explorer?category=Humanities_and_Social_Sciences">Humanities and Social Sciences</a></div>
                                
                                    <div><a href="/explorer?category=Journalism_(mass_media)">Journalism (mass media)</a></div>
                                
                                    <div><a href="/explorer?category=Language">Language</a></div>
                                
                                    <div><a href="/explorer?category=Linguistics">Linguistics</a></div>
                                
                                    <div><a href="/explorer?category=Philosophy">Philosophy</a></div>
                                
                                    <div><a href="/explorer?category=Political_Science">Political Science</a></div>
                                
                                    <div><a href="/explorer?category=Sociology">Sociology</a></div>

                        
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">Law &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=Law">All</a></div>
                                                <div><a href="/explorer?category=Constitutional_Law">Constitutional Law</a></div>
                                
                                    <div><a href="/explorer?category=Corporate_Law">Corporate Law</a></div>
                                
                                    <div><a href="/explorer?category=Criminal_Law">Criminal Law</a></div>
                                
                                    <div><a href="/explorer?category=Cyber_Law">Cyber Law</a></div>
                                
                                    <div><a href="/explorer?category=Human_Rights">Human Rights</a></div>
                                
                                    <div><a href="/explorer?category=Intellectual_Property_Rights">Intellectual Property Rights</a></div>
                                
                                    <div><a href="/explorer?category=Labour_Law">Labour Law</a></div>
                                
                                    <div><a href="/explorer?category=Law_SUB">Law</a></div>
                                
                        
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">Management &amp; Commerce &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=Management_and_Commerce">All</a></div>
                                                <div><a href="/explorer?category=Accountancy">Accountancy</a></div>
                                
                                    <div><a href="/explorer?category=ANA_DEC_SCIENCE">Analytics and Decision Sciences</a></div>
                                
                                
                                    <div><a href="/explorer?category=Banking_and_Insurance">Banking and Insurance</a></div>
                                
                                    <div><a href="/explorer?category=Business_Administration">Business Administration</a></div>
                                
                                    <div><a href="/explorer?category=Commerce">Commerce</a></div>
                                
                                    <div><a href="/explorer?category=Computer_App">Computer Applications</a></div>

                                    <div><a href="/explorer?category=ECO_SOC_SCIENCE">Economics &amp; Social Sciences</a></div>
                                
                                    <div><a href="/explorer?category=Entrepreneurship">Entrepreneurship</a></div>
                                
                                    <div><a href="/explorer?category=Finance">Finance</a></div>
                                
                                    <div><a href="/explorer?category=HRM_ORG_BEHAVIOUR">HRM and Organizational Behaviour</a></div>
                                
                                    <div><a href="/explorer?category=INF_SYSTEMS">Information Systems</a></div>
                                
                                    <div><a href="/explorer?category=MGMT_COMM">Management Communication</a></div>
                                
                                    <div><a href="/explorer?category=Management">Management Studies</a></div>
                                
                                    <div><a href="/explorer?category=Marketing">Marketing</a></div>
                                
                                    <div><a href="/explorer?category=PROD_OPERATIONS">Production and Operations</a></div>
                                
                                    <div><a href="/explorer?category=Public_Policy">Public Policy</a></div>
                                
                                    <div><a href="/explorer?category=STRATEGY">Strategy</a></div>
                                
                                    <div><a href="/explorer?category=Taxation">Taxation</a></div>
                                
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">Maths &amp; Sciences &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=Math_and_Sciences">All</a></div>
                                                <div><a href="/explorer?category=Applied_Sciences">Applied Sciences</a></div>
                                
                                    <div><a href="/explorer?category=Biotechnology">Biotechnology</a></div>
                                
                                    <div><a href="/explorer?category=Botany">Botany</a></div>
                                
                                    <div><a href="/explorer?category=Chemistry">Chemistry</a></div>
                                
                                    <div><a href="/explorer?category=Computer_Applications">Computer Applications</a></div>
                                
                                    <div><a href="/explorer?category=Computer_Science">Computer Science</a></div>
                                        
                                    <div><a href="/explorer?category=Earth_Sciences">Earth Sciences</a></div>
                                
                                    <div><a href="/explorer?category=Environmental_Sciences">Environmental Sciences</a></div>
                                
                                    <div><a href="/explorer?category=Information_Technology">Information Technology</a></div>
                                
                                    <div><a href="/explorer?category=Library_and_Information_Sciences">Library and Information Sciences</a></div>
                                
                                    <div><a href="/explorer?category=Mathematics">Mathematics</a></div>
                                
                                    <div><a href="/explorer?category=Microbiology">Microbiology</a></div>
                                
                                    <div><a href="/explorer?category=Physics">Physics</a></div>
                                
                                    <div><a href="/explorer?category=Zoology">Zoology</a></div>
                                
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">NPTEL Domain &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=NPTEL_Domain">All</a></div>
                                                <div><a href="/explorer?category=Domain_1">Advanced Dynamics and Vibration</a></div>
                                
                                    <div><a href="/explorer?category=Domain_2">Advanced Mechanics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_43">Algebra</a></div>
                                
                                    <div><a href="/explorer?category=Domain_3">Artificial Intelligence</a></div>
                                
                                    <div><a href="/explorer?category=Domain_4">Bioengineering</a></div>
                                
                                    <div><a href="/explorer?category=Domain_5">Bioprocesses</a></div>
                                
                                    <div><a href="/explorer?category=Domain_6">Biosciences</a></div>
                                
                                    <div><a href="/explorer?category=Domain_7">Communication and Signal Processing</a></div>
                                
                                    <div><a href="/explorer?category=Domain_8">Computational Biology</a></div>
                                
                                    <div><a href="/explorer?category=Domain_9">Computational Chemical Engineering</a></div>
                                
                                    <div><a href="/explorer?category=Domain_10">Computational Engineering</a></div>
                                
                                    <div><a href="/explorer?category=Domain_11">Computational Mechanics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_12">Computational Thermo Fluids</a></div>
                                
                                    <div><a href="/explorer?category=Domain_13">Construction Materials Technology</a></div>
                                
                                    <div><a href="/explorer?category=Domain_14">Control and Instrumentation</a></div>
                                
                                    <div><a href="/explorer?category=Domain_15">Data Science</a></div>
                                
                                    <div><a href="/explorer?category=Domain_45">Economics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_46">Economics &amp; Finance</a></div>
                                
                                    <div><a href="/explorer?category=Domain_16">Electronic Materials</a></div>
                                
                                    <div><a href="/explorer?category=Domain_18">Energy Systems</a></div>
                                
                                    <div><a href="/explorer?category=Domain_17">Energy and Environment</a></div>
                                    
                                    <div><a href="/explorer?category=Domain_44">English Studies</a></div>
                                
                                    <div><a href="/explorer?category=Domain_19">Environment</a></div>
                                
                                    <div><a href="/explorer?category=Domain_20">Faculty Domain for Experienced</a></div>
                                
                                    <div><a href="/explorer?category=Domain_21">Faculty Domain for Newly Joined</a></div>
                                
                                    <div><a href="/explorer?category=Domain_22">Flight Mechanics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_23">Foundations of Computing</a></div>
                                
                                    <div><a href="/explorer?category=Domain_42">Foundations of Mathematics</a></div>
                                        
                                    <div><a href="/explorer?category=Domain_47">Managerial Economics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_24">Manufacturing Processes and Technology</a></div>
                                
                                    <div><a href="/explorer?category=Domain_25">Marketing</a></div>
                                
                                    <div><a href="/explorer?category=Domain_51">Materials Characterization</a></div>
                                
                                    <div><a href="/explorer?category=Domain_26">Materials Joining</a></div>
                                
                                    <div><a href="/explorer?category=Domain_28">Minor 1 in Chemical </a></div>
                                
                                    <div><a href="/explorer?category=Domain_29">Minor 2 in Chemical </a></div>
                                
                                    <div><a href="/explorer?category=Domain_30">Minor 3 in Chemical </a></div>
                                
                                    <div><a href="/explorer?category=Domain_27">Minor in Management</a></div>
                                
                                    <div><a href="/explorer?category=Domain_50">Minor in Metallurgy</a></div>
                                
                                    <div><a href="/explorer?category=Domain_31">Operations</a></div>
                                
                                    <div><a href="/explorer?category=Domain_32">Patents and Intellectual Property Rights</a></div>
                                
                                    <div><a href="/explorer?category=Domain_33">Photonics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_34">Power Systems and Power Electronics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_35">Product Design</a></div>
                                
                                    <div><a href="/explorer?category=Domain_36">Programming</a></div>
                                
                                    <div><a href="/explorer?category=Domain_37">Propulsion</a></div>
                                
                                    <div><a href="/explorer?category=Domain_48">Psychology</a></div>
                                
                                    <div><a href="/explorer?category=Domain_49">Robotics</a></div>
                                
                                    <div><a href="/explorer?category=Domain_38">Structural Analysis</a></div>
                                
                                    <div><a href="/explorer?category=Domain_39">Structural Design</a></div>
                                
                                    <div><a href="/explorer?category=Domain_40">Systems</a></div>
                                
                                    <div><a href="/explorer?category=Domain_41">VLSI design</a></div>
                                
                                            </div>
                                        </div>
                                    </div>
                        
                            <div><a href="/explorer?category=SCHOOL">School</a></div>
                                      
                                    <div class="dropdown-submenu">
                                        <a class="submenu" href="#">Teacher Education &nbsp; <i class="fa fa-angle-down"></i></a>
                                        <div class="dropdown-menu" role="list" style="display: none;">
                                            <div class="megamenuWrapper">
                                                <div><a href="/explorer?category=Education">All</a></div>
                                                <div><a href="/explorer?category=TEACHER_EDUCATION">Teacher Education</a></div>
                        
                                            </div>
                                        </div>
                                    </div>
                        
                  </div>
                </div>
              </li>
              <!--<li><a href="#">GOI PROGRAMS <i class="fa fa-angle-down"></i></a></li>-->
              <li>
                <form class="form-search" action="/explorer">
                  <div class="form-group search">
                    <input id="header-search-query" name="searchText" type="text" class="input-medium search-query"
                           placeholder="Search Catalog..." aria-label="Search catalog" value="">
                    <span class="search_keyword" onclick="redirectToCatalogWithSearchQuery(event)">
                        <img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_search_16px.png" alt="Search icon">
                    </span>
                  </div>
                </form>
              </li>
              
              <li>
                <a href=/wso?redirect=/ style="padding-top:0px;" tabindex="-1">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg" style="margin: 0px;">
                      <a href="Account.php">Sign-In / Register</a>
                  </button>
                </a>
              </li>
			  
              <!--<li>-->
                <!--<a href="#" style="padding-top:0px">-->
                  <!--<button type="submit" name="submit" class="btn btn-primary btn-lg" disabled style="filter: grayscale(100%); margin:0px">Sign Up</button>-->
                <!--</a>-->
              <!--</li>-->
              
            </ul>
          </div>
          <!--Main Menu [END]-->
        </div>
      </nav>
    </div>
  </div>
  <!--Menu Container [END]-->
</header>



<div id="back-to-top" style="bottom: 20px;right: 20px;position: fixed;display: none;z-index: 1" onclick="topFunction()">
  <img src="https://storage.googleapis.com/swayam2_central/assets/img/Up_arrow_48.png">
</div>

<script>
  function redirectToCatalogWithSearchQuery(event) {
    // Proceed only if user clicks on Search icon
    if (event.type == "click") {
        document.location = "/explorer?searchText=" + document.getElementById('header-search-query').value;
    }
  }
    backtotop = document.getElementById("back-to-top");
    
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      let threshold_pixel_value=100;
      if (document.body.scrollTop > threshold_pixel_value || document.documentElement.scrollTop > threshold_pixel_value) {
        backtotop.style.display = "block";
      } else {
        backtotop.style.display = "none";
      }
    }

    function topFunction() {
      $(window).scrollTop(0);
    }
</script>
<!--Breadcrumb [START]-->

<div class="bccontainer NCdetails">
  <div class="container breadcrumb">

    <div class="blueBarTitle">National Coordinators</div>
  </div>
  <p class="container paddingBottom32">
    In order to ensure best quality content are produced and delivered, nine National Coordinators have been appointed.
    They are AICTE for self-paced and international courses. NPTEL for engineering,
    UGC for non technical post-graduation education, CEC for under-graduate education,
    NCERT & NIOS for school education, IGNOU for out of the school students, IIMB for management studies and
    NITTTR for Teacher Training programme.
  </p>
  <div class="container iconsContainer">
  <div class="col-lg-1"></div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
         <div class="text-center marginTop20"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_institutes_engaged.png" alt=""></div>
         <p class="inumber">403</p>
         <p class="marginTop10 text-center itext">Partnering<br/> Institutes</p>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
         <div class="text-center marginTop20"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_courses_enrolled.png" alt=""></div>
         <p class="inumber">12433</p>
         <p class="marginTop10 text-center itext">Completed<br/> Courses</p>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
         <div class="text-center marginTop20"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_student_enrollments.png" alt=""></div>
         <p class="inumber">934753745</p>
         <p class="marginTop10 text-center itext">Student<br/> Enrollment</p>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
         <div class="text-center marginTop20"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_exam_registrations.png" alt=""></div>
         <p class="inumber">643265234</p>
         <p class="marginTop10 text-center itext">Exam<br/> Registrations</p>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
         <div class="text-center marginTop20"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_successful_certifications.png" alt=""></div>
         <p class="inumber">2736535</p>
         <p class="marginTop10 text-center itext">Successful<br/> Certification</p>
      </div>
      <div class="col-lg-1"></div>
  </div>
</div>

<div class="container">
<center>
  <div class="row">
        
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="AICTE" class="shadowBox">
          <div class="image">
            <img src="img\cy.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Cyber-Security</div>
            <div class="description">The Cybersecurity for Industry Solution by CS.</div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="CEC" class="shadowBox">
          <div class="image">
            <img src="img\nt.jfif"  alt=""/>
          </div>
          <div class="content2">
            <div class="title">Network Security</div>
            <div class="description">Secure communication in industrial networks. </div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="IGNOU" class="shadowBox">
          <div class="image">
            <img src="img\crp.png" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Cryptography</div>
            <div class="description">cryptography refers to secure information. </div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="IIMB" class="shadowBox">
          <div class="image">
            <img src="img\AI.jfif"alt=""/>
          </div>
          <div class="content2">
            <div class="title">Artificial Intelligence</div>
            <div class="description">An Article on Disadvantages & Benefits of Artificial Intelligence Technology.</div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="NCERT" class="shadowBox">
          <div class="image">
            <img src="img\ma.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Machine Learning</div>
            <div class="description">Machine Learning is the field of study that gives computers the capability to learn.</div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="NIOS" class="shadowBox">
          <div class="image">
            <img src="img\ro.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Robotics Work</div>
            <div class="description">Most robots today are used to do repetitive actions, or jobs considered too dangerous for humans.</div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="NITTTR" class="shadowBox">
          <div class="image">
            <img src="img\csa.png" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Awareness of Cyber-Security</div>
            <div class="description">The Cybersecurity for Industry Solution by Siemens.</div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="NPTEL" class="shadowBox">
          <div class="image">
            <img src="img\cy.jfif" alt=""/>
          </div>
          <div class="content2">
            <div class="title">Security Services</div>
            <div class="description">Security services provided by cryptography are also discussed such as data integrity, </div>
          </div>
        </a>
      </div>
    
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="UGC" class="shadowBox">
          <div class="image">
            <img src="img\cy.jfif" width="128px" height="128px" alt=""/>
          </div>
          <div class="content2">
            <div class="title">UGC</div>
            <div class="description">University Grants Commission </div>
          </div>
        </a>
      </div>
    
  </div>

</center>
</div>


<section class="main">
<section id="social">
  <div class="container">

      <div class="row appcontainer">
        <!--<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-top:12px"> <img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/social_GOI.jpg" /> </div>-->
        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
          <img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/mhrd_logo.png" alt="Ministry of Education logo"  style="margin-top:18px;" />
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12" style="font-size:11px; color:#666666; line-height:14px;">
        <h4>DOWNLOAD APP</h4>
        <!--<div><a href="https://itunes.apple.com/in/app/swayam-online-education/id1146833429?mt=8"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/download_app_store_logo.png" /></a></div>-->
        <div><a href="https://play.google.com/store/apps/details?id=in.gov.swayam.app"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/download_google_play_logo.png" alt="Go to Google play" /></a></div>
        <!--<div><a href="https://www.microsoft.com/en-in/store/p/swayam/9nblggh4xxml"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/download_windows_store_logo.png" /></a></div>-->

         </div>

        <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
          <h4>FOLLOW US</h4>
          <!--<img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/social.jpg" />-->
          <ul class="social_icons">
            <li><a href="https://www.facebook.com/swayammoocs/"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_social/icon_facebook_selected.png" alt="Go to Facebook" class="facebook"/></a></li>
            <li><a href="https://www.instagram.com/swayammhrd/"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_social/icon_instagram_selected.png" alt="Go to Instagram" class="instagram"/></a></li>
            <!--<li><a href="#"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_social/icon_linkedin_selected.png" class="linkedin"/></a></li>-->
            <li><a href="https://twitter.com/SWAYAMMHRD"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_social/icon_twitter_selected.png" alt="Go to Twitter" class="twitter"/></a></li>
            <!--<li><a href="#"><img src="https://storage.googleapis.com/swayam2_central/assets/img/swayam_images/icon_social/icon_youtube_selected.png" class="youtube"/></a></li>-->
          </ul>
        </div>
      </div>

  </div>
</section>

<section id="legal">
  <div class="container">

  <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">

  <a href="/privacy_policy">Privacy Policy</a>   <span>|</span>   <a href="/terms_of_use">Terms of Use</a>   <span>|</span>   <a href="/honor_code">Honor Code</a> <span style="display:none">|</span>   <a href="#" style="display:none">FAQs</a></div>

  <div class="col-md-6 col-sm-6 col-xs-12 helpline">   <a href="asgartousif@gmail" onClick="email_form()" id="support_popup">Helpline / Support</a> </div>

  </div>
  </div>
</section>
<!--/#bottom-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6"> &copy; 2023 All rights reserved. </div>
      <div class="col-sm-6">Powered By <font color="red"><b>S&T Group</b> </font></div>
        <div class="pull-right"> Initiative by : Ministry of Education (Govt of India) </div>
      </div>
    </div>
  </div>
</footer>
<!--/#footer-->
<!--Popup form for support-->

<div class="pop_up_container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" style="color: #a7b836;opacity: 1;" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title" style="color:#a7b836;font-size: 20px">SWAYAM SUPPORT</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p style="font-size: 20px">Please choose the SWAYAM National Coordinator for support.<span class="text-danger">*</span> :</p>
                        <select id="nc_email" onchange="display_nc_email()">
                            <option disabled selected>select</option>
                            <option value="cecmoocs.nc@gmail.com">CEC</option>
                            <option value="iimbswayam@iimb.ac.in">IIMB</option>
                            <option value="swayam.ignou@ignouonline.ac.in">IGNOU</option>
                            <option value="nmcncert@ciet.nic.in">NCERT</option>
                            <option value="SWAYAM@NITTTRC.AC.IN">NITTTR</option>
                            <option value="swayam@nios.ac.in">NIOS</option>
                            <option value="aicteswayam@aicte-india.org">AICTE</option>
                            <option value="support@nptel.iitm.ac.in">NPTEL</option>
                        </select>
                        <br> <br>
                        <div id="nc_email_text" style="font-size: 18px;margin-left: -20px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.modal-content > .modal-header {
   background:#003366;
}
.modal-dialog {
    width: 800px;
}
</style>

<script>
function email_form(){
    try{
        $("#myModal").modal('show');
    }catch(e){
        jQuery.noConflict();
        $("#myModal").modal('show');
    }

}
function display_nc_email(){
    document.getElementById("nc_email_text").innerHTML = "Please send an email to <b>" + document.getElementById("nc_email").value + "</b> regarding your queries / issues";
}
</script>
</section>
<style>
  .main{
   position: absolute;
   bottom: 0px;
   width: 100%;
   }
   @media (max-width: 767px) {
   body{
   padding-bottom: 400px;
   }
   }
   @media (min-width: 768px) and (max-width: 991px) {
   body{
   padding-bottom: 240px;
   }
   }
   @media (min-width: 992px) {
   body{
   padding-bottom: 175px;
   }
   }

</style>
<script>
$('.carousel').carousel({
  interval: 5000
})
</script>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function() {

  $(".CheckboxContainer .container").click(function(){

      $("input[type='checkbox']").click(function(e){

          $div = $(this).parent();
          text = $div[0].firstChild.nodeValue;
          id_text = text.replace(/\s+/g, "");
          id_text = id_text.replace("&", "_");

          if($(this).prop("checked") == true){
            $(".sf-filtertags ul").prepend("<li>"+text+"<a href='#' name='"+text+"' id='"+id_text+"' onclick='removeTagAndUncheck(this.id,this.name)'> X </a></li>");
          }
          else{
            $("#"+id_text).parent().remove();
          }

          clearAllShowHide();
          e.stopImmediatePropagation();
        });
    });

    $('.dropdown-submenu a.submenu').on("click", function(e){
        $.each($(".dropdown-submenu div.dropdown-menu"), function(){
            if($(this).is(":visible")) {
                if( $( "div" ).index( $(this).parent() ) != $( "div" ).index( $(e.target).next('div.dropdown-menu').parent() ) ){
                    $(this).css("display","none");
                    $(this).parent().find("i").removeClass("fa-angle-right");
                    $(this).parent().find("i").addClass("fa-angle-down");
                }
            }
        });

        $(e.target).next('div').toggle();

        if(($(e.target).next('div')).is( ":visible" )){
            $(e.target).find("i").removeClass("fa-angle-down");
            $(e.target).find("i").addClass("fa-angle-right");
        }
        else{
            $(e.target).find("i").removeClass("fa-angle-right");
            $(e.target).find("i").addClass("fa-angle-down");
        }
        e.stopPropagation();
        e.preventDefault();
    });

    $(".dropdown").on("show.bs.dropdown", function(event){
        $( event.target).find("div.dropdown-menu").css("display","table") ;
        $(event.target).find("i").removeClass("fa-angle-right");
        $(event.target).find("i").addClass("fa-angle-down");
    });
    $(".dropdown").on("shown.bs.dropdown", function(){
        $('.dropdown-submenu a.submenu').next('div').toggle();
    });
    $(".dropdown").on("hide.bs.dropdown", function(event){
        $( event.target).find("div.dropdown-menu").css("display","none") ;
    });
});

function clearAllShowHide(){
  if ( $('.sf-filtertags ul li').length > 2 ) {
    $("#clearAllTags").css("visibility","visible");
  }else{
    $("#clearAllTags").css("visibility","hidden");
  }
}

function removeTagAndUncheck(id, name){
  $("input[name='"+name.trim()+"']:checkbox").prop('checked', false);
  $("#"+id).parent().remove();
  clearAllShowHide();
}

function clearAllTags(){
  $('.sf-filtertags ul').empty();
  $('.sf-filtertags ul').prepend('<li id="clearAllTags" style="border:none;visibility: hidden;" onclick="clearAllTags()"><a href="#">Clear All</a></li>');
  $('input:checkbox').removeAttr('checked');
  clearAllShowHide();
}

//Hide Dropdown popover on out-focus
$(document).on("focusin", function(event){
    var $trigger = $(".dropdown");
    if($trigger !== event.target && !$trigger.has(event.target).length){
        $(".dropdown-menu").slideUp("fast");
    }
});

$(window).click(function() {
    $(".dropdown-menu").slideUp("fast");
});
</script>

<script>
$('a').click(function(){
    if($(this).text().trim() == 'Show More' ){
        $(this).html('Show Less <i class="fa fa-chevron-up"></i>');
    }
    else if($(this).text().trim() == 'Show Less' ){
         $(this).html('Show More <i class="fa fa-chevron-down"></i>');
    }
});
</script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-168173053-1', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>

