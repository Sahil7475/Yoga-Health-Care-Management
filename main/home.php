<?php
  session_start();
  
  $userdata = $_SESSION['userdata'];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Rec</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
   <!--  <link rel="stylesheet" href="../main/css/home.css"> -->
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/home.css" />
    <script
      src="https://kit.fontawesome.com/332a215f17.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="lightbox.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      body{
    font-family: 'Montserrat', sans-serif;
}

/*===Button===*/
.site-btn{
    display: inline-block;
    border:none;
    font-size: 16px;
    font-weight: 600;
    min-width: 167px;
    padding: 14px 30px;
    border-radius: 50px;
    color: #fff;
    line-height: normal;
    cursor: pointer;
    text-align: center;
    letter-spacing: 1px;
    background: linear-gradient(145deg, #7deefe 0%, #5db1f6 100%);
    
}
.site-btn:hover{
    color: #fff;
}
.site-btn.sb-gradient{
    color: #fff;
    padding: 13px 29px;
    position: relative;
    transition: all 0.4s;
    z-index: 1;
}
.site-btn.sb-gradient:after{
 content:"";
 position: absolute;
 width: calc(100% - 4px);
 height: calc(100% - 4px);
 top: 2px;
 left: 2px;
 border-radius: 80px;
 background-color: #fff;
 z-index: -1;
 opacity: 0;
 filter: alpha(opacity=0);
 transition: all 0.4s;
}
.site-btn.sb-gradient:hover{
    color: #010c2c;
}
.site-btn.sb-gradient:hover:after{
    opacity: 1;
    filter: alpha(opacity=100);
}
/*=========Top bar======*/
#topbar{
    background:#fff;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    font-size: 15px;
}
#topbar .contact-info a{
    line-height: 1;
    color:#444;
    transition: 0.3s;
}
#topbar .contact-info a:hover{
    color:#01b1d7;
}
#topbar .contact-info i{
    color:#01b1d7;
    padding: 4px;
}
#topbar .contact-info .phone-icon{
    padding-left: 20px;
    margin-left: 20px;
    border-left: 1px solid #010631!important;
}
#topbar .social-links a{
    color: #01b1d7;
    padding: 4px 12px;
    display: inline-block;
    line-height: 1;
    transition: 0.3s;
    border-left: 1px solid #010631;
}
#topbar .social-links a:hover{
    color: #01b1d7;
}
#topbar .social-links a:first-child{
    border-left: 0;
}
/*========End of Top bar=========*/

/*=======Navbar===========*/
.bg-color{
    background: #2ae4ee;
}
.nav-link{
    color: #000;
}
.nav-item a:hover{
    color:#fff;
    font-weight: bold;
}
.navbar-brand{
    color: #051725!important;
    font-weight: bold;
    font-size: 40px;
}
/*=======End of the Navbar===========*/
/*=======Hero Section===========*/
.slide-1,
.slide-2,
.slide-3{
    min-height: 80vh;
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 82%);
}
.slide-1{
 background: linear-gradient(to right, rgba(2,79,99,0.9),
rgba(5,183,192,0.5)), url(./img/slide-1.jpg) center /cover fixed no-repeat;
}
.slide-2{
    background: linear-gradient(to right, rgba(2,79,99,0.9),
   rgba(5,1,52,0.5)), url(./img/slide-2.jpg) center /cover fixed no-repeat;
   }

   .slide-3{
    background: linear-gradient(to right, rgba(2,14,52,0.9),
   rgba(2,15,54,0.5)), url(./img/slide-3.jpg) center /cover fixed no-repeat;
   }
.no-padding{
    padding:0;
}
/*=======End of the Hero Section===========*/
/*=======about Section======*/
.section-title{
    text-align: center;
    margin-bottom:55px;
}
.about-section{
    padding-top: 110px;
    padding-bottom: 105px;
}
.about-item{
    margin-bottom: 30px;
}
.about-img{
    box-shadow: 0 10px 29px 0 rgba(6, 1, 48, 0.5);
}

.about-item .about-icon{
    float: left;
    width: 100px;
    height: 100px;
    border: 1px solid #09d9f5;
    margin-right: 20px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    box-shadow: 0 10px 29px 0 rgba(6, 1, 48, 0.5); 
}

