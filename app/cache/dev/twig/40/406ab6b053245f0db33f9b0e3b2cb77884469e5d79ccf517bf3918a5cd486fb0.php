<?php

/* PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig */
class __TwigTemplate_702456572dff4e9bba8e1c9c5dd74d762dc4d8ad9a2d40517ecdf61e59a5672c extends Twig_Template
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
        echo "    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">


        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                <div class=\"text-center\">
                    <h1>Liste des Projets</h1>
                </div>

                <div class=\"panel panel-grey wow bounceInLeft\">
                    <div class=\"panel-heading\"></div>
                    <div class=\"panel-body pan\">

                        <table class=\"table table-striped col-lg-4\">
                            <thead>



                                <tr>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Financement</th> 
                                    <th>Categorie</th>
                                    <th>Image</th>
                                       ";
        // line 31
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 32
            echo "                                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "granted", array(0 => "ROLE_SUBMITTER"), "method")) {
                // line 33
                echo "                                    <th>Modifer</th>
                                    <th>Supprimer</th>
                                    ";
            }
            // line 36
            echo "                                             ";
        }
        // line 37
        echo "                                    <th>Consulter</th>


                                </tr>
                            </thead>
                            <tbody class=\"searchable\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 44
            echo "                                    <tr>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "typeFinancement", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idcat", array()), "nom", array()), "html", null, true);
            echo "</td>





                                        <td> <img height=\"100px\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("Uploads/" . $this->getAttribute($this->getAttribute($context["projet"], "imageProjet", array()), "path", array()))), "html", null, true);
            echo "\" class=\"\" /> </td> 
                                             ";
            // line 55
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 56
                echo "                                        ";
                if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "granted", array(0 => "ROLE_SUBMITTER"), "method")) {
                    // line 57
                    echo "                                            <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_ModifierProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a></td>
                                            <td><a href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_SupprimerProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-erase\"></i></a></td>
                                            ";
                }
                // line 60
                echo "                                             ";
            }
            // line 61
            echo "                                        <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_AfficherProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
            echo "\">Voir</a></td>





                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </tbody>
                        </table>
                        <div class=\"col-md-12 text-center\">
                            <ul class=\"pagination pagination-lg pager\" id=\"myPager\"></ul>
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
        return "PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 69,  132 => 61,  129 => 60,  124 => 58,  119 => 57,  116 => 56,  114 => 55,  110 => 54,  101 => 48,  97 => 47,  93 => 46,  89 => 45,  86 => 44,  82 => 43,  74 => 37,  71 => 36,  66 => 33,  63 => 32,  61 => 31,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                 <div class="text-center">*/
/*                     <h1>Liste des Projets</h1>*/
/*                 </div>*/
/* */
/*                 <div class="panel panel-grey wow bounceInLeft">*/
/*                     <div class="panel-heading"></div>*/
/*                     <div class="panel-body pan">*/
/* */
/*                         <table class="table table-striped col-lg-4">*/
/*                             <thead>*/
/* */
/* */
/* */
/*                                 <tr>*/
/*                                     <th>Titre</th>*/
/*                                     <th>Description</th>*/
/*                                     <th>Financement</th> */
/*                                     <th>Categorie</th>*/
/*                                     <th>Image</th>*/
/*                                        {% if (app.user) %}*/
/*                                         {% if (app.user.granted("ROLE_SUBMITTER")) %}*/
/*                                     <th>Modifer</th>*/
/*                                     <th>Supprimer</th>*/
/*                                     {% endif %}*/
/*                                              {% endif %}*/
/*                                     <th>Consulter</th>*/
/* */
/* */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody class="searchable">*/
/*                                 {% for projet in projets %}*/
/*                                     <tr>*/
/*                                         <td>{{projet.titre}}</td>*/
/*                                         <td>{{projet.description}}</td>*/
/*                                         <td>{{projet.typeFinancement}}</td>*/
/*                                         <td>{{projet.idcat.nom}}</td>*/
/* */
/* */
/* */
/* */
/* */
/*                                         <td> <img height="100px" src="{{ asset('Uploads/' ~ projet.imageProjet.path ) }}" class="" /> </td> */
/*                                              {% if (app.user) %}*/
/*                                         {% if (app.user.granted("ROLE_SUBMITTER")) %}*/
/*                                             <td><a href="{{path('pidev_crowd_rise_ModifierProjet',{'id': projet.idProjet}) }}"><i class="glyphicon glyphicon-edit"></i></a></td>*/
/*                                             <td><a href="{{path('pidev_crowd_rise_SupprimerProjet',{'id': projet.idProjet})}}"><i class="glyphicon glyphicon-erase"></i></a></td>*/
/*                                             {% endif %}*/
/*                                              {% endif %}*/
/*                                         <td><a href="{{path('pidev_crowd_rise_AfficherProjet',{'id': projet.idProjet})}}">Voir</a></td>*/
/* */
/* */
/* */
/* */
/* */
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                         <div class="col-md-12 text-center">*/
/*                             <ul class="pagination pagination-lg pager" id="myPager"></ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
