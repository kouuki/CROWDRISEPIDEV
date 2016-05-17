<?php

/* PIDEVCrowdRiseBundle:Problem:listProblemeSolver.html.twig */
class __TwigTemplate_9cb94d778042fd7eb917a0f9158a906fd526a140776340477651b5d253bcf771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Problem:listProblemeSolver.html.twig", 2);
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
        echo "
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">
        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["problemes"]) ? $context["problemes"] : $this->getContext($context, "problemes")), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["probleme"]) {
            echo "   
                        <h2>Les problèmes de la catégorie: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["probleme"], "getCategorie", array(), "method"), "html", null, true);
            echo "</h2>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['probleme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\" style=\"background-color: white\">
                            <div class=\"input-group\"> <span class=\"input-group-addon\">Rechercher</span>
                                <input id=\"filter\" type=\"text\" class=\"form-control\" placeholder=\"Ecrire ici ...\">
                            </div>
                            <table class=\"table table-striped col-lg-4\">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Categorie</th>
                                        <th>Solution</th>
                                        <th>Vote</th>
                                    </tr>
                                </thead>
                                <tbody class=\"searchable\">
                                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problemes"]) ? $context["problemes"] : $this->getContext($context, "problemes")));
        foreach ($context['_seq'] as $context["_key"] => $context["probleme"]) {
            echo "                    
                                        <tr>
                                            <td>
                                                <div class=\"item\">
                                                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["probleme"], "getTitre", array(), "method"), "html", null, true);
            echo " 
                                                </div>

                                            </td>
                                            <td>
                                                <div class=\"item\">
                                                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["probleme"], "getDescription", array(), "method"), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"item\"> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["probleme"], "getCategorie", array(), "method"), "html", null, true);
            echo "</div>
                                            </td>

                                            <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_ajoutDemande", array("id" => $this->getAttribute($context["probleme"], "idProbleme", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-download-alt\"></i>  Déposer une offre</a></td>
                                            <td>
                                                <p>My rating: <input type=\"number\" name=\"your_awesome_parameter\" id=\"some_id\" class=\"rating\" data-clearable=\"remove\"/></p>                                            </td>
                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['probleme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "

                                </tbody>
                            </table>


                            <nav>
                                <div class=\"pager arcive_Paging\">
                                    <ul class=\"ul_paging\">
                                        <span class=\"acitve\"></span>
                                    </ul>
                                </div>
                            </nav>

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
        return "PIDEVCrowdRiseBundle:Problem:listProblemeSolver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 56,  106 => 50,  100 => 47,  93 => 43,  84 => 37,  75 => 33,  56 => 16,  48 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     {% for probleme in problemes | slice(0, 1) %}   */
/*                         <h2>Les problèmes de la catégorie: {{probleme.getCategorie()}}</h2>*/
/*                     {% endfor %}*/
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan" style="background-color: white">*/
/*                             <div class="input-group"> <span class="input-group-addon">Rechercher</span>*/
/*                                 <input id="filter" type="text" class="form-control" placeholder="Ecrire ici ...">*/
/*                             </div>*/
/*                             <table class="table table-striped col-lg-4">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Titre</th>*/
/*                                         <th>Description</th>*/
/*                                         <th>Categorie</th>*/
/*                                         <th>Solution</th>*/
/*                                         <th>Vote</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody class="searchable">*/
/*                                     {% for probleme in problemes %}                    */
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <div class="item">*/
/*                                                     {{probleme.getTitre()}} */
/*                                                 </div>*/
/* */
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <div class="item">*/
/*                                                     {{probleme.getDescription()}}*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <div class="item"> {{probleme.getCategorie()}}</div>*/
/*                                             </td>*/
/* */
/*                                             <td><a href="{{ path('pidev_crowd_rise_ajoutDemande',{'id':probleme.idProbleme}) }}"><i class="glyphicon glyphicon-download-alt"></i>  Déposer une offre</a></td>*/
/*                                             <td>*/
/*                                                 <p>My rating: <input type="number" name="your_awesome_parameter" id="some_id" class="rating" data-clearable="remove"/></p>                                            </td>*/
/*                                         </tr>*/
/* */
/*                                     {% endfor %}*/
/* */
/* */
/*                                 </tbody>*/
/*                             </table>*/
/* */
/* */
/*                             <nav>*/
/*                                 <div class="pager arcive_Paging">*/
/*                                     <ul class="ul_paging">*/
/*                                         <span class="acitve"></span>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </nav>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
/* */