.about-icon i{
    color: #09d9f5;
    padding-top: 30px;
   
}
.about-item .about-text{
    overflow: hidden;
    padding-top: 10px;
}
.about-item .about-text h4{
    font-weight: 400;
    margin-bottom: 15px;
}
.about-item .about-text p{
    font-size:16px;
    margin-bottom: 0;
}

.about-item .about-icon{
     text-align: center;
    
}
@media (max-width: 576px){
    .about-item .about-icon{
        float: none;  
        margin-bottom: 20px;
    }
}

@media only screen and (min-width: 768px) and (max-width:991px),
only screen and (min-width: 576px) and (max-width: 767px),
(max-width: 576px){
    .about-img{
        text-align: center;
        margin-bottom: 50px;
    }
}
/*=============End of About Section===========*/
/*===========Services Section=========*/
.section-bg{
    background: #abd2f736;
}
.services .icon-box{
 padding: 30px;
 position: relative;
 overflow: hidden;
 border-radius: 10px;
 margin: 0 10px 40px 10px;
 background: #fff;
 box-shadow: 0 10px 29px 0 rgba(6, 1, 48, 0.5); 
 transition: all 0.3s ease-in-out;
}
.services .icon-box:hover{
    transform: translateY(-5px);
}

.services .icon{
    position: absolute;
    left: -20px;
    top: calc( 50% - 30px);
}
.services .icon i{
    font-size: 64px;
    line-height: 1;
    transition: 0.5s;
}
.services .title{
    margin-left: 40px;
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 18px;
}
.services .title a{
    color: #111;
}
.services .icon-box:hover .title a{
    color: #49b5e7;
}
.services .description{
    font-size: 14px;
    margin-left: 40px;
    line-height: 24px;
    margin-bottom: 0;
}
/*======End of Service Section=======*/
.price-item{
    text-align: center;
    background: #fff;
    padding-bottom: 40px;
    margin: 15px 0;
    border-radius: 13px;
    overflow: hidden;
    box-shadow: 0 10px 29px 0 rgba(6, 1, 48, 0.5); 
    transition: all 0.4s;
}
.price-item:hover{
    box-shadow: 0 10px 29px 0 rgba(83, 210, 245, 0.7); 
}
.price-item .price-top{
    height: 156px;
    padding-top: 26px;
}
.price-item .price-top h4{
    color: #fff;
    font-size: 22px;
    font-weight: 400;
    text-transform: uppercase;
}
.price-item .price-sec{
    width: 144px;
    height: 144px;
    margin: -71px auto 30px;
    padding-top: 35px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0px 5px 6px rgba(6,1,48,0.5);
}
.price-item .price-sec h3{
    font-size: 40px;
    font-weight: 600;
    color: #666;
}
.price-item .price-sec p{
    text-transform: uppercase;
    color: #999;
}
.price-item ul{
    list-style: none;
    margin-bottom: 20px;
}
.price-item ul li{
    font-size: 16px;
    color: #666;
    margin: 12px;
}
.price-item.beginner .price-top{
    background-color: #09aef0;
}
.price-item.intermediate .price-top{
    background-color: #41baeb;
}
.price-item.advanced .price-top{
    background-color: #05c8eb;
}
.price-item.professional .price-top{
    background-color: #0399f0;
}
/*===End of the Pricing===*/
.gallery{
    backface-visibility: hidden;
    transition: all .4s;
}
.gallery:hover{
    transform:scale(1.05);
}
/*====End of Gallery===*/
/*===Faq Section===*/
.section-title {
  text-align: center;
  margin-bottom: 55px;
}
.faq .faq-list {
  padding: 0 100px;
  }
  
  .faq .faq-list ul {
  padding: 0;
  list-style: none;
  }
  
  .faq .faq-list li + li {
  margin-top: 15px;
  }
  
  .faq .faq-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
  }
  
  .faq .faq-list a {
  display: block;
  position: relative;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
  }
  
  .faq .faq-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #021235;
  }
  
  .faq .faq-list .icon-show, .faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
  }
  
  .faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
  }
  
  .faq .faq-list .icon-show {
  display: none;
  }
  
  .faq .faq-list a.collapsed {
  color: #00162c;
  }
  
  .faq .faq-list a.collapsed:hover {
  color: #0874bd;
  }
  
  .faq .faq-list a.collapsed .icon-show {
  display: inline-block;
  }
  
  .faq .faq-list a.collapsed .icon-close {
  display: none;
  }
  
  @media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
  }
