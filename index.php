<?php
session_start();
if(!isset($_SESSION['pullset'])){
  echo "<script>window.location.href=('pullset.php')</script>"; 
}else{
?>
<!doctype html>
<html lang="en">
<head>
  <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab">
  <link rel="stylesheet" type="text/css" href="grid.css">
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/logo.jpg" type="image/vnd.microsoft.icon" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="canonical" href="http://134.209.79.57" />
<link rel="shortlink" href="http://134.209.79.57" />
<meta property="og:site_name" content="134.209.79.57" />
<meta property="og:type" content="website" />
<meta property="og:url" content="134.209.79.57" />
<meta property="og:title" content="134.209.79.57" />
<meta property="og:description" content="Just Using PHP" />
  <title>PHP | JAVASCRIPT</title>
<link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" media="all" />
<style type="text/css" media="all">
<?php include("sites/all/libraries/bootstrap/css/bootstrap.min.css");?>
</style>
<link rel="stylesheet" type="text/css" href="sites/all/themes/custom/themes/css/main.css">
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body style="background-color: rgb(145,145,145); max-width: 80%; margin-left:10%; line-height: 2em;" >
    <div id="page-wrapper">


 <section class="google_vision"><strong>

<h3 class="heading">VISION SECTION</h3>
<p>
 HI! MEET A PHP IMPLEMENTATION OF GOOGLE VISION
</p>
<img style="width: 80%; margin-top: 5px;" src="images/vision.png" >
 <?php require_once('vision/index.php')?>
   </strong>
 </section>


<section style="background-color: rgb(225,225,225);">

  <h3 class="heading" >THE OTHER SECTION</h3>
      <P style="font-size: 20px; margin-left: 20%; margin-right: 20%; margin-top: 10px;">
          Here are some people you may not know working in diffrent fields of life, the pictures, names, contact and the field of work is displayed. If you wish to contact them.
      </P>

              <div class="indexpainter" style="background-color: rgb(255,255,255);">

                <div class="big" >
                  <img style="width: 50%; height: 224px; border-radius: 10px;margin-bottom: 5px;" src="images/lade.jpg"/>
                    <h4 style="width: 49%; float: left; background-color: rgb(255,255,255); text-align: center; text-transform: uppercase; margin-top: 5%; font-size: 15px;">
                      <strong style="text-decoration: underline;">Demilade Kunle-Kunbi
                      </strong></br>
                      <p>
                      Core Team Member <a href="igaragcars.com"><strong>iGaragecars</strong></a></br>CO-FOUNDER AINS AUTO LIMITED<br>
                      <ul id="put" style="list-style: none;"></ul><button id="demi">CONTACT</button>
                      </p>
                    </h4>
                </div>

                <div class="big" >
                  <img style="width: 50%; height: 224px; border-radius: 10px; margin-bottom: 5px;" src="images/khaulat.jpg"/>
                    <h4 style="width: 49%; float: left; background-color: rgb(255,255,255); text-align: center; text-transform: uppercase; margin-top: 5%; font-size: 15px;">
                      <strong style="text-decoration: underline;">Khaulat Ayomide
                      </strong><br>
                      <p>
                        Ambassador and Founder AI-SATURDAY'S Abeokuta</br>AI-DEVELOPER</br>JOIN TODAY
                        <ul id="khaulatp" style="list-style: none;"></ul><button id="khaulat">CONTACT</button>
                      </p>
                    </h4>
                </div>


               <div class="big" >
                  <img style="width: 50%; height: 224px; border-radius: 10px; margin-bottom: 5px;" src="images/Alfawaz.png"/>
                    <h4 style="width: 49%; float: left; background-color: rgb(255,255,255); text-align: center; text-transform: uppercase; margin-top: 5%; font-size: 15px;">
                      <strong style="text-decoration: underline;">Alfawaaz
                      </strong>
                      <p>
                        SOFTWARE DEVELOPER<br>MATHS TUTOR<br>
                        <ul id="Alfawaazp" style="list-style: none;"></ul><button id="Alfawaaz">CONTACT</button>
                      </p>
                    </h4>
               </div> 

               <div class="big" >
                  <img style="width: 50%; height: 224px; border-radius: 10px; margin-bottom: 5px;" src="images/osijoadedeji.jpg" alt="ADEDEJI'S PICTURE" />
                    <h4 style="width: 49%; float: right; background-color: rgb(255,255,255); text-align: center; text-transform: uppercase; margin-top: 5%; font-size: 15px;">
                      <strong style="text-decoration: underline;">OSIJO ADEDEJI</br>[SMURF GRUMPY]
                      </strong>
                      <p>
                        ON AIR PERSONALITY</br>CONTENT CREATOR</br>SOCIAL MEDIAL ENTHUSIAST<br>VJ</br>PODCAST HOST. Click <a href="https://soundcloud.com/uncklesmurf/a-series-of-clumsy-events-ep01"><strong>HERE</strong></a> TO LISTEN
                         <ul id="dejip" style="list-style: none;"></ul><button id="deji">CONTACT</button>
                      </p>
                    </h4>
               </div> 


               <div class="big" >
                  <img style="width: 50%; height: 224px; border-radius: 10px; margin-bottom: 5px;" src="images/tifefabunmi.jpg" alt="TIFE'S PICTURE" />
                    <h4 style="width: 49%; float: right; background-color: rgb(255,255,255); text-align: center; text-transform: uppercase; margin-top: 5%; font-size: 15px;">
                      <strong style="text-decoration: underline;">TIFE FABUNMI
                      </strong>
                      <p>
                        CONTENT CREATOR<br>SOCIAL MEDIA MANAGER<br>SOCIAL MEDIA STRATEGIST</br>PR
                        <ul id="tifep" style="list-style: none;"></ul><button id="tife">CONTACT</button>
                      </p>
                    </h4>
               </div>


               <?php
include('jam.php');
               ?>

              </div>

                                <h2 style="font-size: 25px; margin-left: 20%; margin-right: 20%; text-transform: uppercase; text-decoration: underline; text-align: center;">
                                    Other Things You May Be Interested In.
                                </h2>

                                        <p style="text-align: center; text-transform: uppercase; font-size: 20px; text-decoration: bold; margin-left: 20%; margin-right: 20%;">
                                         Are you bored?</br>
                                          Do you need a little blood rush</br>
                                          Visit <a style="text-decoration: none; color: rgb(255,0,0);" href="https://www.theannoyingwebsite.com">The Annoying Website</a>.</br>
                                          You could also take your time to learn things like
                                        </p>

                                                            <div class="indexpainter" style="background-color: rgb(255,255,255);">
                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)), url(images/134.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 15px; height: 220px;">
                                                                      <a href="https://lifehacker.com/the-science-of-the-perfect-nap-5950732" style="text-decoration: none;">
                                                                      <h2 style="margin-left: 20%; margin-right: 20%; text-transform: uppercase; color: rgb(255,255,255);">
                                                                       HOW TO TAKE A NAP WHEN YOU ARE BORED
                                                                      </h2>
                                                                      </a>
                                                                    </div>


                                                                    <div class="small" style=" background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)), url(images/novels.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                      <a href="https://readfreenovelsonline.com" style="text-decoration: none;">
                                                                        <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>BOOKS
                                                                          </strong>
                                                                       </h2>
                                                                       <p style="margin-left: 20%; margin-right: 20%; color: rgb(255,255,255);">
                                                                        <strong>
                                                                          READ A NOVEL</br>[SIMILAR TO TAKE A NAP]
                                                                        </strong>
                                                                       </p>
                                                                      </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/manga1.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.lezhin.com/en" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>WEBTOONS
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color: rgb(255,255,255);"><strong>
                                                                        LEZHIN COMICS[ERR PARENTAL GUIDIANCE]
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/youtube.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.youtube.com/results?search_query=ui+ux+design+tutorials" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>SOFTWARE
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color: rgb(255,255,255);"><strong>
                                                                        UI, UX DESIGNS
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/youtube.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.youtube.com/results?search_query=web+development" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>SOFTWARE
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color: rgb(255,255,255);"><strong>
                                                                        LEARN WEB DEVELOPMENT
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/youtube.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.youtube.com/results?search_query=mobile+development+for+beginners" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>SOFTWARE
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color: rgb(255,255,255);"><strong>
                                                                        MOBILE APPLICATIONS
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/youtube.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.youtube.com/results?search_query=artificial+neural+network+for+beginners" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>TECH 
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color: rgb(255,255,255);"><strong>
                                                                        A.I AND ANN
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/techknw.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.theverge.com/tech" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>TECH KNOW
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        WHATS NEW?
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>




                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/cac.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://services.cac.gov.ng" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>C.A.C
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        REGISTER YOUR BUSINESS NAME OR COMPANY
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/tfpdl.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.tfp.is/recent/" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>MOVIES
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        TV-SERIES
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>




                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/netflix.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.netflix.com" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>MOVIES
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        NETFLIX AND CHILL
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>


                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/iflix.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://services.cac.gov.ng" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>MOVIES
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        INTRODUCING IFLIX AND CHILL
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>


                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/viki.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                    <a href="https://www.viki.com" style="text-decoration: none;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>MOVIES
                                                                          </strong>
                                                                      </h2>
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        K-DRAMA SERIES
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>



                                                                    <div class="small" style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),url(images/anime.png); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 10px; margin: 5px; font-size: 20px; height: 220px;">
                                                                      <h2 style="border-radius: 10px; text-align: center; color: rgb(255,255,255);">
                                                                          <strong>ANIME
                                                                          </strong>
                                                                      </h2>
                                                                      <a href="https://kissanime.ru/" style="text-decoration: none;">
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        KISSANIME
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    <a href="https://www.gogoanime1.com/" style="text-decoration: none;">
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        GOGOANIME
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    <a href="https://www.soul-anime.us" style="text-decoration: none;">
                                                                      <p style="margin-left: 20%; margin-right: 20%; color:rgb(255,255,255); ;"><strong>
                                                                        SOULANIME
                                                                        </strong>
                                                                      </p>
                                                                    </a>
                                                                    </div>
                                                            </div>
