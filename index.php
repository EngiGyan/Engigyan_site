<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Engigyan.com|Live Training</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="preloader/css/loader.css">
    <script src="preloader/js/loader.js"></script>
    <script>
        function lightbg_clr() {
            $('#qu').val("");
            $('#textbox-clr').text("");
            $('#search-layer').css({"width":"auto","height":"auto"});
            $('#livesearch').css({"display":"none"});	
            $("#qu").focus();
        };
 
        function fx(str)
        {
            var s1=document.getElementById("qu").value;
            var xmlhttp;
            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                document.getElementById("search-layer").style.width="auto";
                document.getElementById("search-layer").style.height="auto";
                document.getElementById("livesearch").style.display="block";
                $('#textbox-clr').text("");
                return;
            }
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                    document.getElementById("search-layer").style.width="100%";
                    document.getElementById("search-layer").style.height="";
                    document.getElementById("livesearch").style.display="block";
                    $('#textbox-clr').text("X");
                }
            }
            xmlhttp.open("GET","includes/call_ajax.php?n="+s1,true);
            xmlhttp.send();	
        }
    </script>
</head>
<body>
    <div class="preloader-overlay" id="preloader">
        <div class="cube-wrapper">
            <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
            </div>
            <span class="loading" data-name="Loading">Loading</span>
        </div>
    </div>  
    <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
    <a class="navbar-brand" href="#"><img class="img-fluid" src="images/engigyan.png" alt="" id="logo"> EngiGyan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="link-nav">HOME</div>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
                    <div class="link-nav">CATEGORIES <span style="font-size: 12px !important;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span> </div>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="menu">
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Computer Science</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="includes/cs/cpp.html">C++</a></li>
                            <li><a class="dropdown-item" href="includes/cs/java.html">JAVA</a></li>
                            <li><a class="dropdown-item" href="includes/cs/mysql.html">MySQL</a></li>
                            <li><a class="dropdown-item" href="includes/cs/python.html">Python</a></li>
                            <li><a class="dropdown-item" href="includes/cs/linux.html">LINUX</a></li>
                            <li><a class="dropdown-item" href="includes/cs/ai.html">Artificial Intelligence</a></li>
                            <li><a class="dropdown-item" href="includes/cs/bigdata.html">Big Data</a></li>
                            <li><a class="dropdown-item" href="#">Web Developement</a></li>
                            <li><a class="dropdown-item" href="#">App Developement</a></li>
                            <li><a class="dropdown-item" href="#">Machine Learning</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Mechanical Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="includes/mechanical/solidworks.html">SolidWorks</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/catia.html">CATIA</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/autocad.html">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="includes/mechanical/ansys.html">ANSIS</a></li>
                            <li><a class="dropdown-item" href="#">CDF Analysis</a></li>
                            <li><a class="dropdown-item" href="#">Hyper Works</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Civil Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="#">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="#">AutoDesk</a></li>
                            <li><a class="dropdown-item" href="#">3D MAX</a></li>
                            <li><a class="dropdown-item" href="#">Running Suits</a></li>
                            <li><a class="dropdown-item" href="#">AutoDesk</a></li>
                            <li><a class="dropdown-item" href="#">Sketch Up</a></li>
                        </ul>
                    </li>
                    <li id="menu-li"><a class="dropdown-item dropdown-toggle" href="#" id="menu-content">Electrical Engineering</a>
                        <ul class="dropdown-menu" id="sub-menu">
                            <li><a class="dropdown-item" href="#">MATLAB</a></li>
                            <li><a class="dropdown-item" href="#">IOT</a></li>
                            <li><a class="dropdown-item" href="#">AutoCAD</a></li>
                            <li><a class="dropdown-item" href="#">PLC</a></li>
                            <li><a class="dropdown-item" href="#">VLSI</a></li>
                            <li><a class="dropdown-item" href="#">Python</a></li>
                        </ul>
                    </li>
                </ul>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <div class="link-nav">SERVICES</div>
                </a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="includes/aboutus.html">
                    <div class="link-nav">ABOUT US</div>
                </a>
            </li> 
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" id="spc">
                <a class="nav-link" href="#">
                    <div class="link-nav">Auto E PREP</div>
                </a>
            </li>
            <li class="nav-item" id="spc1">
                <a class="nav-link" href="#">
                    <div class="link-nav" data-toggle="modal" data-target="#login">Log In</div>
                </a>
            </li>
            <li class="nav-item" id="spc2">
                <a class="nav-link" href="#">
                    <div class="link-nav" data-toggle="modal" data-target="#register">Register</div>
                </a>
            </li>
        </ul>
    </div>  
    </nav>
    <!-- modal box for login-->
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="text-align: center !important;">
                    <center><h3 class="modal-title">Log In to Your Account</h3></center>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="ex:abc@example.com">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                            <div class="col">
                                or <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        Don't have an Account? &nbsp; <a href="" data-dismiss="modal" data-toggle="modal" data-target="#register">Sign Up</a>
                    </div>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal box for registeration-->
    <div id="register" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="text-align: center !important;">
                    <center><h3 class="modal-title">Create Account</h3></center>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name Here">
                            </div>
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email" placeholder="ex:abc@example.com">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Repeat Password:</label>
                            <input type="password" class="form-control" id="pwd2" placeholder="Repeat Password">
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </div>
                        <div class="row" id="policy_l">
                                By signing up , you agree to our <a href="http://"> Terms Of Use </a> and <a href="http://"> Privacy Policy.</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        Already have an account? <a href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Sign In</a>
                    </div>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="s_img">
        <div class="s_img2">
            <div class="ayz">
                <center><h2>We are leading Live Online training provider in india</h2></center>
            </div>
            <div class="search">
                <form action="search.php" method="get">
                    <div class="bk">
                        <input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" class="textbox" placeholder="Search.." tabindex="1">
                        <button type="submit" class="query-submit" tabindex="2"><i class="fa fa-search" style="color:#727272; font-size:20px"></i></button>
                        <div id="livesearch"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: white !important; padding: 20px !important;">
        <div class="container">
            <div class="row" style="justify-content: center !important;" id="second">
                <div class="col-sm-6 col-lg-4">
                    <div class="card" id="c6">
                        <div class="card-header"><center><h5> Live Tutorials </h5></center></div>
                        <img class="card-img-top img-fluid" src="images/java.png" alt="Card image" id="c-img3">
                        <div class="card-body" id="cbody1">
                            <p class="card-text">View Live Tutorials</p>
                            <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card" id="c6">
                        <div class="card-header"><center><h5>Industrial Projects</h5></center></div>
                        <img class="card-img-top img-fluid" src="images/cr_img2.png" alt="Card image" id="c-img3">
                        <div class="card-body" id="cbody1">
                            <p class="card-text">Want to take some industry Projects?</p>
                            <div style="padding: 3px;"><a href="includes/projects.html" class="card-link btn btn-primary">Join Here</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" id="top_courses">
        <div><center><h2>Top Courses</h2></center></div>
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="4000">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/java.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">JAVA</h4>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2200</p>
                                    <div style="padding: 3px;"><a href="includes/cs/java.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/python.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Python</h4>
                                    <p class="card-text"<small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div style="padding: 3px;"><a href="includes/cs/python.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ai.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">A.I</h4>
                                    <p class="card-text"><small><strike>Rs. 5000</strike></small> Rs. 3500</p>
                                    <div style="padding: 3px;"><a href="includes/cs/ai.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/webdev.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Web Developement</h4>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 5000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ansys.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">ANSYS</h4>
                                    <p class="card-text"><small><strike>Rs. 2500</strike></small> Rs. 1800</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/hyperworks.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">HyperWorks</h4>
                                    <p class="card-text"><small><strike>Rs. 2800</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">AutoCad</h4>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ml.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Machine Learning</h4>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 4000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <div class="carousel-control-prev-icon" style="color: red !important"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <div class="carousel-control-next-icon" style="color: red !important"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </a>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid" id="init">
        <div class="container" id="div1">
            <h1>Training from EngiGyan</h1> 
            <p>Improve your Software & programming Skill and knowledge with online/Virtual training on your Phone, Tablet, Laptop over the internet, using a real-time virtual learning environment. EngiGyan offers certified training that all demanding skill in all  engineering field with different programming & simulation software like Java, C, C++, PHP, Python, SQL, JavaScript, CAD & CAE Software and many more throughout country including Delhi, Mumbai, Bengaluru, Chennai, Kolkata, Hyderabad, Pune, Ahmedabad, Kanpur, Patna etc. We offer training online, on-site, as well as customized to meet student's needs. </p> 
        </div>
        <div class="container"  id="div2">
            <h1>Our Trainers</h1>
            <p>Our trainers at EngiGyan are from best institutions & training centre in India and they have a good teaching experience. We guarantee you will be trained by an expert in the software & subjects you are learning. All of our instructors are very well spoken and communicate the course materials in a clear and thorough manner.</p>
        </div>
    </div>
    <div class="container-fluid" id="how">
        <div class="container">
            <h1 style="text-align: center !important;">How can we enhance your skills?</h1>
            <table class="table">
                <tbody>
                    <tr>
                        <td style="vertical-align: middle"><img src="images/tab1_img1.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h3>Classroom Training</h3>Plan for your training requirements by viewing the classroom courses available for CAD & CAE, including, SOLIDWORKS, CATIA,  AUTOCAD, ANSYS, HYPERMESH, MatLab, PDMS and more.</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle"><img src="images/tab1_img2.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h3>Custom Training</h3>Some users require more specialized training outside our posted courses. We offer custom training for software platforms, design process techniques, project management, certified exam preparation, and much more. We also arrange for Custom CAD & CAE Training at customer facilities to save them travel expenses and to provide a condensed curriculum.</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle"><img src="images/tab1_img3.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h3>Passport Training</h3>For those new to CAD & CAE softwares who are committed to getting up to speed quickly, EngiGyan offers an Exclusive Discounted Training Program called the EngiGyan Passport Training. For a one-time fee, the 7 most popular CAD & CAE software Training classes are available for an individual student to take once each over a 12 month period.</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle"><img src="images/tab1_img4.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h3>Google Classroom</h3>We provide Google Classroom to registered Students & professional so that they can view the Topicwise Courses, Study material PDF, Homework models you can upload your homework & Submit the Homework Solution .</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: middle"><img src="images/tab1_img5.png" alt="" class="rounded-circle img-fluid" id="img1"></td>
                        <td style="vertical-align: middle"><h3>Virtual Training</h3>Our Virtual Training is instructor led training for CAD & CAE softwares, Certified Exam Preparation delivered LIVE over the Web, can be access on Smart Phone, Tablet & Laptop and is available for select course offerings. Our virtual classes follow the exact same curriculum as our classroom training but with the convenience of remaining in your home or office!</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid" id="thi">
        <div class="highlights"><h1 style="text-align: center !important;">Training Highlights</h1><br></div>
        <div class="container"> 
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Top Certified Instructors </h5>
                            <p class="card-text">Over 20+ certified instructors with unequalled industry experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">State-of-the-Art</h5>
                            <p class="card-text">Interactive Students & teachers setups create a collaborative training experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Mobile Training Capabilities</h5>
                            <p class="card-text">We can bring a great training experience right to our customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="here">
        <div class="container">
            <div class="highlights"><h1 style="text-align: center !important;">What Do You Get Here!!</h1><br></div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="padding-top: 10px !important;">
                        <img class="card-img-top img-fluid" src="images/cr_img1.png" alt="Card image" id="c-img">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title">Certified Training</h4>
                            <p class="card-text">At the end of training you will be awarded with certificate of completion.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="padding-top: 10px !important;">
                        <img class="card-img-top img-fluid" src="images/cr_img2.png" alt="Card image"  id="c-img">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title">Placement Training</h4>
                            <p class="card-text">Get complimentary access to placement training to ace your internship/job hunt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="padding-top: 10px !important;">
                        <img class="card-img-top img-fluid" src="images/cr_img3.png" alt="Card image"  id="c-img">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title">Industrial Project</h4>
                            <p class="card-text">Learn to build 2D draft and 3D models in CAD & CAE softwares.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="padding-top: 10px !important;">
                        <img class="card-img-top img-fluid" src="images/cr_img4.png" alt="Card image" id="c-img">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title">Live Chat Support</h4>
                            <p class="card-text">Interact with teaching expert over 1 hour daily live interface.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="padding-top: 10px !important;">
                        <img class="card-img-top img-fluid" src="images/cr_img5.png" alt="Card image" id="c-img">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title">Forum Support</h4>
                            <p class="card-text">Post your queries on Google Classroom & get it answered within 24 hours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="padding-top: 10px !important;">
                        <img class="card-img-top img-fluid" src="images/cr_img6.png" alt="Card image" id="c-img">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title">Hands On Exercises</h4>
                            <p class="card-text">Your training is packed with assessment test,code challenges,quizzes and exercises.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="courses">
        <div class="row" id="c_name">
            <h3>Computer Science</h3>
        </div>
        <div id="demo2" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/java.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">JAVA</h4>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2200</p>
                                    <div style="padding: 3px;"><a href="includes/cs/java.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/python.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Python</h4>
                                    <p class="card-text"<small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div style="padding: 3px;"><a href="includes/cs/python.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ai.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">A.I</h4>
                                    <p class="card-text"><small><strike>Rs. 5000</strike></small> Rs. 3500</p>
                                    <div style="padding: 3px;"><a href="includes/cs/ai.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/matlab.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">MATLAB</h4>
                                    <p class="card-text"><small><strike>Rs. 4500</strike></small> Rs. 3600</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/cpp.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">C++</h4>
                                    <p class="card-text"><small><strike>Rs. 2200</strike></small> Rs. 1800</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/appdev.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">App Developement</h4>
                                    <p class="card-text"><small><strike>Rs. 4500</strike></small> Rs. 3500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ml.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Machine Learning</h4>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 4000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/networking.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Computer Networking</h4>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" id="c_dif">
                        <div class="col-sm-4 col-lg-4">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/mysql.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">MySQL</h4>
                                    <p class="card-text"><small><strike>Rs. 2200</strike></small> Rs. 1800</p>
                                    <div style="padding: 3px;"><a href="includes/cs/mysql.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/linux.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">LINUX</h4>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="includes/cs/linux.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/bigdata.jpg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Big Data</h4>
                                    <p class="card-text"><small><strike>Rs. 5500</strike></small> Rs. 4000</p>
                                    <div style="padding: 3px;"><a href="includes/cs/bigdata.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo2" data-slide="prev">
              <div class="carousel-control-prev-icon" style="color: red !important"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            </a>
            <a class="carousel-control-next" href="#demo2" data-slide="next">
              <div class="carousel-control-next-icon" style="color: red !important"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </a>
        </div>
        
        <div class="row" id="c_name">
            <h3 style="text-align: center !important">Mechanical Engineering</h3>
        </div>
        <div id="demo3" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/cdf.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">CDF Analysis</h4>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/catia.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">CATIA</h4>
                                    <p class="card-text"<small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="includes/mechanical/catia.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">AutoCAD</h4>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2000</p>
                                    <div style="padding: 3px;"><a href="includes/mechanical/autocad.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/solidworks.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">SolidWorks</h4>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/ansis.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">ANSYS</h4>
                                    <p class="card-text"><small><strike>Rs. 2500</strike></small> Rs. 1800</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/hyperworks.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">HyperWorks</h4>
                                    <p class="card-text"><small><strike>Rs. 4500</strike></small> Rs. 3500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/java.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">JAVA</h4>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2800</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/python.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Python</h4>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo3" data-slide="prev">
              <div class="carousel-control-prev-icon" style="color: red !important"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            </a>
            <a class="carousel-control-next" href="#demo3" data-slide="next">
              <div class="carousel-control-next-icon" style="color: red !important"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </a>
        </div>
        
        <div class="row" id="c_name">
            <h3>Civil Engineering</h3>
        </div>
        <div id="demo4" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/3dmax.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">3D MAX</h4>
                                    <p class="card-text"><small><strike>Rs. 3100</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/runningsuits.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Running Suits</h4>
                                    <p class="card-text"<small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="includes/mechanical/catia.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autodesk.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">AUtoDesk</h4>
                                    <p class="card-text"><small><strike>Rs. 3300</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="includes/mechanical/autocad.html" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">AutoCAD</h4>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/revit.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">AutoDesk Revit</h4>
                                    <p class="card-text"><small><strike>Rs. 4000</strike></small> Rs. 3000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/sketchup.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Sketch Up</h4>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo4" data-slide="prev">
              <div class="carousel-control-prev-icon" style="color: red !important"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            </a>
            <a class="carousel-control-next" href="#demo4" data-slide="next">
              <div class="carousel-control-next-icon" style="color: red !important"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </a>
        </div>
        
        <div class="row" id="c_name" style="border: none !important">
            <h3 style="text-align: center !important">Electrical Engineering</h3>
        </div>
        <div id="demo5" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/matlab.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">MATLAB</h4>
                                    <p class="card-text"><small><strike>Rs. 4200</strike></small> Rs. 3500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/iot.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">IOT</h4>
                                    <p class="card-text"<small><strike>Rs. 5200</strike></small> Rs. 4500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/plc.jpeg" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">PLC</h4>
                                    <p class="card-text"><small><strike>Rs. 6000</strike></small> Rs. 5000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/autocad.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">AutoCAD</h4>
                                    <p class="card-text"><small><strike>Rs. 3500</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row" id="c_dif">
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/revit.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">AutoDesk Revit</h4>
                                    <p class="card-text"><small><strike>Rs. 4000</strike></small> Rs. 3000</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/vlsi.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">VLSI</h4>
                                    <p class="card-text"><small><strike>Rs. 3000</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-lg-3">
                            <div class="card" id="c">
                                <img class="card-img-top img-fluid" src="images/python.png" alt="Card image" id="c-img">
                                <div class="card-body" id="cbody1">
                                    <h4 class="card-title">Python</h4>
                                    <p class="card-text"><small><strike>Rs. 3200</strike></small> Rs. 2500</p>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">View More</a></div>
                                    <div style="padding: 3px;"><a href="#" class="card-link btn btn-primary">Join Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo5" data-slide="prev">
              <div class="carousel-control-prev-icon" style="color: red !important"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            </a>
            <a class="carousel-control-next" href="#demo5" data-slide="next">
              <div class="carousel-control-next-icon" style="color: red !important"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </a>
        </div>
    </div>
    <div class="container-fluid" id="teachers">
        <div class="highlights"><h1 style="text-align: center !important;">Our Faculties</h1><br></div>
        <div class="container" id="ccc">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" id="ment_c">
                        <img class="card-img-top img-fluid" src="images/sonu_singh.png" alt="Card image" id="c-img2">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title" id="ment">Sonu Singh</h4>
                            <p class="card-text" id="text1"> NIT Agartala <br> Mentor</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" id="ment_c">
                        <img class="card-img-top img-fluid" src="images/amber_mishra.png" alt="Card image" id="c-img2">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title" id="ment">Amber Mishra</h4>
                            <p class="card-text" id="text1">"5 years teaching experience in CAD & CAE softwares"</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" id="ment_c">
                        <img class="card-img-top img-fluid" src="images/anil_singh.png" alt="Card image" id="c-img2">
                        <div class="card-body" id="cbody1">
                            <h4 class="card-title" id="ment">Anil Singh</h4>
                            <p class="card-text" id="text1">" 6 years Experience in CAD Softwares"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="review">
        <div class="highlights"><h1 style="text-align: center !important;">Student's Feedback</h1><br></div>
        <div class="container">
            <div id="demox" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demox" data-slide-to="0" class="active"></li>
                    <li data-target="#demox" data-slide-to="1"></li>
                    <li data-target="#demox" data-slide-to="2"></li>
                    <li data-target="#demox" data-slide-to="3"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="media border p-3">
                            <img src="images/st_img1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4>Gaurav Kr Singh <small><i>NIT Srinagar</i></small></h4>
                                <p>EngiGyan is the best platform for online software training to provide better and quality training. any remote person can able to access and taught by the best trainer across the India. Just if u have a laptop and internet then you can access from any place, any where and any time</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="media border p-3">
                            <img src="images/st_img2.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4 style="text-align: left !important">Amit Kumar <small><i>JECRC Jaipur</i></small></h4>
                                <p>Yeah EngiGyan guys are doing a great job. I think online training offers safety, flexibility of time and selection of trainer much better than an offline option.Another great site providing onlinetraining is https://www.edx.org/</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="media border p-3">
                            <img src="images/st_img3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4>Rahul Kumar</h4>
                                <p>I have taken courses on edx, Coursera,Udemy & EngiGyan. what i observed difference in engigyan have regional language trainer.Trainers are alwayes ready to help.i most like in engigyan is google classroom in which well maintain study material, projects, lectures.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="media border p-3">
                            <img src="images/st_img4.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" id="st_img">
                            <div class="media-body">
                                <h4>Rajat Kumar</h4>
                                <p>I have completed my solidworks training program and it was very amazing experience with our trainie we got our doubts cleared time to time and regularly got our homework sheets. It is the best platform for learning Softwares. You can directly talk with the trainer and clear your doubts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="query">
        <div class="highlights"><h1 style="text-align: center !important;color: blue !important;">Drop Your Queries Here!</h1><br></div>
        <div class="container">
            <form action="" class="q_form">
                <div class="row">
                    <div class="col-lg-6 col-sm-6" id="q_inputs"><input type="text" name="name" id="q_name" placeholder="Name"></div>
                    <div class="col-lg-6 col-sm-6" id="q_inputs"><input type="email" name="email" id="q_email" placeholder="E-mail"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12" id="q_inputs"><input type="text" name="subject" id="q_subject" placeholder="Subject"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12" id="q_inputs"><textarea name="message" id="q_message" cols="100" rows="3" placeholder="Message"></textarea></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12" id="q_inputs"><button type="submit" class="" id="q_sub">SUBMIT</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid" id="footer">
        <div class="">
            <div class="">
                <h2>EngiGyan</h2>
                <p>EngiGyan is leading best Live online Software training in India.</p>
            </div>
            <div class="">
                Follow <br>
                <a href="https://www.facebook.com/engigyan"><i class="fa fa-facebook-square" style="font-size:24px; color: whitesmoke"></i></a> &nbsp;
                <a href="https://www.linkedin.com/in/engigyan/"> <i class="fa fa-linkedin" style="font-size:24px; color: whitesmoke"></i> </a> &nbsp;
                <a href="http://"> <i class="fa fa-youtube-play" style="font-size:24px; color: whitesmoke"></i> </a>
            </div>
        </div>
        <div class="">
            <div class="">
                <h2>Contact Us</h2>
                <p>Cabin F-2, SMVDU-TBIC <br> Katra, J&K, (182320)</p>
            </div>
            <div class="">
                mail id: <a href="mailto:info@engigyan.com" id="foo">info@engigyan.com </a> <br>
                Contact Us: (+919596098157, +919149604575)
            </div>
        </div>
    </div>
</body>
<script src="js/dropdown.js"></script>
</html>