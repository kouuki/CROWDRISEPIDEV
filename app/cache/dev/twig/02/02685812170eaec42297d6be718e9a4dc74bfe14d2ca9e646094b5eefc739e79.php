<?php

/* PIDEVCrowdRiseBundle:Accueil:accueil.html.twig */
class __TwigTemplate_08bfc91b18f3b0f44e5ab3c14ba8e427c9ed01db79f77fe5c6f99481c58747aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Accueil:accueil.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIDEVCrowdRiseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Begin text carousel intro section -->
    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil2.jpg"), "html", null, true);
        echo ");\">

        <div class=\"container\">
            <div class=\"caption text-center text-white\" >

                <div id=\"owl-intro-text\" class=\"owl-carousel\"> 
                    <div class=\"\">
                        <h1>CrowDRise</h1>
                        <p>Mettez fin à nos problèmes!</p>
                        <div class=\"extra-space-l\"></div>
                        ";
        // line 15
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "                        
                            ";
        } else {
            // line 18
            echo "                                <a class=\"btn btn-blank\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" target=\"_blank\" role=\"button\">Inscrivez-vous</a>
                        ";
        }
        // line 20
        echo "                    </div>
                </div>

            </div> <!-- /.caption -->
        </div> <!-- /.container -->

    </section>
    <!-- End text carousel intro section -->   

    <!-- Begin prices section -->
    <section id=\"prices-section\" class=\"page\">

        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <div class=\"extra-space-l\"></div>
                    <h2>Start-Ups</h2>           
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">That how much</p>
                </div>
            </div>
        </div>
        <!-- End page header-->



        <!-- Begin prices -->
        <div class=\"prices\">
            <div class=\"container\">
                <div class=\"row\">

                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 53
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_AfficherProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
            echo "\">
                            <div class=\"price-box col-sm-6 col-md-4 wow flipInY\" data-wow-delay=\"0.3s\">
                                <div class=\"thumbnail\">
                                    <img src='";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("Uploads/" . $this->getAttribute($this->getAttribute($context["projet"], "imageProjet", array()), "path", array()))), "html", null, true);
            echo "' alt=\"...\">
                                    <div class=\"caption\">
                                        <h3>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</h3>
                                        <p>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</p>
                                        <br>
                                        <div id=\"somme\">
                                            <p><b>Typede financement: </b>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "typeFinancement", array()), "html", null, true);
            echo "</p>
                                            <p><b>Catégorie:</b> ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idcat", array()), "nom", array()), "html", null, true);
            echo "</p>
                                        </div>
                                        <div class=\"\">

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
                </div> <!-- /.row -->

                <div class=\"container\">

                    <div class=\"row wow bounceInLeft\" data-wow-delay=\"0.4s\">

                        <div class=\"col-sm-6 col-md-4\">

                        </div>

                        <div class=\"col-sm-6 col-md-4\">

                        </div>

                        <div class=\"col-sm-12 col-md-4\">
                            <h4><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_ListProjet");
        echo "\">Voir plus...</a></h4>
                        </div>    

                    </div>

                </div>


            </div> <!-- /.container -->
        </div>
        <!-- End prices -->

    </section>
    <!-- End prices section -->

    <!-- Begin Portfolio -->
    <section id=\"portfolio-section\" class=\"page bg-style1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"portfolio\">
                        <!-- Begin page header-->
                        <div class=\"page\">
                            <div class=\"container\">
                                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                                    <h2>Catégories des problèmes</h2>
                                    <div class=\"devider\"></div>
                                    <p class=\"subtitle\">Explorez les problèmes</p>
                                </div>
                            </div>
                        </div>
                        <!-- End page header-->
                        <div>

                            <div class=\"portfolio_content\">
                                <div class=\"row\"  id=\"portfolio\">
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/f.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_consulterToutProbleme", array("categorie" => "Financier"));
        echo "\">Financier</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/tech.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_consulterToutProbleme", array("categorie" => "Technique"));
        echo "\">Technique</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/admin.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_consulterToutProbleme", array("categorie" => "Administratif"));
        echo "\">Administratif</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/sociale.png"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_consulterToutProbleme", array("categorie" => "Social"));
        echo "\">Social</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/marketing.png"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_consulterToutProbleme", array("categorie" => "Marketing"));
        echo "\">Marketing</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/autre.png"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("pidev_crowd_rise_consulterToutProbleme", array("categorie" => "Autre"));
        echo "\">Autre</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class=\"btn btn-primary col-md-12 col-sm-12 center-block\" style=\"background-color: whitesmoke\" type=\"submit\" ><a href=\"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("ajouter_problem");
        echo "\">Déposez un problème</a></div>                                         
    </section>

    <!-- End portfolio -->

    <!-- Begin about section -->
    <section id=\"about-section\" class=\"page bg-style1\">
        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <h2>À Propos</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">Quelque Information</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <!-- Begin rotate box-1 -->
        <div class=\"rotate-box-1-wrapper\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 col-sm-12\">
                        <a href=\"#\" class=\"rotate-box-1 square-icon wow zoomIn\" data-wow-delay=\"0.2s\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-diamond\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>Crowdfunding</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                    <div class=\"col-md-6 col-sm-12\">
                        <a href=\"#\" class=\"rotate-box-1 square-icon wow zoomIn\" data-wow-delay=\"0.6s\">
                            <span class=\"rotate-box-icon\"><i class=\"fa fa-clock-o\"></i></span>
                            <div class=\"rotate-box-info\">
                                <h4>Crowdsourcing</h4>
                                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
                            </div>
                        </a>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End rotate box-1 -->
    </section>
    <!-- End about section -->

    <!-- Begin social section -->
    <section id=\"social-section\">

        <!-- Begin page header-->
        <div class=\"page-header-wrapper\">
            <div class=\"container\">
                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                    <h2>Rejoignez-nous</h2>
                    <div class=\"devider\"></div>
                    <p class=\"subtitle\">SUIVEZ-NOUS</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

       

    </section>
    <!-- End social section -->


    <!-- Begin counter up -->
    <section id=\"counter-section\">                \t\t\t\t\t
        <div id=\"counter-up-trigger\" class=\"counter-up text-white parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/chaisebusiness.jpg"), "html", null, true);
        echo ");\">
            <div class=\"cover\"></div>
            <!-- Begin page header-->
            <div class=\"page-header-wrapper\">
                <div class=\"container\">
                    <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                        <h2>Some Fun Facts</h2>
                        <div class=\"devider\"></div>
                        <p class=\"subtitle\">Before anyone is not told</p>
                    </div>
                </div>
            </div>
            <!-- End page header-->
            <div class=\"container\">

                <div class=\"row\">

                    <div class=\"fact text-center col-md-6 col-sm-12\">
                        <div class=\"fact-inner\">
                            <i class=\"fa fa-users fa-3x\"></i>
                            <div class=\"extra-space-l\"></div>
                            <span class=\"counter\">6666</span>
                            <p class=\"lead\">Submitters</p>
                        </div>
                    </div>

                    <div class=\"fact last text-center col-md-6 col-sm-12\">
                        <div class=\"fact-inner\">
                            <i class=\"fa fa-coffee fa-3x\"></i>
                            <div class=\"extra-space-l\"></div>
                            <span class=\"counter\">1100</span>
                            <p class=\"lead\">Solvers</p>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>
    <!-- End counter up -->