</section>        
  

<div id="footer">
           
<div class="panel-display mccoppin clearfix radix-mccoppin" id="mini-panel-footer">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 radix-layouts-column1 panel-panel">
        <div class="panel-panel-inner">
          <div class="panel-pane pane-fieldable-panels-pane pane-fpid-1 pane-bundle-tekst" >
  
      
  
  <div class="pane-content">
    <div class="fieldable-panels-pane">
    <h2></h2>
<div class="field field-name-field-tekst field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even"><p> <B style='color: green;'>DO YOU WANT TO BECOME A FACEBOOK, INSTAGRAM AND GOOGLE ADS EXPERT?</B></br>
<B style='color: green;'>DO YOU WANT TO GET A CONSUMERS PERSPECTIVE OF YOUR WEBSITE?</B></br>
<B style='color: green;'>ARE YOU INTERESTED IN DESIGNING A WEBSITE?</B></p>

<p style='color: green;'><b>WOULD YOU WOULD LIKE YOUR DETAILS ADDED TO THE CANVAS ABOVE?</br> SEND AN EMAIL TO THE EMAIL.</b></p>
<p>
<b style="color: rgb(255,0,0);">Email us:</b> <a href="mailto:assistantmail02@gmail.com" style='color: green;'><b>assistantmail02@gmail.com</b></a></p>

