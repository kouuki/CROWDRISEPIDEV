<?php

/* PIDEVCrowdRiseBundle::layout.html.twig */
class __TwigTemplate_8035fb75e0da7f6629afe9c73bbe2ef825123ec99178e669cef553c9657c1cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'NotificationNumber' => array($this, 'block_NotificationNumber'),
            'formulaire' => array($this, 'block_formulaire'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--
        Template:\t Unika - Responsive One Page HTML5 Template
        Author:\t\t imransdesign.com
        URL:\t\t http://imransdesign.com/
    Designed By: https://www.behance.net/poljakova
        Version:\t1.0\t
-->
<html lang=\"en-US\">
    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>CrowdRise</title>
        <meta name=\"description\" content=\"CrowdRise\">
        <meta name=\"keywords\" content=\"HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio\" />
        <meta name=\"author\" content=\"imransdesign.com\">

        <!-- Mobile Metas -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Google Fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

        <!-- Libs and Plugins CSS -->
        <link rel=\"stylesheet\" href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/animations/css/animate.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "> <!-- Font Icons -->
        <link rel=\"stylesheet\" href=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/owl-carousel/css/owl.carousel.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/owl-carousel/css/owl.theme.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/css/rating.css"), "html", null, true);
        echo "\" />

        <!-- Theme CSS -->
        <link rel=\"stylesheet\" href=";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mobile.css"), "html", null, true);
        echo ">


        <!-- Skin CSS -->
        <link rel=\"stylesheet\" href=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/cool-gray.css"), "html", null, true);
        echo ">
<!-- <link rel=\"stylesheet\" href=";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/ice-blue.css"), "html", null, true);
        echo "> -->
<!-- <link rel=\"stylesheet\" href=";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/summer-orange.css"), "html", null, true);
        echo "> -->
<!-- <link rel=\"stylesheet\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/fresh-lime.css"), "html", null, true);
        echo "> -->
