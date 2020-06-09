<?php
include "config.php";


        if(!empty($_SERVER["HTTP_CLIENT_IP"])){
            $ip_address = $_SERVER["HTTP_CLIENT_IP"];
        }else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $ip_address = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }else{
            $ip_address = $_SERVER["REMOTE_ADDR"];
        }
?>


<!DOCTYPE html>
<html lang="sk">
<head>

     <title>Záverečný projekt z WEBTECH2</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

          <link rel="stylesheet" href="css/soon.css">
     <link rel="stylesheet" href="css/bootstrap.css">




     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <link rel="stylesheet" href="css/templatemo-style.css">




</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Záverečný projekt z WEBTECH2</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Domov</a></li>
                         <li><a href="#animation" class="smoothScroll">Konštrukcie modelov</a></li>
                         <li><a href="#statistics" class="smoothScroll">Štatistika</a></li>
                         <li><a href="#team" class="smoothScroll">Kto sme</a></li>
                         <li><a href="#tags" class="smoothScroll">Rozdelenie úloh</a></li>

                    </ul>


               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Vyskúšaj naše animácie rôznych technických modelov</h1>
                                             <h3>Objavuj pohyby modelov podľa tebou zadaných parametrov. Rozhýb kyvadlo alebo guličku na tyči. </h3>
                                             <a href="#animation" class="section-btn btn btn-default smoothScroll">Vyskúšaj viac</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Pozri si štatistiky návštevnosti animácií našich modelov</h1>
                                             <h3>Vyskúšaj naše animácie a pozri sa na návštevnosť daných modelov. Ktorý sa najviac páči tebe?</h3>
                                             <a href="#statistics" class="section-btn btn btn-default smoothScroll">Pozri štatistiku</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Spoznaj náš tím</h1>
                                             <h3>Chceš vidieť kto tvorí náš tím? Spoznaj ľudí, ktorý usilovne pracovali na vytvorení týchto animácií.</h3>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Spoznávaj</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>

     <!-- FEATURE -->
     <section id="animation">

               <section class="container tm-page-1-content tm-page-2">
                    <article class="col-md-6 tm-article tm-bg-white-transparent">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Kyvadlo</h3>
                              <p></p>
                              <a href="http://147.175.121.210:8166/Skuska/kyvadlo/index.php" class="btn btn-danger ml-auto mr-0 tm-btn-block">Details...</a>
                         </div>
                    </article>

                    <article class="col-md-6 tm-article tm-bg-white-transparent">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Gulička tyči</h3>
                              <p></p>
                              <a href="http://147.175.121.210:8166/Skuska/gulicka/gulicka.php" class="btn btn-danger ml-auto mr-0 tm-btn-block">Details...</a>
                         </div>
                    </article>
               </section>
               <section class="container tm-page-1-content tm-page-2">
                    <article class="col-md-6 tm-article tm-bg-white-transparent">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>Tlmič auta</h3>
                              <p></p>
                              <a href="http://147.175.121.210:8166/Skuska/auto/tlmic.php" class="btn btn-danger ml-auto mr-0 tm-btn-block">Details...</a>
                         </div>
                    </article>

                    <article class="col-md-6 tm-article tm-bg-white-transparent">
                         <div class="feature-thumb">
                              <span>04</span>
                              <h3>Klapka lietadla</h3>
                              <p></p>
                              <a href="http://147.175.121.210:8166/Skuska/lietadlo/naklon.php" class="btn btn-danger ml-auto mr-0 tm-btn-block">Details...</a>
                         </div>
                    </article>
               </section>

     </section>

     <!-- STATISTICS -->
     <section id="statistics">
          <section id="header">
             <div class="container">
                 <!-- START TIMER -->

                 <?php
                 $sql3 = "SELECT * FROM navstevnost stat ORDER BY stat.count DESC";
                 $result3 = $conn->query($sql3);

                 if ($result3->num_rows > 0) {
                     echo "<h2 >Štatistika návštevnosti jednotlivých modelov</h2>";
                     echo "<div id=\"timer\">";
                     while($row3 = $result3->fetch_assoc()) {
                         echo "<div  class=\"timer_box\"><h1>".$row3["count"]."</H1><p>".$row3["page"]."</p></div>";
                     }
                     echo "</div>";
                 }
                 $conn->close();
                 ?>
          <!-- STATISTICS on EMAIL -->
                  <div class="container">
                         <div class="col-md-4 col-sm-12">

                              <figcaption>
                                   <h3>CHCEŠ MAŤ PREHLAD U SEBA?</h3>
                                   <p>Pošli si štatistiky na svoj email:</p>
                              </figcaption>

                              <div class="footer-info newsletter-form">
                                   <div class="form-group">
                                             <input type="email" class="form-control" placeholder="Vloz email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" onclick="sendEmail()" name="submit" id="form-submit" value="Odoslať">
                                   </div>
                              </div>
                         </div>
                  </div>
             </div>
          </section>
     </section>



     <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
     <script type="text/javascript">
         function sendEmail() {
             console.log('sending...');

             var email = $("#email");

             if (isNotEmpty(email)  ) {
                 $.ajax({
                     url: 'sendEmail.php',
                     method: 'POST',
                     dataType: 'json',
                     data: {
                         email: email.val(),

                     }, success: function (response) {
                         if (response.status == "success")
                             alert('Úspešne odoslané!');
                         else {
                             alert('Úspešne odoslané!');
                             console.log(response);
                         }
                     }
                 });
             }

             function isNotEmpty(caller) {
                 if (caller.val() == "") {
                     caller.css('border', '1px solid red');
                     return false;
                 } else
                     caller.css('border', '');

                 return true;
             }
         }


     </script>



     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Členovia tímu<small>Spoznaj nás</small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/man_icon.png" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Adam</h3>
                                   <span>...</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/man_icon.png" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Peťo</h3>
                                   <span>...</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/man_icon.png" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Martin</h3>
                                   <span>...</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                                   <li><a href="#" class="fa fa-linkedin"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/woman_icon.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Miška</h3>
                                   <span>...</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                                   <li><a href="#" class="fa fa-linkedin"></a></li>
                              </ul>
                         </div>
                    </div>



               </div>
          </div>
     </section>




     <!-- TESTIMONIAL -->
     <section id="tags">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Rozdelenie úloh <small></small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/man_icon.png" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>ADAM</h4>
                                             <span></span>
                                        </div>
                                        <p>1.animácia kyvadla</p>
                                        <p>2.spojazdnenie octave</p>
                                        <p>3.databáza pre api a prevod do pdf</p>
                                        <!-- RATING
                                        <div class="tst-rating">
                                              <i class="fa fa-star"></i>
                                         </div>-->
                                    </div>
                               </div>

                               <div class="col-md-4 col-sm-4">
                                    <div class="item">
                                         <div class="tst-image">
                                              <img src="images/man_icon.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="tst-author">
                                              <h4>Peťo</h4>
                                              <span></span>
                                         </div>
                                         <p>1.1.animácia Guľičky</p>
                                         <p>2.spojazdnenie octave</p>
                                         <p>3.vytvorenie api na výpočty</p>

                                    </div>
                               </div>

                               <div class="col-md-4 col-sm-4">
                                    <div class="item">
                                         <div class="tst-image">
                                              <img src="images/man_icon.png" class="img-responsive" alt="">
                                         </div>
                                         <div class="tst-author">
                                              <h4>Martin</h4>
                                              <span></span>
                                         </div>
                                         <p>1.1.animácia tlmiča</p>
                                         <p>2.popis api</p>
                                         <p>3.štatistika návštevnosti</p>

                                     </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                     <div class="item">
                                          <div class="tst-image">
                                               <img src="images/woman_icon.jpg" class="img-responsive" alt="">
                                          </div>
                                          <div class="tst-author">
                                               <h4>Miška</h4>
                                               <span></span>
                                          </div>
                                          <p>1.1.animácia Klapky</p>
                                          <p>2.dizajn</p>
                                          <p>3.odosielanie mailu</p>

                                     </div>
                                </div>

                           </div>

                 </div>
            </div>
       </section>




     <!-- FOOTER -->
     <footer id="footer">
         <div class="container">
             <div class="row">

                 <div class="col-md-4 col-sm-6">
                     <div class="footer-info">
                         <div class="section-title">
                             <h2>FINÁLNE ZADANIE WEBTECH2</h2>
                         </div>
                         <address>
                             <p>Slovenská technická univerzita, BA<br>
                                 Fakulta elektrotechniky a informatiky<br>
                                 Webové technológie 2
                             </p>
                         </address>



                         <div class="copyright-text">
                             <p>Copyright &copy; 2020 eMAMP</p>

                             <p>Design: eMAMP</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4 col-sm-12">
                     <div class="footer-info newsletter-form">
                         <div class="section-title">
                             <h2>Popis API</h2>
                         </div>
                         <div>

                             <p>V našej API máme využitú službu na vyhodnocovanie rôznych matematických úkonov.
                                 Túto funkcionalitu využívame prostredníctvom softvéru Octave, ktorý máme nainštalovaný na našom serveri.</p>
                             <p>Samotné príkazy sa zadávajú do textového poľa. API dokáže vyhodnotiť aj viacero príkazov súčasne.
                                 Keďže si API nepamätá predošlé premenné, je potrebné všetky príkazy zadať spolu do jedného textového poľa.
                                 Príkazy, ktoré nie su ukončené bodkočiarkou sa po odoslaní ihneď vyhodnotia a vypíšu na obrazovku.</p>
                             <p> Vyhodnocované príkazy sa po odoslaní automaticky posielajú do databázy, kde sú uložené na spracovanie.
                                 Posielanie údajov prebieha cez HTTP protokol. Využívajú sa metódy ako GET a POST, ktoré sú súčsasťou HTTP modelu.
                                 Odoslané informácie, ktoré sú uložené v databáze sa dajú exportovať do PDF.</p>

                             <div class="form-group">
                                 <form action="export.php" method="post" target="_blank">

                                     <input type="submit" class="form-control" name="submit" id="form-submit" value="Export do PDF">
                                 </form>

                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4 col-sm-12">
                     <div class="footer-info newsletter-form">
                         <div class="section-title">
                             <h2>Vykonavanie prikazov</h2>
                         </div>
                         <div>
                             <div class="form-group">
                                     <form action="#footer" method="post">
                                         <label>Additional Comments:</label><br>
                                         <textarea cols="25" rows="3" name="test" id="test"></textarea><br>
                                         <input type="submit" class="form-control" id="form-submit" name="button" value="Submit"/>
                                         <?php include "test2.php" ?>
                                     </form>
                                 <form action="exportApi.php" method="post" target="_blank">

                                     <input type="submit" class="form-control" name="submit" id="form-submit" value="Export do PDF">
                                 </form>


                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

</body>
</html>