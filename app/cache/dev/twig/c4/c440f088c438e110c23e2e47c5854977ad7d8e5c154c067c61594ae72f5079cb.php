<?php

/* PIDEVCrowdRiseBundle:Projet:AfficherProjet.html.twig */
class __TwigTemplate_a1218fcb77cf80523b505e1a3383393353b1e0196b4468e65dc802725f59d240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Projet:AfficherProjet.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">



        <div class=\"jumbotron\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                <h2>Titre du Projet: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "titre", array()), "html", null, true);
        echo "</h2>


                <div class=\"panel panel-grey wow bounceInLeft\">
                    <div class=\"panel-heading\"></div>
                    <div class=\"panel-body pan\">


                        <div>DESCRIPTION :  ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "description", array()), "html", null, true);
        echo " </div>
                        <div>TYPE DE FINANCEMENT : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "typeFinancement", array()), "html", null, true);
        echo "</div>
                        <div>Categorie : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "idcat", array()), "nom", array()), "html", null, true);
        echo "</div>

                        <div class=\"row\">

                        </div>
                        <div><img height=\"100px\" width=\"400px\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("Uploads/" . $this->getAttribute($this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "imageProjet", array()), "path", array()))), "html", null, true);
        echo "\" class=\"img-thumbnail\" /> </div>
                        </tbody>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <ul class=\"social-list\">
                ";
        // line 38
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "               
            </ul>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Projet:AfficherProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 38,  71 => 29,  63 => 24,  59 => 23,  55 => 22,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/* */
/* */
/* */
/*         <div class="jumbotron">*/
/*             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                 <h2>Titre du Projet: {{projet.titre}}</h2>*/
/* */
/* */
/*                 <div class="panel panel-grey wow bounceInLeft">*/
/*                     <div class="panel-heading"></div>*/
/*                     <div class="panel-body pan">*/
/* */
/* */
/*                         <div>DESCRIPTION :  {{projet.description}} </div>*/
/*                         <div>TYPE DE FINANCEMENT : {{projet.typeFinancement}}</div>*/
/*                         <div>Categorie : {{projet.idcat.nom}}</div>*/
/* */
/*                         <div class="row">*/
/* */
/*                         </div>*/
/*                         <div><img height="100px" width="400px" src="{{ asset('Uploads/' ~ projet.imageProjet.path ) }}" class="img-thumbnail" /> </div>*/
/*                         </tbody>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <ul class="social-list">*/
/*                 {{ socialButtons() }}               */
/*             </ul>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