<!-- <link rel=\"stylesheet\" href=";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/night-purple.css"), "html", null, true);
        echo "> -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

        ";
        // line 56
        echo "        <script type=\"text/javascript\" src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Notification/js/jquery.min.js"), "html", null, true);
        echo "></script>
        ";
        // line 58
        echo "
        ";
        // line 60
        echo "        <script type=\"text/javascript\" src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Notification/NotificationAffichage.js"), "html", null, true);
        echo "></script>
        <link rel=\"stylesheet\" href=";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Notification/NotificationStyle.css"), "html", null, true);
        echo ">
        ";
        // line 63
        echo "  <script>
        \$(function(){
        \$('input').on('change',function(){
          alert(\"Changed: \" + \$(this).val())
        });
      });
    </script>
    </head>

    <body data-spy=\"scroll\" data-target=\"#main-navbar\">
        <div class=\"page-loader\"></div>  <!-- Display loading image while page loads -->
        <div class=\"body\">

            <!--========== BEGIN HEADER ==========-->
            <header id=\"header\" class=\"header-main\">

                <!-- Begin Navbar -->
                <nav id=\"main-navbar\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set \"height: 98px;\" to #header -->

                    <div class=\"container\">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand page-scroll\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_accueil");
        echo "\">CrowdRise</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav navbar-right\" id=\"nav\">
                                <li><a class=\"page-scroll\" href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_accueil");
        echo "\">Acceuil</a></li>
                               
                                    ";
        // line 101
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 102
            echo "                                    
                                   
                                    
                                    ";
            // line 105
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "granted", array(0 => "ROLE_SOLVER"), "method")) {
                // line 106
                echo "                                    <li><a  href=\"\">Crédit</a></li>
                                    ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 107
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "granted", array(0 => "ROLE_SUBMITTER"), "method")) {
                // line 108
                echo "                                         <li><a class=\"page-scroll\" href=\"";
                echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_AjouterProjet");
                echo "\">Lancer Un Projet</a></li>
                                         <li><a class=\"page-scroll\" href=\"";
                // line 109
                echo $this->env->getExtension('routing')->getPath("ajouter_problem");
                echo "\">Demande d'un Service</a></li>
                                    ";
            }
            // line 111
            echo "                                     <li><a class=\"page-scroll\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_profil_afficher", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">hi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                      <li id=\"notification_li\">
                                    <span id=\"notification_count\">
                                        ";
            // line 114
            $this->displayBlock('NotificationNumber', $context, $blocks);
            // line 117
            echo "                                    </span>
                                    <a href=\"";
            // line 118
            echo $this->env->getExtension('routing')->getPath("notification_user", array("id" => "Ketata"));
            echo "\" id=\"notificationLink\">Notifications</a>
                                    <div id=\"notificationContainer\">
                                        <div id=\"notificationTitle\">Notifications</div>
                                        <div id=\"notificationsBody\" class=\"notifications\">
                                            ";
            // line 124
            echo "                                            <ul>
                                                ";
            // line 130
            echo "                                            </ul>
                                        </div>
                                        <div id=\"notificationFooter\"><a href=\"#\">See All</a></div>
                                    </div>

                                </li>
                                    <li><a  href=\"";
            // line 136
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion </a></li>
                                    ";
        } else {
            // line 138
            echo "                                    <li><a class=\"page-scroll\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter </a></li>
                                    <li><a class=\"page-scroll\" href=\"";
            // line 139
            echo $this->env->getExtension('routing')->getPath("pidev_mail_sendmail");
            echo "\">Contact us</a></li>
                                    ";
        }
        // line 141
        echo "                               
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->
                <div class=\"modal scroll-fix fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
                    <div class=\"modal-dialog  modal-sm\">
                        <div class=\"modal-content\">



                            <div class=\"panel-footer col-sm-12 col-md-12 \">

                            </div>
                            <div>
                                ";
        // line 157
        $this->displayBlock('formulaire', $context, $blocks);
        // line 159
        echo "                            </div>
                            <div class=\"panel-footer text-center col-sm-12 col-md-12\">

                                ";
        // line 163
        echo "                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </header>
            <!-- ========= END HEADER =========-->
            ";
        // line 172
        $this->displayBlock('content', $context, $blocks);
        // line 174
        echo "            <!-- Begin footer -->
            <!--Utilisable -->
            <!-- Begin contact section -->
            <section id=\"contact-section\" class=\"page text-white parallax\" data-stellar-background-ratio=\"0.5\" 
                     style=\"background-image: url(";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/map-bg.jpg"), "html", null, true);
        echo ");\">

                <div class=\"cover\"></div>

                <!-- Begin page header-->
                <div class=\"page-header-wrapper\">
                    <br>
                    <br>
                    <br>
                    <div class=\"container\">
                        <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                            <h2>Contactez-nous</h2>
                            <div class=\"devider\"></div>
                            <p class=\"subtitle\">A l'écoute de vos réclamations</p><br><br><br><br>
                            ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 193
            echo "
                                <div class=\"alert alert-success  fade in\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                    ";
            // line 196
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                        </div>

                    </div>
                </div>  

                <!-- End page header-->

                <div class=\"contact wow bounceInRight\" data-wow-delay=\"0.4s\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-sm-6\">
                                <div class=\"contact-info\">
                                    <br><h4>Notre Adresse</h4>
                                    <ul class=\"contact-address\">
                                        <li><i class=\"fa fa-map-marker fa-lg\"></i>&nbsp;
                                            Z.I. Chotrana II - B.P. 160  ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            2083 Pôle Technologique - Cité El Ghazala ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ariana, Tunisie, 2080</li>

                                        <li><i class=\"fa fa-phone\"></i>&nbsp; 00-216-70-685-685 </li>
                                        <li><i class=\"fa fa-print\"></i>&nbsp; 00-216-70-685-685</li>
                                        <li><i class=\"fa fa-envelope\"></i>  <a href=\"mailto:CrowdRise1516@gmail.com\">CrowdRise1516@gmail.com</a></li>
                                        <li><i class=\"fa fa-skype\"></i> Crowd-Rise</li>
                                    </ul>

                                </div>

                                ";
        // line 228
        echo "                                <script src=\"http://maps.googleapis.com/maps/api/js\"></script>

                                <script>
                                    var myCenter = new google.maps.LatLng(36.8984821, 10.189761900000008);

                                    function initialize()
                                    {
                                        var mapProperties = {
                                            center: myCenter,
                                            zoom: 10,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                        };

                                        var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProperties);

                                    ";
        // line 244
        echo "                                            var marker = new google.maps.Marker({
                                                position: myCenter,
                                                animation: google.maps.Animation.BOUNCE,";
        // line 247
        echo "                                                title: 'Click to zoom'
                                            });

                                            marker.setMap(map);

                                    ";
        // line 253
        echo "                                            var infoFenetre = new google.maps.InfoWindow({
                                                content: 'Welcome To ESPRIT!'
                                            });

                                            infoFenetre.open(map, marker);

                                    ";
        // line 260
        echo "                                            google.maps.event.addListener(marker, 'click', function () {
                                                map.setZoom(16);
                                                map.setCenter(marker.getPosition());
                                            });

                                        }
                                        google.maps.event.addDomListener(window, 'load', initialize);

                                </script>   
                                <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div id=\"googleMap\" style=\"width:530px;height:240px;\"></div>

                            </div>

                            <div class=\"col-sm-6\">
                                <div class=\"contact-form\">
                                    <br> <h4>Contactez-nous</h4> 
                                    <form role=\"form\" action =\"";
        // line 277
        echo $this->env->getExtension('routing')->getPath("pidev_mail_sendmail");
        echo "\" method=\"POST\">
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"nom\" class=\"form-control input-lg\" placeholder=\"Votre Nom\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"prenom\" class=\"form-control input-lg\" placeholder=\"Votre Prénom\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"integer\" name=\"tel\" class=\"form-control input-lg\" placeholder=\"Votre Téléphone\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\"  name=\"email\" class=\"form-control input-lg\" placeholder=\"Votre Adresse Electronique\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" name=\"sujet\" class=\"form-control input-lg\" placeholder=\"Sujet\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <textarea name=\"message\" class=\"form-control input-lg\" rows=\"5\" placeholder=\"Message\" required></textarea>
                                        </div>
                                        <button type=\"submit\" class=\"btn wow bounceInRight\" data-wow-delay=\"0.8s\">Envoyer</button>
                                    </form>
                                </div>\t
                            </div>

                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->


            <a href=\"#\" class=\"scrolltotop\"><i class=\"fa fa-arrow-up\"></i></a> <!-- Scroll to top button -->

        </div><!-- body ends -->




        <!-- Plugins JS -->
        <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-rating-input.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/owl-carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/stellar/js/jquery.stellar.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/animations/js/wow.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/waypoints.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/isotope.pkgd.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery.easing.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/smoothscroll.js"), "html", null, true);
        echo "></script>
        <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\"></script>
        <!-- Theme JS -->
        <script src=";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/theme.js"), "html", null, true);
        echo "></script>


        <script>\$(document).ready(function () {

                                            (function (\$) {

                                                \$('#filter').keyup(function () {

                                                    var rex = new RegExp(\$(this).val(), 'i');
                                                    \$('.searchable tr').hide();
                                                    \$('.searchable tr').filter(function () {
                                                        return rex.test(\$(this).text());
                                                    }).show();

                                                })

                                            }(jQuery));

                                        });</script>

        <script>
            \$(function () { /* to make sure the script runs after page load */

                \$('.item').each(function (event) { /* select all divs with the item class */

                    var max_length = 150; /* set the max content length before a read more link will be added */

                    if (\$(this).html().length > max_length) { /* check for content length */

                        var short_content = \$(this).html().substr(0, max_length); /* split the content in two parts */
                        var long_content = \$(this).html().substr(max_length);

                        \$(this).html(short_content +
                                '<a href=\"#\" class=\"read_more\"><br/>Afficher la suite</a>' +
                                '<span class=\"more_text\" style=\"display:none;\">' + long_content + '</span>'); /* Alter the html to allow the read more functionality */

                        \$(this).find('a.read_more').click(function (event) { /* find the a.read_more element within the new html and bind the following code to it */

                            event.preventDefault(); /* prevent the a from changing the url */
                            \$(this).hide(); /* hide the read more button */
                            \$(this).parents('.item').find('.more_text').show(); /* show the .more_text span */

                        });

                    }

                });
            });
        </script>
  
    </body> 


