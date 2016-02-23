<?php

/* PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig */
class __TwigTemplate_c95c786a37cbb1b63d838eb4f156714d2e027e788e06f72ebfec824f409f6d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig", 1);
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
        echo "    LISTER
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">

        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>Ajoutez votre solution</h2>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">
                           <h1>Liste Des projets</h1>
<table border=\"1\">
    <tr>
        <th>titre</th>
        <th>description</th>
        <th>typeFinancement</th>
        
        <th>Image</th>
        
       
    </tr>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 30
            echo "    <tr>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "typeFinancement", array()), "html", null, true);
            echo "</td>
        <td></td>
       ";
            // line 36
            echo "         <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_ModifierProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
            echo "\">Modifier</a></td>
          <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_SupprimerProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        
        
        
        
        
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 45,  84 => 37,  79 => 36,  74 => 33,  70 => 32,  66 => 31,  63 => 30,  59 => 29,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     LISTER*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/* */
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     <h2>Ajoutez votre solution</h2>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/*                            <h1>Liste Des projets</h1>*/
/* <table border="1">*/
/*     <tr>*/
/*         <th>titre</th>*/
/*         <th>description</th>*/
/*         <th>typeFinancement</th>*/
/*         */
/*         <th>Image</th>*/
/*         */
/*        */
/*     </tr>*/
/*     {% for projet in projets %}*/
/*     <tr>*/
/*         <td>{{projet.titre}}</td>*/
/*         <td>{{projet.description}}</td>*/
/*         <td>{{projet.typeFinancement}}</td>*/
/*         <td></td>*/
/*        {# <td><img height="150px" src="{{ asset(path('my_image_route', {'id': projet.idProjet})) }}"/> </td>#}*/
/*          <td><a href="{{path('pidev_crowd_rise_ModifierProjet',{'id': projet.idProjet}) }}">Modifier</a></td>*/
/*           <td><a href="{{path('pidev_crowd_rise_SupprimerProjet',{'id': projet.idProjet})}}">Supprimer</a></td>*/
/*         */
/*         */
/*         */
/*         */
/*         */
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