";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 265,  298 => 191,  280 => 176,  275 => 174,  265 => 167,  260 => 165,  250 => 158,  245 => 156,  235 => 149,  230 => 147,  220 => 140,  215 => 138,  205 => 131,  200 => 129,  159 => 91,  141 => 75,  123 => 63,  119 => 62,  113 => 59,  109 => 58,  104 => 56,  97 => 53,  93 => 52,  59 => 20,  53 => 18,  49 => 16,  47 => 15,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Begin text carousel intro section -->*/
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('img/accueil2.jpg') }});">*/
/* */
/*         <div class="container">*/
/*             <div class="caption text-center text-white" >*/
/* */
/*                 <div id="owl-intro-text" class="owl-carousel"> */
/*                     <div class="">*/
/*                         <h1>CrowDRise</h1>*/
/*                         <p>Mettez fin à nos problèmes!</p>*/
/*                         <div class="extra-space-l"></div>*/
/*                         {% if (app.user) %}*/
/*                         */
/*                             {% else %}*/
/*                                 <a class="btn btn-blank" href="{{path('fos_user_registration_register')}}" target="_blank" role="button">Inscrivez-vous</a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div> <!-- /.caption -->*/
/*         </div> <!-- /.container -->*/
/* */
/*     </section>*/
/*     <!-- End text carousel intro section -->   */
/* */
/*     <!-- Begin prices section -->*/
/*     <section id="prices-section" class="page">*/
/* */
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                     <div class="extra-space-l"></div>*/
/*                     <h2>Start-Ups</h2>           */
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">That how much</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End page header-->*/
/* */
/* */
/* */
/*         <!-- Begin prices -->*/
/*         <div class="prices">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     {% for projet in projets | slice(0, 3) %}*/
/*                         <a href="{{path('pidev_crowd_rise_AfficherProjet',{'id': projet.idProjet})}}">*/
/*                             <div class="price-box col-sm-6 col-md-4 wow flipInY" data-wow-delay="0.3s">*/
/*                                 <div class="thumbnail">*/
/*                                     <img src='{{ asset('Uploads/' ~ projet.imageProjet.path ) }}' alt="...">*/
/*                                     <div class="caption">*/
/*                                         <h3>{{projet.titre}}</h3>*/
/*                                         <p>{{projet.description}}</p>*/
/*                                         <br>*/
/*                                         <div id="somme">*/
/*                                             <p><b>Typede financement: </b>{{projet.typeFinancement}}</p>*/
/*                                             <p><b>Catégorie:</b> {{projet.idcat.nom}}</p>*/
/*                                         </div>*/
/*                                         <div class="">*/
/* */
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </a>*/
/*                     {% endfor %}*/
/* */
/*                 </div> <!-- /.row -->*/
/* */
/*                 <div class="container">*/
/* */
/*                     <div class="row wow bounceInLeft" data-wow-delay="0.4s">*/
/* */
/*                         <div class="col-sm-6 col-md-4">*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-sm-6 col-md-4">*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-sm-12 col-md-4">*/
/*                             <h4><a href="{{path('pidev_crowd_rise_ListProjet')}}">Voir plus...</a></h4>*/
/*                         </div>    */
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*             </div> <!-- /.container -->*/
/*         </div>*/
/*         <!-- End prices -->*/
/* */
/*     </section>*/
/*     <!-- End prices section -->*/
/* */
/*     <!-- Begin Portfolio -->*/
/*     <section id="portfolio-section" class="page bg-style1">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="portfolio">*/
/*                         <!-- Begin page header-->*/
/*                         <div class="page">*/
/*                             <div class="container">*/
/*                                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                                     <h2>Catégories des problèmes</h2>*/
/*                                     <div class="devider"></div>*/
/*                                     <p class="subtitle">Explorez les problèmes</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- End page header-->*/
/*                         <div>*/
/* */
/*                             <div class="portfolio_content">*/
/*                                 <div class="row"  id="portfolio">*/
/*                                     <div class="col-xs-12 col-sm-4 appsDevelopment">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/f.jpg') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="{{ path('pidev_crowd_rise_consulterToutProbleme', {'categorie': 'Financier'} )}}">Financier</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4 appsDevelopment">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/tech.jpg') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="{{ path('pidev_crowd_rise_consulterToutProbleme', {'categorie': 'Technique'} )}}">Technique</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4 appsDevelopment">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/admin.jpg') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="{{ path('pidev_crowd_rise_consulterToutProbleme', {'categorie': 'Administratif'} )}}">Administratif</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4 appsDevelopment">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/sociale.png') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="{{ path('pidev_crowd_rise_consulterToutProbleme', {'categorie': 'Social'} )}}">Social</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4 appsDevelopment">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/marketing.png') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="{{ path('pidev_crowd_rise_consulterToutProbleme', {'categorie': 'Marketing' } )}}">Marketing</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4 appsDevelopment">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/autre.png') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="{{ path('pidev_crowd_rise_consulterToutProbleme', {'categorie': 'Autre'} )}}">Autre</a>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="btn btn-primary col-md-12 col-sm-12 center-block" style="background-color: whitesmoke" type="submit" ><a href="{{ path('ajouter_problem') }}">Déposez un problème</a></div>                                         */
/*     </section>*/
/* */
/*     <!-- End portfolio -->*/
/* */
/*     <!-- Begin about section -->*/
/*     <section id="about-section" class="page bg-style1">*/
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">*/
/*                     <h2>À Propos</h2>*/
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">Quelque Information</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End page header-->*/
/* */
/*         <!-- Begin rotate box-1 -->*/
/*         <div class="rotate-box-1-wrapper">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-6 col-sm-12">*/
/*                         <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">*/
/*                             <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>*/
/*                             <div class="rotate-box-info">*/
/*                                 <h4>Crowdfunding</h4>*/
/*                                 <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-6 col-sm-12">*/
/*                         <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">*/
/*                             <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>*/
/*                             <div class="rotate-box-info">*/
/*                                 <h4>Crowdsourcing</h4>*/
/*                                 <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/* */
/*                 </div> <!-- /.row -->*/
/*             </div> <!-- /.container -->*/
/*         </div>*/
/*         <!-- End rotate box-1 -->*/
/*     </section>*/
/*     <!-- End about section -->*/
/* */
/*     <!-- Begin social section -->*/
/*     <section id="social-section">*/
/* */
/*         <!-- Begin page header-->*/
/*         <div class="page-header-wrapper">*/
/*             <div class="container">*/
/*                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                     <h2>Rejoignez-nous</h2>*/
/*                     <div class="devider"></div>*/
/*                     <p class="subtitle">SUIVEZ-NOUS</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- End page header-->*/
/* */
/*        */
/* */
/*     </section>*/
/*     <!-- End social section -->*/
/* */
/* */
/*     <!-- Begin counter up -->*/
/*     <section id="counter-section">                					*/
/*         <div id="counter-up-trigger" class="counter-up text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('img/chaisebusiness.jpg') }});">*/
/*             <div class="cover"></div>*/
/*             <!-- Begin page header-->*/
/*             <div class="page-header-wrapper">*/
/*                 <div class="container">*/
/*                     <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                         <h2>Some Fun Facts</h2>*/
/*                         <div class="devider"></div>*/
/*                         <p class="subtitle">Before anyone is not told</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- End page header-->*/
/*             <div class="container">*/
/* */
/*                 <div class="row">*/
/* */
/*                     <div class="fact text-center col-md-6 col-sm-12">*/
/*                         <div class="fact-inner">*/
/*                             <i class="fa fa-users fa-3x"></i>*/
/*                             <div class="extra-space-l"></div>*/
/*                             <span class="counter">6666</span>*/
/*                             <p class="lead">Submitters</p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="fact last text-center col-md-6 col-sm-12">*/
/*                         <div class="fact-inner">*/
/*                             <i class="fa fa-coffee fa-3x"></i>*/
/*                             <div class="extra-space-l"></div>*/
/*                             <span class="counter">1100</span>*/
/*                             <p class="lead">Solvers</p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div> <!-- /.row -->*/
/*             </div> <!-- /.container -->*/
/*         </div>*/
/*     </section>*/
/*     <!-- End counter up -->*/
/* */
/* {% endblock %}*/
/* {#*/
/* */
/* &#123;&#35; Set Notification Number &#35;&#125;*/
/* {% block NotificationNumber %}*/
/*     1*/
/* {% endblock %}*/
/* &#123;&#35; End Set Notification Number &#35;&#125;*/
/* */
/* &#123;&#35;Set Notification Content &#35;&#125;*/
/* {% block NotificationContent*/
/* {% for %}*/
/* {% endblock %}*/
/* &#123;&#35; End Set Notification Content &#35;&#125;#}*/
/* */