/*============*/
footer{
    padding: 50px 0 0;
}
footer .widget{
    margin-bottom: 30px;
}
footer .widget h5{
    font-size: 20px;
    margin-bottom: 10px;
    text-transform: uppercase;
}
.sub-footer{
    margin-top: 30px;
    background: #fff;
    border-top: 1px solid #ddd;
    padding: 30px 0 10px;
}
.sub-footer a{
    color: #444;
}
footer .sub-footer p{
    font-size: 14px;
}
.widget ul{
    list-style:none;
    margin-left: 0;
    padding-left: 0;

}
.social-network{
    margin-left:0;
    padding-left:0;
    margin-top: 10px;
    text-align: left;
    list-style: none;
}
.social-network li{
    margin:0;
    padding:0;
    display: inline-block;
}
.social-network a{
    margin: 0 2px 0 0;
}
.social-network a:hover{
    color: #fff;
}
.social-network a i{
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    color: #fff;
    transition: background .3s ease-in-out;
    text-align: center;
    border-radius: 3px;
    padding: 0;
}
.social-network .social-facebook a i{
    background: #3873ae;
}
.social-network .social-twitter a i{
    background: #62c6f8;
}
.social-network .social-instagram a i{
    background: #d74980;
}


    </style>
</head>
<body>
    <body>
        <!---Top Bar-->
        <section id="topbar" class="d-none d-lg-block">
          <div class="container d-flex">
            <div class="contact-info mr-auto">
              <i class="fas fa-envelope"></i>
              <a href="">yogahealthcare@gmail.com</a>
              <i class="fas fa-phone"></i>+22 1234 5678
            </div>
            
          </div>
        </section>
    
        <!---End of Top Bar-->
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg bg-color" id="myNavbar">
          <div class="container">
            <a href="#" class="navbar-brand">Yoga </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#myNav"
              aria-controls="myNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span></span>Menu
            </button>
            <div class="collapse navbar-collapse" id="myNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="../main/home.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="../main/about.html" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="../main/services.html" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                  <a href="../main/pricing.html" class="nav-link">Packages</a>
                </li>
                <li class="nav-item">
                  <a href="../main/products.html" class="nav-link">Our Products</a>
                </li>
                <li class="nav-item">
                  <a href="../main/logout.php" class="nav-link">Log Out</a>
                </li>
                <li class="nav-item">
                  <a href="../main/remove.php" class="nav-link">Remove Account</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Hey! <?php echo $userdata['u_name'] ?></a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
        <!--End of Navbar-->
        <!--Hero Section-->
        <div class="container-fluid">
          <div class="row">
            <div class="col no-padding">
              <div id="hero-slider" class="carousel slide" data-ride="carousel">
                <!------>
                <div class="carousel-inner">
                  <div class="carousel-item slide-1 active">
                    <div class="carousel-caption mb-5 text-right">
                      <h1 class="display-3 text-capitalize mb-2 text-bold">
                        Yoga Life
                      </h1>
                     
              </div>
            </div>
          </div>
        </div>
    
        <!---End of the Services Section-->
        <!---Pricing Section-->
    
        <!---End of the Pricing Section-->
        <!---GAllery SEction-->
        <section class="gallery">
          <div class="container">
            <div class="row">
              <div class="col text-center py-5">
                <h1 class="text-dark text-uppercase">Our Gallery</h1>
              </div>
            </div>
            <!------>
            <div class="row mb-4 first-row align-items-end">
              <div class="col-lg-3">
                <a
                  href="../main/css/2.jpg"
                  data-lightbox="yoga"
                  data-title="image-title"
                >
                  <img src="../main/css/2.jpg" class="img-thumbnail gallery" />
                </a>
              </div>
              <!----->
              <div class="col-lg-3">
                <a
                  href="../main/css/3.jpg"
                  data-lightbox="yoga"
                  data-title="image-title"
                >
                  <img src="../main/css/3.jpg" class="img-thumbnail gallery" />
                </a>
              </div>
              <!----->
              <div class="col-lg-3">
                <a
                  href="../main/css/4.jpg"
                  data-lightbox="yoga"
                  data-title="image-title"
                >
                  <img src="../main/css/4.jpg" class="img-thumbnail gallery" />
                </a>
              </div>
              <!----->
              <div class="col-lg-3">
                <a
                  href="../main/css/10.jpg"
                  data-lightbox="yoga"
                  data-title="image-title"
                >
                  <img src="../main/css/10.jpg" class="img-thumbnail gallery" />
                </a>
              </div>
             
              <!----->
            </div>
          </div>
        </section>
        <!--End of the Gallery Section-->
        <!---FAQ-->
    
        <section id="faq" class="faq section-bg pt-5">
          <div class="container">
            <div class="section-title">
              <h2>F.A.Q</h2>
              <p>
               
              </p>
            </div>
    
            <div class="faq-list">
              <ul>
                <li>
                  <i class="far fa-question-circle icon-help"></i>
                  <a data-toggle="collapse" class="collapse" href="#faq-list-1"
                    >What kind of workout formats are available at our centre?
                    <i class="fas fa-chevron-down icon-show"></i>
                    <i class="fas fa-chevron-up icon-close"></i
                  ></a>
                  <div
                    id="faq-list-1"
                    class="collapse show"
                    data-parent=".faq-list"
                  >
                    <p>
                      Weight loss package for one month with 15+ online sessions as well as offline sessions.
                      Also trial packs are available (offline only).
                      Yoga Diet is also provided.
                      More packages you can check on Pricing and Services.
                
                    </p>
                  </div>
                </li>
                <li>
                  <i class="far fa-question-circle icon-help"></i>
                  <a data-toggle="collapse" href="#faq-list-4" class="collapsed"
                    >Why yoga is important in our life? <i class="fas fa-chevron-down icon-show"></i
                    ><i class="fas fa-chevron-up icon-close"></i
                  ></a>
                  <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                    <p>
                      It brings together physical and mental disciplines to achieve a peaceful body and mind; it helps manage stress and anxiety and keeps you relaxing. It also helps in increasing flexibility, muscle strength and body tone. It improves respiration, energy and vitality.
                    </p>
                  </div>
                </li>
    
                <li>
                  <i class="far fa-question-circle icon-help"></i>
                  <a data-toggle="collapse" href="#faq-list-5" class="collapsed"
                    >What are the advantages of yoga and meditation?
                    <i class="fas fa-chevron-down icon-show"></i
                    ><i class="fas fa-chevron-up icon-close"></i
                  ></a>
                  <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                    <p>
                      Health benefits of Yoga :-
                       Improves posture
                      ??? Increases flexibility
                      ??? Builds muscle strength
                      ??? Boosts metabolism
                      Benefits of meditation :-
                       Gaining a new perspective on stressful situations.
                      ??? Building skills to manage your stress.
                      ??? Increasing self-awareness.
                      ??? Focusing on the present
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-- End F.A.Q Section -->
        <!---End of FAQ-->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div>
                  <div class="widget">
                    <h5>Yoga Life</h5>
                    <p>
                      Make your health First Priority..!
                    </p>
                  </div>
                </div>
                <div>
                  <div class="widget">
                    <h5>Information</h5>
                    <ul>
                      <li>Home</li>
                      <li>About Us</li>
                      <li>Services</li>
                      <li>Packages</li>
                      <li>Our Products</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div>
                  <div class="widget">
                    
                    <ul>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i>
                        </span>
                        Monday-Saturday, 8am-8pm
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                        +22 1234 5678
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                        yogahealthcare@gmail.com
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div>
                  <div class="widget">
                    <h5>Our Location</h5>
                    <p>The Wellness Home, R.C Road, New Panvel, Navi-Mumbai, Maharashtra, 410-206</p>
                  </div>
                </div>
                <div>
                  <div class="widget">
                    <h5>Follow Us</h5>
                    <ul class="social-network">
                      <li class="social-facebook">
                        <a href="https://www.facebook.com/login.php">
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                      <li class="social-twitter">
                        <a href="https://twitter.com/?lang=en-in">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li class="social-instagram">
                        <a href="https://www.instagram.com/">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub-footer">
            <div class="container">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div>
                    <div class="text-left">
                      <p>&copy; Copyright - Yoga. All rights reserved</p>
                    </div>
                  </div>
                </div>
                <div class="text-right">
                  <div class="credits">Designed by Yoga Health & Care</div>
                </div>
              </div>
            </div>
          </div>
        </footer>
    
        <script src="lightbox.min.js"></script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
          src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
          crossorigin="anonymous"
        ></script>
      </body>
</body>
</html>