<?php

/* PIDEVCrowdRiseBundle:Problem:afficher.html.twig */
class __TwigTemplate_1a952412c47254a923ec5b607c2c0b20570af7e503c45c83e5a916b8f6a6e042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Problem:afficher.html.twig", 2);
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
        echo "<section id=\"portfolio-section\" class=\"page bg-style1\">
            \t<div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"portfolio\">
                                <!-- Begin page header-->
                                <div class=\"page\">
                                    <div class=\"container\">
                                        <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                                            <h2>Catégories</h2>
                                            <div class=\"devider\"></div>
                                            <p class=\"subtitle\">Problèmes déposés</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div>
                                   
                                    <div class=\"portfolio_content\">
                                        <div class=\"row\"  id=\"portfolio\">
                                            <div class=\"col-xs-12 col-sm-4 appsDevelopment\">
                                                <div class=\"portfolio_single_content\">
                                                    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("consulter", array("categorie" => "Financier"));
        echo "\"><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/f.jpg"), "html", null, true);
        echo " alt=\"title\" width=\"250\" height=\"250\"/>
                                                   <div>
                                                        <h2 class=\"title\">Financier</h2> 
                                                     </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-12 col-sm-4 GraphicDesign\">
                                                <div class=\"portfolio_single_content\">
                                                   <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("consulter", array("categorie" => "Technique"));
        echo "\"> <img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/tech.jpg"), "html", null, true);
        echo " alt=\"title\" width=\"250\" height=\"250\"/>
                                                   <div>
                                                        <h2 class=\"title\">Technique</h2> 
                                                     </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-12 col-sm-4 responsive\">
                                                <div class=\"portfolio_single_content\">
                                                 <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("consulter", array("categorie" => "Administratif"));
        echo "\">   <img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/admin.jpg"), "html", null, true);
        echo "  alt=\"title\" width=\"250\" height=\"250\"/>
                                                   <div>
                                                        <h2 class=\"title\">Administratif</h2> 
                                                     </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-12 col-sm-4 webDesign websites\">
                                                <div class=\"portfolio_single_content\">
                                                    <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("consulter", array("categorie" => "Social"));
        echo "\"><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/sociale.png"), "html", null, true);
        echo " alt=\"title\" width=\"250\" height=\"250\"/></a>
                                                 <div>
                                                        <h2 class=\"title\">Social</h2> 
                                                     </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-12 col-sm-4 appsDevelopment websites\">
                                                <div class=\"portfolio_single_content\">
                                               <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("consulter", array("categorie" => "Marketing"));
        echo "\">     <img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/marketing.png"), "html", null, true);
        echo " alt=\"title\" width=\"250\" height=\"250\"/>
                                                   <div>
                                                        <h2 class=\"title\">Marketing</h2> 
                                                     </div>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-12 col-sm-4 GraphicDesign\">
                                                <div class=\"portfolio_single_content\">
                                            <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("consulter", array("categorie" => "Autre"));
        echo "\">        <img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/autre.png"), "html", null, true);
        echo " alt=\"title\" width=\"250\" height=\"250\"/>
                                            </a> 
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Problem:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 66,  107 => 58,  94 => 50,  81 => 42,  68 => 34,  55 => 26,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/* <section id="portfolio-section" class="page bg-style1">*/
/*             	<div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="portfolio">*/
/*                                 <!-- Begin page header-->*/
/*                                 <div class="page">*/
/*                                     <div class="container">*/
/*                                         <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                                             <h2>Catégories</h2>*/
/*                                             <div class="devider"></div>*/
/*                                             <p class="subtitle">Problèmes déposés</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- End page header-->*/
/*                                 <div>*/
/*                                    */
/*                                     <div class="portfolio_content">*/
/*                                         <div class="row"  id="portfolio">*/
/*                                             <div class="col-xs-12 col-sm-4 appsDevelopment">*/
/*                                                 <div class="portfolio_single_content">*/
/*                                                     <a href="{{ path('consulter', {'categorie': 'Financier'} )}}"><img src={{ asset('img/f.jpg') }} alt="title" width="250" height="250"/>*/
/*                                                    <div>*/
/*                                                         <h2 class="title">Financier</h2> */
/*                                                      </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-xs-12 col-sm-4 GraphicDesign">*/
/*                                                 <div class="portfolio_single_content">*/
/*                                                    <a href="{{ path('consulter', {'categorie': 'Technique'} )}}"> <img src={{ asset('img/tech.jpg') }} alt="title" width="250" height="250"/>*/
/*                                                    <div>*/
/*                                                         <h2 class="title">Technique</h2> */
/*                                                      </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-xs-12 col-sm-4 responsive">*/
/*                                                 <div class="portfolio_single_content">*/
/*                                                  <a href="{{ path('consulter', {'categorie': 'Administratif'} )}}">   <img src={{ asset('img/admin.jpg') }}  alt="title" width="250" height="250"/>*/
/*                                                    <div>*/
/*                                                         <h2 class="title">Administratif</h2> */
/*                                                      </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-xs-12 col-sm-4 webDesign websites">*/
/*                                                 <div class="portfolio_single_content">*/
/*                                                     <a href="{{ path('consulter', {'categorie': 'Social'} )}}"><img src={{ asset('img/sociale.png') }} alt="title" width="250" height="250"/></a>*/
/*                                                  <div>*/
/*                                                         <h2 class="title">Social</h2> */
/*                                                      </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-xs-12 col-sm-4 appsDevelopment websites">*/
/*                                                 <div class="portfolio_single_content">*/
/*                                                <a href="{{ path('consulter', {'categorie': 'Marketing' } )}}">     <img src={{ asset('img/marketing.png') }} alt="title" width="250" height="250"/>*/
/*                                                    <div>*/
/*                                                         <h2 class="title">Marketing</h2> */
/*                                                      </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="col-xs-12 col-sm-4 GraphicDesign">*/
/*                                                 <div class="portfolio_single_content">*/
/*                                             <a href="{{ path('consulter', {'categorie': 'Autre'} )}}">        <img src={{ asset('img/autre.png') }} alt="title" width="250" height="250"/>*/
/*                                             </a> */
/*                                                 </div>*/
/*                                             </div>*/
/*                                             */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* {% endblock %}*/