<p style="color: rgb(255,0,0);"><b> IF THERE ARE ERRORS YOU WOULD LIKE TO BE CORRECTED,</br> PLEASE SEND A MAIL TO THE EMAIL GIVEN,</br> OUR DEAREST APOLOGIES FOR ANY INCONVINIENCE</br> YOU MAY HAVE EXPERIENCED.</b> </p>

</br>

</div></div></div></div>
  </div>

  
  </div>
        </div>
      </div>
      <div class="col-md-4 radix-layouts-column2 panel-panel">
        <div class="panel-panel-inner">
          <div class="panel-pane pane-fieldable-panels-pane pane-current-2 pane-bundle-tekst" >
  <div class="pane-content">
    <div class="fieldable-panels-pane">
    <h2></h2>
<div class="field field-name-field-tekst field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even"><p> <B style='color: rgb(255,0,0);'>AINS AUTO IS CURRENTLY RUNNING A CROWD FUNDING CAMPAIGN</br> FOR TWO OF ITS BUSINES IDEAS.</br> SHOW YOUR SUPPORT BY SPREADING THE WORD AND GIVING A TOKEN.</br> THE LINKS ARE </br> IGARAGECARS <a href="#" style="color: rgb(0,0,145);">CLICK HERE</a></br>OFF GRID AFRICA <a href="https://www.indiegogo.com/projects/off-grid-power-africa#/" style="color: rgb(0,0,145);">CLICK HERE</a></B></br></p><p style='color: green;'><strong>
If you are a developer seeking a good hosting platform i would recommend digital ocean.</br> register with this <a href="https://m.do.co/c/b451b192cb68" style="color: rgb(255,0,0);">link</a> and get $100 for 60 days</strong></p>
</div></div></div></div>
  </div>

  
  </div>
        </div>
      </div>
      <div class="col-md-4 radix-layouts-column2 panel-panel">
        <div class="panel-panel-inner">
          <div class="panel-pane pane-fieldable-panels-pane pane-current-2 pane-bundle-tekst" >
  <div class="pane-content">
    <div class="fieldable-panels-pane">
    <h2></h2>
<div class="field field-name-field-tekst field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even"><p> <B style='color: rgb(0,135,0);'>LEARN HOW TO DEPLOY YOUR WEB APPS</br>DEPLOY YOUR WEBAPPS WITHOUT STRESS FOR A TOKEN FEE.</br>I CAN ALSO CARRY OUT API INTEGRATION AND OPTIMIZATION WITH YOUR WEB APPS</br> 
PLEASE REMEMBER TO SUPPORT AINS AUTO THE LINKS ARE </br> IGARAGECARS <a href="#" style="color: rgb(255,0,0);">CLICK HERE</a></br>OFF GRID AFRICA <a href="https://www.indiegogo.com/projects/off-grid-power-africa#/" style="color: rgb(255,0,0);">CLICK HERE</a></B></br></p>
</div></div></div></div>
  </div>

  
  </div>
        </div>
      </div>
  
      

  

  
  </div>
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /.mccoppin -->
  
</div><!-- /#footer -->


</div><!-- /#page-wrapper -->


<script src="script/jquery.min.js" type="text/javascript"></script>
<script src="script/myscript.js" type="text/javascript"></script>

  </body>
</html>
<?php
}
?>




