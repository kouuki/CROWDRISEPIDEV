<?php

/* PIDEVCrowdRiseBundle::layout.html.twig */
class __TwigTemplate_8035fb75e0da7f6629afe9c73bbe2ef825123ec99178e669cef553c9657c1cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/cool-gray.css"), "html", null, true);
        echo ">
<!-- <link rel=\"stylesheet\" href=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/ice-blue.css"), "html", null, true);
        echo "> -->
<!-- <link rel=\"stylesheet\" href=";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/summer-orange.css"), "html", null, true);
        echo "> -->
<!-- <link rel=\"stylesheet\" href=";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/fresh-lime.css"), "html", null, true);
        echo "> -->
<!-- <link rel=\"stylesheet\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skin/night-purple.css"), "html", null, true);
        echo "> -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

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
        // line 76
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_accueil");
        echo "\">CrowdRise</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><a class=\"page-scroll\" href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_accueil");
        echo "\">Acceuil</a></li>
                                <li><a class=\"page-scroll\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_projet");
        echo "\">Lancer Un Projet</a></li>
                                    ";
        // line 84
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 85
            echo "                                    <li><a class=\"page-scroll\" href=\"";
            echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_accueil");
            echo "\">hi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                    <li><a  href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion </a></li>
                                      ";
        } else {
            // line 88
            echo "                                      <li><a class=\"page-scroll\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter </a></li>
                                    ";
        }
        // line 90
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
        // line 106
        $this->displayBlock('formulaire', $context, $blocks);
        // line 108
        echo "                                </div>
                                <div class=\"panel-footer text-center col-sm-12 col-md-12\">
                                    
                                        ";
        // line 112
        echo "                                    </ul>
                                </div>
                           \t\t\t\t\t\t\t\t\t\t
                                
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========= END HEADER =========-->
            ";
        // line 121
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "            <!-- Begin footer -->
            <footer class=\"text-off-white\">

                <div class=\"footer-top\">
                    <div class=\"container\">

                        <div class=\"row wow bounceInLeft\" data-wow-delay=\"0.4s\">

                            <div class=\"col-sm-6 col-md-4\">
                                <h4>Useful Links</h4>
                                <ul class=\"imp-links\">
                                    <li><a href=\"\">À Propos</a></li>
                                    <li><a href=\"\">Populaire</a></li>
                                    <li><a href=\"\">Catégorie</a></li>
                                    <li><a href=\"\">Copyright</a></li>
                                    <li><a href=\"\">Advertise</a></li>
                                    <li><a href=\"\">Legal</a></li>
                                </ul>
                            </div>

                            <div class=\"col-sm-6 col-md-4\">
                                <h4>ABONNEZ-VOUS</h4>
                                <div id=\"footer_signup\">
                                    <div id=\"email\">
                                        <form id=\"subscribe\" method=\"POST\">
                                            <input type=\"text\" placeholder=\"Entrez votre e-mail\" name=\"email\" id=\"address\" data-validate=\"validate(required, email)\"/>
                                            <button type=\"submit\">S'inscrire maintenant</button>
                                            <span id=\"result\" class=\"section-description\"></span>
                                        </form> 
                                    </div>
                                </div> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                            </div>

                            <div class=\"col-sm-12 col-md-4\">
                                <h4>Recent Tweets</h4>
                                <div class=\"single-tweet\">
                                    <div class=\"tweet-content\"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident</div>
                                    <div class=\"tweet-date\">1 Hour ago</div>
                                </div>
                                <div class=\"single-tweet\">
                                    <div class=\"tweet-content\"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident uku shumaru</div>
                                    <div class=\"tweet-date\">1 Hour ago</div>
                                </div>
                            </div>

                        </div> <!-- /.row -->

                    </div> <!-- /.container -->
                </div>



            </footer>

            <!-- End footer -->

            <a href=\"#\" class=\"scrolltotop\"><i class=\"fa fa-arrow-up\"></i></a> <!-- Scroll to top button -->

        </div><!-- body ends -->

        


        <!-- Plugins JS -->
        <script src=";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/owl-carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/stellar/js/jquery.stellar.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/animations/js/wow.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/waypoints.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/isotope.pkgd.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery.easing.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/smoothscroll.js"), "html", null, true);
        echo "></script>
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\"></script>
        <!-- Theme JS -->
        <script src=";
        // line 201
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
\$(function(){ /* to make sure the script runs after page load */

\t\$('.item').each(function(event){ /* select all divs with the item class */
\t
\t\tvar max_length = 150; /* set the max content length before a read more link will be added */
\t\t
\t\tif(\$(this).html().length > max_length){ /* check for content length */
\t\t\t
\t\t\tvar short_content \t= \$(this).html().substr(0,max_length); /* split the content in two parts */
\t\t\tvar long_content\t= \$(this).html().substr(max_length);
\t\t\t
\t\t\t\$(this).html(short_content+
\t\t\t\t\t\t '<a href=\"#\" class=\"read_more\"><br/>Afficher la suite</a>'+
\t\t\t\t\t\t '<span class=\"more_text\" style=\"display:none;\">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
\t\t\t\t\t\t 
\t\t\t\$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
\t\t\t\tevent.preventDefault(); /* prevent the a from changing the url */
\t\t\t\t\$(this).hide(); /* hide the read more button */
\t\t\t\t\$(this).parents('.item').find('.more_text').show(); /* show the .more_text span */
\t\t 
\t\t\t});
\t\t\t
\t\t}
\t\t
\t});
});
</script>
    </body> 


