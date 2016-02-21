<?php

/* PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig */
class __TwigTemplate_4417e5daa54bab49ab0c92a5aa8781775b28e5ec1914ae0fa064fa379c655184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig", 2);
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
                    <h2>Consulter les solutions</h2>
                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\" style=\"background-color: white\">


                            <div class=\"input-group\"> <span class=\"input-group-addon\">Rechercher</span>

                                <input id=\"filter\" type=\"text\" class=\"form-control\" placeholder=\"Ecrire ici ...\">
                            </div>

                            <table class=\"table table-striped col-lg-4\">
                                <thead>
                                    <tr>
                                        <th>Solution</th>
                                        <th>Problème</th> 
                                        <th>Modifier</th>
                                        <th>Supprimer</th>

                                    </tr>
                                </thead>
                                <tbody class=\"searchable\">
                                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solutions"]) ? $context["solutions"] : $this->getContext($context, "solutions")));
        foreach ($context['_seq'] as $context["_key"] => $context["solution"]) {
            // line 36
            echo "
                                        <tr>
                                            <td>
                                                <a href=\"#\"><h6> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["solution"], "getTitre", array(), "method"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-save small\"></i></h6></a>
                                                <div class=\"item\">
                                                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["solution"], "getDescription", array(), "method"), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <td>

                                                <a href=\"#\">  ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["solution"], "ProblemeId", array()), "getTitre", array(), "method"), "html", null, true);
            echo "</a>
                                            </td>
                                            <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_updateSolution", array("id" => $this->getAttribute($context["solution"], "idSolution", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a></td>
                                            <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_deleteSolution", array("id" => $this->getAttribute($context["solution"], "idSolution", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a></td>

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

                                </tbody>
                            </table>


                            <nav>
                                <ul class=\"pager\">
                                    <li><a href=\"#\">Previous</a></li>
                                    <li><a href=\"#\">Next</a></li>
                                </ul>
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
        return "PIDEVCrowdRiseBundle:Solution:consultersolution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 53,  95 => 49,  91 => 48,  86 => 46,  78 => 41,  73 => 39,  68 => 36,  64 => 35,  31 => 4,  28 => 3,  11 => 2,);
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
/*                     <h2>Consulter les solutions</h2>*/
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan" style="background-color: white">*/
/* */
/* */
/*                             <div class="input-group"> <span class="input-group-addon">Rechercher</span>*/
/* */
/*                                 <input id="filter" type="text" class="form-control" placeholder="Ecrire ici ...">*/
/*                             </div>*/
/* */
/*                             <table class="table table-striped col-lg-4">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Solution</th>*/
/*                                         <th>Problème</th> */
/*                                         <th>Modifier</th>*/
/*                                         <th>Supprimer</th>*/
/* */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody class="searchable">*/
/*                                     {% for solution in solutions %}*/
/* */
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <a href="#"><h6> {{solution.getTitre()}} <i class="glyphicon glyphicon-save small"></i></h6></a>*/
/*                                                 <div class="item">*/
/*                                                     {{solution.getDescription()}}*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td>*/
/* */
/*                                                 <a href="#">  {{solution.ProblemeId.getTitre()}}</a>*/
/*                                             </td>*/
/*                                             <td><a href="{{ path('pidev_crowd_rise_updateSolution',{'id':solution.idSolution}) }}"><i class="glyphicon glyphicon-edit"></i></a></td>*/
/*                                             <td><a href="{{ path('pidev_crowd_rise_deleteSolution',{'id':solution.idSolution}) }}"><i class="glyphicon glyphicon-trash"></i></a></td>*/
/* */
/*                                         </tr>*/
/*                                     {% endfor %}*/
/* */
/* */
/*                                 </tbody>*/
/*                             </table>*/
/* */
/* */
/*                             <nav>*/
/*                                 <ul class="pager">*/
/*                                     <li><a href="#">Previous</a></li>*/
/*                                     <li><a href="#">Next</a></li>*/
/*                                 </ul>*/
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
