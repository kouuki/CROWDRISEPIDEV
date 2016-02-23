<?php

/* PIDEVCrowdRiseBundle:Projet:RechercherProjet.html.twig */
class __TwigTemplate_48f980fb5980ec9dfb3e733c25c52a65b68c2097e638e8b38a3072d3dd5df257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Projet:RechercherProjet.html.twig", 1);
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
        echo "    RECHERCHER
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">

        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>Chercher Solution</h2>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">

                            <div class=\"form-body pal\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">

                                       
                                        <div class=\"input-group\"> <span class=\"input-group-addon\">Rechercher</span>

                                <input id=\"filter\" type=\"text\" class=\"form-control\" placeholder=\"Ecrire ici ...\">
                            </div>
                                        <table class=\"table table-striped col-lg-4\">
                                            <thead>
                                                <tr>
                                                    <th>titre</th>
                                                    <th>description</th>
                                                    <th>typeFinancement</th>

                                                </tr>
                                            </thead>
                                            <tbody class=\"searchable\">
                                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 40
            echo "                                                    <tr>
                                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "typeFinancement", array()), "html", null, true);
            echo "</td>
                                                        <td></td>
                                                        ";
            // line 46
            echo "





                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                                </tbody>
                                        </table>

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
        return "PIDEVCrowdRiseBundle:Projet:RechercherProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 54,  89 => 46,  84 => 43,  80 => 42,  76 => 41,  73 => 40,  69 => 39,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     RECHERCHER*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/* */
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     <h2>Chercher Solution</h2>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/* */
/*                             <div class="form-body pal">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class="form-group">*/
/* */
/*                                        */
/*                                         <div class="input-group"> <span class="input-group-addon">Rechercher</span>*/
/* */
/*                                 <input id="filter" type="text" class="form-control" placeholder="Ecrire ici ...">*/
/*                             </div>*/
/*                                         <table class="table table-striped col-lg-4">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th>titre</th>*/
/*                                                     <th>description</th>*/
/*                                                     <th>typeFinancement</th>*/
/* */
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tbody class="searchable">*/
/*                                                 {% for projet in projets %}*/
/*                                                     <tr>*/
/*                                                         <td>{{projet.titre}}</td>*/
/*                                                         <td>{{projet.description}}</td>*/
/*                                                         <td>{{projet.typeFinancement}}</td>*/
/*                                                         <td></td>*/
/*                                                         {# <td><img height="150px" src="{{ asset(path('my_image_route', {'id': projet.idProjet})) }}"/> </td>#}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*                                                     </tr>*/
/*                                                 {% endfor %}*/
/*                                                 </tbody>*/
/*                                         </table>*/
/* */
/*                                     </div>*/
/* */
/*                                 </div>*/
/* */
/* */
/*                                 */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