</html>

";
    }

    // line 114
    public function block_NotificationNumber($context, array $blocks = array())
    {
        // line 115
        echo "                                            0
                                        ";
    }

    // line 157
    public function block_formulaire($context, array $blocks = array())
    {
        // line 158
        echo "                                ";
    }

    // line 172
    public function block_content($context, array $blocks = array())
    {
        // line 173
        echo "            ";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 173,  589 => 172,  585 => 158,  582 => 157,  577 => 115,  574 => 114,  513 => 330,  508 => 328,  504 => 327,  500 => 326,  496 => 325,  492 => 324,  488 => 323,  484 => 322,  480 => 321,  476 => 320,  472 => 319,  468 => 318,  464 => 317,  460 => 316,  418 => 277,  399 => 260,  391 => 253,  384 => 247,  380 => 244,  363 => 228,  334 => 200,  324 => 196,  319 => 193,  315 => 192,  298 => 178,  292 => 174,  290 => 172,  279 => 163,  274 => 159,  272 => 157,  254 => 141,  249 => 139,  244 => 138,  239 => 136,  231 => 130,  228 => 124,  221 => 118,  218 => 117,  216 => 114,  207 => 111,  202 => 109,  197 => 108,  195 => 107,  192 => 106,  190 => 105,  185 => 102,  183 => 101,  178 => 99,  168 => 92,  137 => 63,  133 => 61,  128 => 60,  125 => 58,  120 => 56,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  84 => 37,  80 => 36,  76 => 35,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  54 => 28,  50 => 27,  22 => 1,);
    }
}
/* <!doctype html>*/
/* <!--*/
/*         Template:	 Unika - Responsive One Page HTML5 Template*/
/*         Author:		 imransdesign.com*/
/*         URL:		 http://imransdesign.com/*/
/*     Designed By: https://www.behance.net/poljakova*/
/*         Version:	1.0	*/
/* -->*/
/* <html lang="en-US">*/
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <title>CrowdRise</title>*/
/*         <meta name="description" content="CrowdRise">*/
/*         <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />*/
/*         <meta name="author" content="imransdesign.com">*/
/* */
/*         <!-- Mobile Metas -->*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <!-- Google Fonts  -->*/
/*         <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->*/
/*         <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->*/
/* */
/*         <!-- Libs and Plugins CSS -->*/
/*         <link rel="stylesheet" href={{ asset('inc/bootstrap/css/bootstrap.min.css') }}>*/
/*         <link rel="stylesheet" href={{ asset('inc/animations/css/animate.min.css') }}>*/
/*         <link rel="stylesheet" href={{ asset('inc/font-awesome/css/font-awesome.min.css') }}> <!-- Font Icons -->*/
/*         <link rel="stylesheet" href={{ asset('inc/owl-carousel/css/owl.carousel.css') }}>*/
/*         <link rel="stylesheet" href={{ asset('inc/owl-carousel/css/owl.theme.css') }}>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/dcsrating/css/rating.css') }}" />*/
/* */
/*         <!-- Theme CSS -->*/
/*         <link rel="stylesheet" href={{ asset('css/reset.css') }}>*/
/*         <link rel="stylesheet" href={{ asset('css/style.css') }}>*/
/*         <link rel="stylesheet" href={{ asset('css/mobile.css') }}>*/
/* */
/* */
/*         <!-- Skin CSS -->*/
/*         <link rel="stylesheet" href={{ asset('css/skin/cool-gray.css') }}>*/
/* <!-- <link rel="stylesheet" href={{ asset('css/skin/ice-blue.css') }}> -->*/
/* <!-- <link rel="stylesheet" href={{ asset('css/skin/summer-orange.css') }}> -->*/
/* <!-- <link rel="stylesheet" href={{ asset('css/skin/fresh-lime.css') }}> -->*/
/* <!-- <link rel="stylesheet" href={{ asset('css/skin/night-purple.css') }}> -->*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* */
/*         <!--[if lt IE 9]>*/
/*                 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*                 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         {#link du notification#}*/
/*         <script type="text/javascript" src={{ asset('Notification/js/jquery.min.js') }}></script>*/
/*         {# /link du notification#}*/
/* */
/*         {# Notifications List Script#}*/
/*         <script type="text/javascript" src={{ asset('Notification/NotificationAffichage.js') }}></script>*/
/*         <link rel="stylesheet" href={{ asset('Notification/NotificationStyle.css') }}>*/
/*         {#/Notification Liste#}*/
/*   <script>*/
/*         $(function(){*/
/*         $('input').on('change',function(){*/
/*           alert("Changed: " + $(this).val())*/
/*         });*/
/*       });*/
/*     </script>*/
/*     </head>*/
/* */
/*     <body data-spy="scroll" data-target="#main-navbar">*/
/*         <div class="page-loader"></div>  <!-- Display loading image while page loads -->*/
/*         <div class="body">*/
/* */
/*             <!--========== BEGIN HEADER ==========-->*/
/*             <header id="header" class="header-main">*/
/* */
/*                 <!-- Begin Navbar -->*/
/*                 <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->*/
/* */
/*                     <div class="container">*/
/* */
/*                         <!-- Brand and toggle get grouped for better mobile display -->*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <a class="navbar-brand page-scroll" href="{{ path('pidev_crowd_rise_accueil') }}">CrowdRise</a>*/
/*                         </div>*/
/* */
/*                         <!-- Collect the nav links, forms, and other content for toggling -->*/
/* */
/*                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                             <ul class="nav navbar-nav navbar-right" id="nav">*/
/*                                 <li><a class="page-scroll" href="{{ path('pidev_crowd_rise_accueil') }}">Acceuil</a></li>*/
/*                                */
/*                                     {% if (app.user) %}*/
/*                                     */
/*                                    */
/*                                     */
/*                                     {% if  (app.user.granted("ROLE_SOLVER")) %}*/
/*                                     <li><a  href="">Crédit</a></li>*/
/*                                     {% elseif (app.user.granted("ROLE_SUBMITTER")) %}*/
/*                                          <li><a class="page-scroll" href="{{ path('pidev_crowd_rise_AjouterProjet') }}">Lancer Un Projet</a></li>*/
/*                                          <li><a class="page-scroll" href="{{ path('ajouter_problem') }}">Demande d'un Service</a></li>*/
/*                                     {% endif %}*/
/*                                      <li><a class="page-scroll" href="{{ path('pidev_profil_afficher',{'id':app.user.id}) }}">hi {{ app.user.username }}</a></li>*/
/*                                       <li id="notification_li">*/
/*                                     <span id="notification_count">*/
/*                                         {% block NotificationNumber %}*/
/*                                             0*/
/*                                         {% endblock %}*/
/*                                     </span>*/
/*                                     <a href="{{ path('notification_user',{'id':'Ketata'}) }}" id="notificationLink">Notifications</a>*/
/*                                     <div id="notificationContainer">*/
/*                                         <div id="notificationTitle">Notifications</div>*/
/*                                         <div id="notificationsBody" class="notifications">*/
/*                                             {#{% block NotificationContent %}*/
/*                                             {% endblock %}#}*/
/*                                             <ul>*/
/*                                                 {#{% for Notif in NotificationContent %}*/
/*                                                     <li id="NotificationListe">*/
/*                                                         <h5>{{ Notif.message }}</h5>*/
/*                                                     </li>*/
/*                                                 {% endfor %}#}*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <div id="notificationFooter"><a href="#">See All</a></div>*/
/*                                     </div>*/
/* */
/*                                 </li>*/
/*                                     <li><a  href="{{ path('fos_user_security_logout')}}">Déconnexion </a></li>*/
/*                                     {% else %}*/
/*                                     <li><a class="page-scroll" data-toggle="modal" data-target=".bs-example-modal-sm" href="{{ path('fos_user_security_login')}}">Se connecter </a></li>*/
/*                                     <li><a class="page-scroll" href="{{ path('pidev_mail_sendmail')}}">Contact us</a></li>*/
/*                                     {% endif %}*/
/*                                */
/*                             </ul>*/
/*                         </div><!-- /.navbar-collapse -->*/
/*                     </div><!-- /.container -->*/
/*                 </nav>*/
/*                 <!-- End Navbar -->*/
/*                 <div class="modal scroll-fix fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*                     <div class="modal-dialog  modal-sm">*/
/*                         <div class="modal-content">*/
/* */
/* */
/* */
/*                             <div class="panel-footer col-sm-12 col-md-12 ">*/
/* */
/*                             </div>*/
/*                             <div>*/
/*                                 {% block formulaire %}*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                             <div class="panel-footer text-center col-sm-12 col-md-12">*/
/* */
/*                                 {#<li> <a class="col-sm-6 col-md-12 btn btn-link" href="fos_user_registration_register">S'inscrire</a></li>#}*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             <!-- ========= END HEADER =========-->*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*             <!-- Begin footer -->*/
/*             <!--Utilisable -->*/
/*             <!-- Begin contact section -->*/
/*             <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" */
/*                      style="background-image: url({{ asset('img/map-bg.jpg') }});">*/
/* */
/*                 <div class="cover"></div>*/
/* */
/*                 <!-- Begin page header-->*/
/*                 <div class="page-header-wrapper">*/
/*                     <br>*/
/*                     <br>*/
/*                     <br>*/
/*                     <div class="container">*/
/*                         <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                             <h2>Contactez-nous</h2>*/
/*                             <div class="devider"></div>*/
/*                             <p class="subtitle">A l'écoute de vos réclamations</p><br><br><br><br>*/
/*                             {% for flashMessage in app.session.flashbag.get('notice') %}*/
/* */
/*                                 <div class="alert alert-success  fade in">*/
/*                                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>*/
/*                                     {{ flashMessage }}*/
/*                                 </div>*/
/* */
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>  */
/* */
/*                 <!-- End page header-->*/
/* */
/*                 <div class="contact wow bounceInRight" data-wow-delay="0.4s">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/* */
/*                             <div class="col-sm-6">*/
/*                                 <div class="contact-info">*/
/*                                     <br><h4>Notre Adresse</h4>*/
/*                                     <ul class="contact-address">*/
/*                                         <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;*/
/*                                             Z.I. Chotrana II - B.P. 160  ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                                             2083 Pôle Technologique - Cité El Ghazala ,<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ariana, Tunisie, 2080</li>*/
/* */
/*                                         <li><i class="fa fa-phone"></i>&nbsp; 00-216-70-685-685 </li>*/
/*                                         <li><i class="fa fa-print"></i>&nbsp; 00-216-70-685-685</li>*/
/*                                         <li><i class="fa fa-envelope"></i>  <a href="mailto:CrowdRise1516@gmail.com">CrowdRise1516@gmail.com</a></li>*/
/*                                         <li><i class="fa fa-skype"></i> Crowd-Rise</li>*/
/*                                     </ul>*/
/* */
/*                                 </div>*/
/* */
/*                                 {# ***********importation de l'API Map : bibliothèque JAVASCRIPT********* #}*/
/*                                 <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/* */
/*                                 <script>*/
/*                                     var myCenter = new google.maps.LatLng(36.8984821, 10.189761900000008);*/
/* */
/*                                     function initialize()*/
/*                                     {*/
/*                                         var mapProperties = {*/
/*                                             center: myCenter,*/
/*                                             zoom: 10,*/
/*                                             mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                                         };*/
/* */
/*                                         var map = new google.maps.Map(document.getElementById("googleMap"), mapProperties);*/
/* */
/*                                     {#ajout du Marker #}*/
/*                                             var marker = new google.maps.Marker({*/
/*                                                 position: myCenter,*/
/*                                                 animation: google.maps.Animation.BOUNCE,{#animation du Marker#}*/
/*                                                 title: 'Click to zoom'*/
/*                                             });*/
/* */
/*                                             marker.setMap(map);*/
/* */
/*                                     {#fenetre dinfo#}*/
/*                                             var infoFenetre = new google.maps.InfoWindow({*/
/*                                                 content: 'Welcome To ESPRIT!'*/
/*                                             });*/
/* */
/*                                             infoFenetre.open(map, marker);*/
/* */
/*                                     {#Zoummer lors du clique sur le marker#}*/
/*                                             google.maps.event.addListener(marker, 'click', function () {*/
/*                                                 map.setZoom(16);*/
/*                                                 map.setCenter(marker.getPosition());*/
/*                                             });*/
/* */
/*                                         }*/
/*                                         google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*                                 </script>   */
/*                                 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                                 <div id="googleMap" style="width:530px;height:240px;"></div>*/
/* */
/*                             </div>*/
/* */
/*                             <div class="col-sm-6">*/
/*                                 <div class="contact-form">*/
/*                                     <br> <h4>Contactez-nous</h4> */
/*                                     <form role="form" action ="{{path('pidev_mail_sendmail')}}" method="POST">*/
/*                                         <div class="form-group">*/
/*                                             <input type="text" name="nom" class="form-control input-lg" placeholder="Votre Nom" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <input type="text" name="prenom" class="form-control input-lg" placeholder="Votre Prénom" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <input type="integer" name="tel" class="form-control input-lg" placeholder="Votre Téléphone" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <input type="email"  name="email" class="form-control input-lg" placeholder="Votre Adresse Electronique" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <input type="text" name="sujet" class="form-control input-lg" placeholder="Sujet" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <textarea name="message" class="form-control input-lg" rows="5" placeholder="Message" required></textarea>*/
/*                                         </div>*/
/*                                         <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">Envoyer</button>*/
/*                                     </form>*/
/*                                 </div>	*/
/*                             </div>*/
/* */
/*                         </div> <!-- /.row -->*/
/*                     </div> <!-- /.container -->*/
/*                 </div>*/
/*             </section>*/
/*             <!-- End contact section -->*/
/* */
/* */
/*             <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->*/
/* */
/*         </div><!-- body ends -->*/
/* */
/* */
/* */
/* */
/*         <!-- Plugins JS -->*/
/*         <script src="{{ asset('js/bootstrap-rating-input.min.js') }}" type="text/javascript"></script>*/
/*         <script src={{ asset('inc/jquery/jquery-1.11.1.min.js') }}></script>*/
/*         <script src={{ asset('inc/bootstrap/js/bootstrap.min.js') }}></script>*/
/*         <script src={{ asset('inc/owl-carousel/js/owl.carousel.min.js') }}></script>*/
/*         <script src={{ asset('inc/stellar/js/jquery.stellar.min.js') }}></script>*/
/*         <script src={{ asset('inc/animations/js/wow.min.js') }}></script>*/
/*         <script src={{ asset('inc/waypoints.min.js') }}></script>*/
/*         <script src={{ asset('inc/isotope.pkgd.min.js') }}></script>*/
/*         <script src={{ asset('inc/classie.js') }}></script>*/
/*         <script src={{ asset('inc/jquery.easing.min.js') }}></script>*/
/*         <script src={{ asset('inc/jquery.counterup.min.js') }}></script>*/
/*         <script src={{ asset('inc/smoothscroll.js') }}></script>*/
/*         <script src="{{ asset('bundles/dcsrating/js/rating.js') }}"></script>*/
/*         <!-- Theme JS -->*/
/*         <script src={{ asset('js/theme.js') }}></script>*/
/* */
/* */
/*         <script>$(document).ready(function () {*/
/* */
/*                                             (function ($) {*/
/* */
/*                                                 $('#filter').keyup(function () {*/
/* */
/*                                                     var rex = new RegExp($(this).val(), 'i');*/
/*                                                     $('.searchable tr').hide();*/
/*                                                     $('.searchable tr').filter(function () {*/
/*                                                         return rex.test($(this).text());*/
/*                                                     }).show();*/
/* */
/*                                                 })*/
/* */
/*                                             }(jQuery));*/
/* */
/*                                         });</script>*/
/* */
/*         <script>*/
/*             $(function () { /* to make sure the script runs after page load *//* */
/* */
/*                 $('.item').each(function (event) { /* select all divs with the item class *//* */
/* */
/*                     var max_length = 150; /* set the max content length before a read more link will be added *//* */
/* */
/*                     if ($(this).html().length > max_length) { /* check for content length *//* */
/* */
/*                         var short_content = $(this).html().substr(0, max_length); /* split the content in two parts *//* */
/*                         var long_content = $(this).html().substr(max_length);*/
/* */
/*                         $(this).html(short_content +*/
/*                                 '<a href="#" class="read_more"><br/>Afficher la suite</a>' +*/
/*                                 '<span class="more_text" style="display:none;">' + long_content + '</span>'); /* Alter the html to allow the read more functionality *//* */
/* */
/*                         $(this).find('a.read_more').click(function (event) { /* find the a.read_more element within the new html and bind the following code to it *//* */
/* */
/*                             event.preventDefault(); /* prevent the a from changing the url *//* */
/*                             $(this).hide(); /* hide the read more button *//* */
/*                             $(this).parents('.item').find('.more_text').show(); /* show the .more_text span *//* */
/* */
/*                         });*/
/* */
/*                     }*/
/* */
/*                 });*/
/*             });*/
/*         </script>*/
/*   */
/*     </body> */
/* */
/* */
/* </html>*/
/* */
/* */