</html>

";
    }

    // line 106
    public function block_formulaire($context, array $blocks = array())
    {
        // line 107
        echo "                                ";
    }

    // line 121
    public function block_content($context, array $blocks = array())
    {
        // line 122
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
        return array (  401 => 122,  398 => 121,  394 => 107,  391 => 106,  331 => 201,  326 => 199,  322 => 198,  318 => 197,  314 => 196,  310 => 195,  306 => 194,  302 => 193,  298 => 192,  294 => 191,  290 => 190,  286 => 189,  282 => 188,  215 => 123,  213 => 121,  202 => 112,  197 => 108,  195 => 106,  177 => 90,  171 => 88,  166 => 86,  159 => 85,  157 => 84,  153 => 83,  149 => 82,  140 => 76,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  83 => 37,  79 => 36,  75 => 35,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  53 => 28,  49 => 27,  21 => 1,);
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
/*                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 <li><a class="page-scroll" href="{{ path('pidev_crowd_rise_accueil') }}">Acceuil</a></li>*/
/*                                 <li><a class="page-scroll" href="{{ path('pidev_crowd_rise_projet') }}">Lancer Un Projet</a></li>*/
/*                                     {% if (app.user) %}*/
/*                                     <li><a class="page-scroll" href="{{ path('pidev_crowd_rise_accueil') }}">hi {{ app.user.username }}</a></li>*/
/*                                     <li><a  href="{{ path('fos_user_security_logout')}}">Déconnexion </a></li>*/
/*                                       {% else %}*/
/*                                       <li><a class="page-scroll" data-toggle="modal" data-target=".bs-example-modal-sm" href="{{ path('fos_user_security_login')}}">Se connecter </a></li>*/
/*                                     {% endif %}*/
/*                                 */
/*                             </ul>*/
/*                         </div><!-- /.navbar-collapse -->*/
/*                     </div><!-- /.container -->*/
/*                 </nav>*/
/*                 <!-- End Navbar -->*/
/*                 <div class="modal scroll-fix fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*                     <div class="modal-dialog  modal-sm">*/
/*                         <div class="modal-content">*/
/* */
/*                             */
/* */
/*                                 <div class="panel-footer col-sm-12 col-md-12 ">*/
/*                                    */
/*                                 </div>*/
/*                                 <div>*/
/*                                 {% block formulaire %}*/
/*                                 {% endblock %}*/
/*                                 </div>*/
/*                                 <div class="panel-footer text-center col-sm-12 col-md-12">*/
/*                                     */
/*                                         {#<li> <a class="col-sm-6 col-md-12 btn btn-link" href="fos_user_registration_register">S'inscrire</a></li>#}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                            										*/
/*                                 */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             <!-- ========= END HEADER =========-->*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*             <!-- Begin footer -->*/
/*             <footer class="text-off-white">*/
/* */
/*                 <div class="footer-top">*/
/*                     <div class="container">*/
/* */
/*                         <div class="row wow bounceInLeft" data-wow-delay="0.4s">*/
/* */
/*                             <div class="col-sm-6 col-md-4">*/
/*                                 <h4>Useful Links</h4>*/
/*                                 <ul class="imp-links">*/
/*                                     <li><a href="">À Propos</a></li>*/
/*                                     <li><a href="">Populaire</a></li>*/
/*                                     <li><a href="">Catégorie</a></li>*/
/*                                     <li><a href="">Copyright</a></li>*/
/*                                     <li><a href="">Advertise</a></li>*/
/*                                     <li><a href="">Legal</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/*                             <div class="col-sm-6 col-md-4">*/
/*                                 <h4>ABONNEZ-VOUS</h4>*/
/*                                 <div id="footer_signup">*/
/*                                     <div id="email">*/
/*                                         <form id="subscribe" method="POST">*/
/*                                             <input type="text" placeholder="Entrez votre e-mail" name="email" id="address" data-validate="validate(required, email)"/>*/
/*                                             <button type="submit">S'inscrire maintenant</button>*/
/*                                             <span id="result" class="section-description"></span>*/
/*                                         </form> */
/*                                     </div>*/
/*                                 </div> */
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> */
/*                             </div>*/
/* */
/*                             <div class="col-sm-12 col-md-4">*/
/*                                 <h4>Recent Tweets</h4>*/
/*                                 <div class="single-tweet">*/
/*                                     <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident</div>*/
/*                                     <div class="tweet-date">1 Hour ago</div>*/
/*                                 </div>*/
/*                                 <div class="single-tweet">*/
/*                                     <div class="tweet-content"><span>@Unika</span> Excepteur sint occaecat cupidatat non proident uku shumaru</div>*/
/*                                     <div class="tweet-date">1 Hour ago</div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div> <!-- /.row -->*/
/* */
/*                     </div> <!-- /.container -->*/
/*                 </div>*/
/* */
/* */
/* */
/*             </footer>*/
/* */
/*             <!-- End footer -->*/
/* */
/*             <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->*/
/* */
/*         </div><!-- body ends -->*/
/* */
/*         */
/* */
/* */
/*         <!-- Plugins JS -->*/
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
/*                 (function ($) {*/
/* */
/*                     $('#filter').keyup(function () {*/
/* */
/*                         var rex = new RegExp($(this).val(), 'i');*/
/*                         $('.searchable tr').hide();*/
/*                         $('.searchable tr').filter(function () {*/
/*                             return rex.test($(this).text());*/
/*                         }).show();*/
/* */
/*                     })*/
/* */
/*                 }(jQuery));*/
/* */
/*         });</script>*/
/* */
/* <script>*/
/* $(function(){ /* to make sure the script runs after page load *//* */
/* */
/* 	$('.item').each(function(event){ /* select all divs with the item class *//* */
/* 	*/
/* 		var max_length = 150; /* set the max content length before a read more link will be added *//* */
/* 		*/
/* 		if($(this).html().length > max_length){ /* check for content length *//* */
/* 			*/
/* 			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts *//* */
/* 			var long_content	= $(this).html().substr(max_length);*/
/* 			*/
/* 			$(this).html(short_content+*/
/* 						 '<a href="#" class="read_more"><br/>Afficher la suite</a>'+*/
/* 						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality *//* */
/* 						 */
/* 			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it *//* */
/*  */
/* 				event.preventDefault(); /* prevent the a from changing the url *//* */
/* 				$(this).hide(); /* hide the read more button *//* */
/* 				$(this).parents('.item').find('.more_text').show(); /* show the .more_text span *//* */
/* 		 */
/* 			});*/
/* 			*/
/* 		}*/
/* 		*/
/* 	});*/
/* });*/
/* </script>*/
/*     </body> */
/* */
/* */
/* </html>*/
/* */
/* */
