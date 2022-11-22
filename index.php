

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IDEAS BOX</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/logo.jpeg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <style>
    
    .contain {
  width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

h3 {
  color: #262626;
  font-size: 17px;
  line-height: 24px;
  font-weight: 700;
  margin-bottom: 4px;
}

p {
  font-size: 17px;
  font-weight: 400;
  line-height: 20px;
  color: #666666;

  &.small {
    font-size: 14px;
  }
}

    .go-corner {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 32px;
  height: 32px;
  overflow: hidden;
  top: 0;
  right: 0;
  background: #c31432; 
  background: -webkit-linear-gradient(to right, #c31432, #240b36); 
  background: linear-gradient(to right, #c31432, #240b36);
  border-radius: 0 4px 0 32px;
}

.go-arrow {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;
}

.card1 {
  display: block;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;

  &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: #00838d;
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(1);
    transform-origin: 50% 50%;
    transition: transform 0.25s ease-out;
  }

  &:hover:before {
    transform: scale(21);
  }
}

.card1:hover {
  p {
    transition: all 0.3s ease-out;
    color: rgba(255, 255, 255, 0.8);
  }
  h3 {
    transition: all 0.3s ease-out;
    color: #ffffff;
  }
}
  </style>
<body>

  <header id="header" class="fixed-top d-flex align-items-center" style="
background: #c31432; 
  background: -webkit-linear-gradient(to right, #c31432, #240b36); 
  background: linear-gradient(to right, #c31432, #240b36); ">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1 style="font-style:italic;font-weight:bold;font-family: forte"><a href="#">IDEAX BOX</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="#about">A Propos De Nous</a></li>
                    <li><a class="nav-link scrollto" href="#services">Nos Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Nos Realisations</a></li>
                    <li><a class="nav-link scrollto" href="#partenaire">Nos Partenaires</a></li>
                    <li><a class="nav-link scrollto" href="#team">Notre Equipe</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                  
                     <li><a class="nav-link scrollto" href="admin.php">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
  

  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1 style="font-style:italic;font-weight:bold" class="typing-slider">Une offre globale de services informatiques et </h1>
            <h1>et conseil en communication et marketing</h1>
            <a href="#about" class="btn-get-started scrollto">Lancez Vous</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-7" data-aos="fade-right">
                        <img src="assets/img/capture.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
                        <h3 data-aos="fade-up" style="font-weight:bold">QUI SOMMES NOUS?</h3>
                        <hr>
                        <p data-aos="fade-up">
                            IDEAS BOX est une agence de conseil en communication et marketing agrée par le MINCOM en 2021 basé au Cameroun Doua
                        </p>
                        <div class="icon-box" data-aos="fade-up">
                            <i class="bx bx-receipt"></i>

                            <p>
                                Registre de Commerce :RC/DLA/2019/B/2237 Numéro contribuable :M041912784090U
                            </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-cube-alt"></i>

                            <p>
                                ID Box a été fondée en 2018 par un jeune Camerounais, NSAHLAI MICHAEL VIDZEMFENYUY, passionné par la communication professionnelle et efficace.
                            </p>
                        </div>



                    </div>
                </div>

            </div>
        </section>
       
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Nos Services</h2>

                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="contain">
                             <a class="card1" href="#">
   
    <p class="small"> Conseil Stratégique en communication marketing et sociale</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>           
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                     <div class="icon-box icon-box-pink">
                            
                            
                              <div class="contain">
                             <a class="card1" href="#">
   
    <p class="small"> Conception et création des campagnes publicitaires</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>      
                     
                    </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                                     <div class="contain">
                             <a class="card1" href="#">
   
    <p class="small">  Le Digital (Community Management, Création des sites Web, publicités social media, Awords)</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>      
                           
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                           
                           
                              <div class="contain">
                             <a class="card1" href="#">
   
    <p class="small">  Le Media (achat et vente de l'espace)</p>
    <div class="go-corner">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>      
                        </div>
                    </div>

                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                                       <div class="contain">
                             <a class="card1">
   
    <p class="small">  
                           Production des Supports Visuels (affiches, bandéroles, calendriers)</p>
    <div class="go-corner">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>      
                     
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="contain">
                             <a class="card1">
   
    <p class="small">  
                          
                           Production Audiovisuelle (Spot TV, Spot Radio, Anima-tique)</p>
    <div class="go-corner">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>      
                     
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                               <div class="contain">
                             <a class="card1">
   
    <p class="small">  
                          
                            La Production Des Gadgets (polos, t-shirts, blocs notes, casquettes, stylos)</p>
    <div class="go-corner">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>      
                          
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box icon-box-blue">
                           
                             <div class="contain">
                             <a class="card1">
   
    <p class="small">  
                          
                              La production des catalogues, Rapports Annuels, L'evenementiel, Le marketing Direct, Les Relations Publiques
                          
                  </p>
    <div class="go-corner">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
           </div>      
                                    </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->

        <!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Nos Realisations</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p> -->
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                           
                                <div class="portfolio-links">
                                    <a href="assets/img/capture1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                               
                                <div class="portfolio-links">
                                    <a href="assets/img/capture2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                               
                                <div class="portfolio-links">
                                    <a href="assets/img/capture3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                          
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                
                                <div class="portfolio-links">
                                    <a href="assets/img/capture4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                              
                                <div class="portfolio-links">
                                    <a href="assets/img/capture5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                
                                <div class="portfolio-links">
                                    <a href="assets/img/capture6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                               
                                <div class="portfolio-links">
                                    <a href="assets/img/capture7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                
                                <div class="portfolio-links">
                                    <a href="assets/img/capture8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/capture9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                               
                                <div class="portfolio-links">
                                    <a href="assets/img/capture9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                                     </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->
        <section id="partenaire" class="partenaire">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Nos Partenaires</h2>

                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/afisa.png" alt="" height="200px"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/chococam.jpg" alt="" height="200px"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/agc.png" alt="" height="200px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/food.jpg" alt="" height="200px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/fre.png" alt=""  class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                     <center><img src="assets/img/ola.jpeg" alt="" height="200px" width="310px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/olam.png" alt="" height="200px" width="320px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/savon.jpg" alt="" height="200px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/scb.jpg" alt="" height="200px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/sika.png" alt="" height="200px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-title"> </div> -->
                                    <!-- <div class="card-body"> -->
                                        <center> <img src="assets/img/smid.png" alt="" height="200px" class="img-fluid"></center>
                                    <!-- </div> -->
                                 

                                <!-- </div> -->
                            </div>
                        </div>
                      <div class="swiper-pagination"></div>

                    </div>
                   
                </div>

            </div>
        </section>
        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Notre Equipe</h2>

                </div>

                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <img src="assets/img/team/team.jpeg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>NSAHLAI MICHAEL VIDZEMFENYUY</h4>
                                    <span>Directeur General</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
  <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                     
                    </div>

                  

                   

                   

                </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= F.A.Q Section ======= -->
       
        <!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>

                </div>

                <div class="row no-gutters justify-content-center" data-aos="fade-up">
                            <div class="col-lg-2"></div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="info">
                           
<table class="table-responsive " style="width:100%">
    <thead>
       
        <th> Email</th>
      <th class=""> 
        Telephone</th>
         <th style="float:right">Localisation</th> 
    </thead>
    <tbody>
        <tr>
            
         
        <td>info@exam</td>
        <td >+237</td>
        <td style="float:right">Douala</td>
        </tr>
    </tbody>
</table>
                    </div>

             </div>       
                </div>


          
        </section>
        <!-- End Contact Section -->

    </main>
   
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3 style="font-family: forte; color:white">IDEAS BOX</h3>
                            <p>
                                Localisation <br>Douala-Cameroun<br><br>
                                <strong>Telephone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h3 style="font-family: forte; color:white">Liens par Défauts</h3>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">A propos de nous</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Nos Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Nos Réalisations</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Notre Equipe</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h3 style="font-family: forte; color:white">Nos Services</h3>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Digital</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Production Des Gadgets</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Production Des Supports Visuels</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Production Gadgets</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Production Des Supports Visuels</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h3 style="font-family: forte; color:white"> Newsletter</h3>
                      
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="envoyer">
                        </form>

                    </div>

                </div>
            </div>
        </div>


    </footer>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>