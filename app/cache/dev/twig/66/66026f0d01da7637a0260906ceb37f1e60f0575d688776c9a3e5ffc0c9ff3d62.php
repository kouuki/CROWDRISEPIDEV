<?php

/* PIDEVCrowdRiseBundle:Security:login2.html.twig */
class __TwigTemplate_b2dc862b0537e676bc1ce1b79d061ec31ede59e76db787cd868560392d28e0a0 extends Twig_Template
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
                 
                                    
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->
               
                             
                               
            </header>
            <!-- ========= END HEADER =========-->
            ";
        // line 96
        $this->displayBlock('formulaire', $context, $blocks);
        // line 98
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "            <!-- Begin footer -->
   

            <!-- End footer -->

            <a href=\"#\" class=\"scrolltotop\"><i class=\"fa fa-arrow-up\"></i></a> <!-- Scroll to top button -->

        </div><!-- body ends -->

        


        <!-- Plugins JS -->
        <script src=";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/owl-carousel/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/stellar/js/jquery.stellar.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/animations/js/wow.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/waypoints.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/isotope.pkgd.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery.easing.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/jquery.counterup.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inc/smoothscroll.js"), "html", null, true);
        echo "></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dcsrating/js/rating.js"), "html", null, true);
        echo "\"></script>
        <!-- Theme JS -->
        <script src=";
        // line 126
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
    </body> 


</html>

";
    }

    // line 96
    public function block_formulaire($context, array $blocks = array())
    {
        // line 97
        echo "            ";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "                ";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Security:login2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 99,  271 => 98,  267 => 97,  264 => 96,  235 => 126,  230 => 124,  226 => 123,  222 => 122,  218 => 121,  214 => 120,  210 => 119,  206 => 118,  202 => 117,  198 => 116,  194 => 115,  190 => 114,  186 => 113,  171 => 100,  168 => 98,  166 => 96,  149 => 82,  140 => 76,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  83 => 37,  79 => 36,  75 => 35,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  53 => 28,  49 => 27,  21 => 1,);
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
/*                  */
/*                                     */
/*                                 */
/*                             </ul>*/
/*                         </div><!-- /.navbar-collapse -->*/
/*                     </div><!-- /.container -->*/
/*                 </nav>*/
/*                 <!-- End Navbar -->*/
/*                */
/*                              */
/*                                */
/*             </header>*/
/*             <!-- ========= END HEADER =========-->*/
/*             {% block formulaire %}*/
/*             {% endblock %}*/
/*             {% block content %}*/
/*                 {% endblock %}*/
/*             <!-- Begin footer -->*/
/*    */
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
/*             });</script>*/
/*     </body> */
/* */
/* */
/* </html>*/
/* */
/* */
