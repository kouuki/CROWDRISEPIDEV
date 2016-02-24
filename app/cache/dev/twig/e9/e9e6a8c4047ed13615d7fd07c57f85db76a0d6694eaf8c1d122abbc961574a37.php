<?php

/* PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig */
class __TwigTemplate_034c78c9cba7c5c6bd1fd95758de3158026703f1dc5555570eb82facab5b235c extends Twig_Template
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
        $__internal_265d692d6ebb71a0d114137cecd96f6c2d8ae77507afd9e18e930381344d0dba = $this->env->getExtension("native_profiler");
        $__internal_265d692d6ebb71a0d114137cecd96f6c2d8ae77507afd9e18e930381344d0dba->enter($__internal_265d692d6ebb71a0d114137cecd96f6c2d8ae77507afd9e18e930381344d0dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265d692d6ebb71a0d114137cecd96f6c2d8ae77507afd9e18e930381344d0dba->leave($__internal_265d692d6ebb71a0d114137cecd96f6c2d8ae77507afd9e18e930381344d0dba_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_40639d7c9c3487026ae18e4d466e5acfbb8fcc72043d065e04b15f0468e5f014 = $this->env->getExtension("native_profiler");
        $__internal_40639d7c9c3487026ae18e4d466e5acfbb8fcc72043d065e04b15f0468e5f014->enter($__internal_40639d7c9c3487026ae18e4d466e5acfbb8fcc72043d065e04b15f0468e5f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
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
                            <table class=\"table table-striped col-lg-4\">
                                <thead>



                                    <tr>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Financement</th>
                                        <th>Image</th>
                                        
                                        <th>Modifer</th>
                                        <th>Supprimer</th>
                                        <th>Rate</th>  

                                    </tr>
                                </thead>
                                <tbody class=\"searchable\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 39
            echo "                                        <tr>
                                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "typeFinancement", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</td>
                                           


                                  
                                    
                                    <td> <img height=\"150px\" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("Uploads/" . $this->getAttribute($context["projet"], "path", array()))), "html", null, true);
            echo "\"/> </td> 
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("Uploads/" . $this->getAttribute($context["projet"], "path", array()))), "html", null, true);
            echo "\">View brochure (PDF)</a>
                                    <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_ModifierProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\"></i></a></td>
                                    <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_crowd_rise_SupprimerProjet", array("id" => $this->getAttribute($context["projet"], "idProjet", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-erase\"></i></a></td>
 <td>";
            // line 53
            $this->loadTemplate("DCSRatingBundle:Rating:rating.html.twig", "PIDEVCrowdRiseBundle:Projet:ListeProjet.html.twig", 53)->display(array_merge($context, array("id" => "YOUR_UNIQUE_ID")));
            echo "</td>




                                    </tr>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
";
        
        $__internal_40639d7c9c3487026ae18e4d466e5acfbb8fcc72043d065e04b15f0468e5f014->leave($__internal_40639d7c9c3487026ae18e4d466e5acfbb8fcc72043d065e04b15f0468e5f014_prof);

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
        return array (  155 => 60,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  94 => 39,  77 => 38,  40 => 3,  34 => 2,  11 => 1,);
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
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     <h2>Ajoutez votre solution</h2>*/
/* */
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/*                             <h1>Liste Des projets</h1>*/
/*                             <table class="table table-striped col-lg-4">*/
/*                                 <thead>*/
/* */
/* */
/* */
/*                                     <tr>*/
/*                                         <th>Titre</th>*/
/*                                         <th>Description</th>*/
/*                                         <th>Financement</th>*/
/*                                         <th>Image</th>*/
/*                                         */
/*                                         <th>Modifer</th>*/
/*                                         <th>Supprimer</th>*/
/*                                         <th>Rate</th>  */
/* */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody class="searchable">*/
/*                                     {% for projet in projets %}*/
/*                                         <tr>*/
/*                                             <td>{{projet.titre}}</td>*/
/*                                             <td>{{projet.description}}</td>*/
/*                                             <td>{{projet.typeFinancement}}</td>*/
/*                                             <td>{{projet.nom}}</td>*/
/*                                            */
/* */
/* */
/*                                   */
/*                                     */
/*                                     <td> <img height="150px" src="{{ asset('Uploads/' ~ projet.path ) }}"/> </td> */
/*                                     <a href="{{ asset('Uploads/' ~ projet.path ) }}">View brochure (PDF)</a>*/
/*                                     <td><a href="{{path('pidev_crowd_rise_ModifierProjet',{'id': projet.idProjet}) }}"><i class="glyphicon glyphicon-edit"></i></a></td>*/
/*                                     <td><a href="{{path('pidev_crowd_rise_SupprimerProjet',{'id': projet.idProjet})}}"><i class="glyphicon glyphicon-erase"></i></a></td>*/
/*  <td>{% include 'DCSRatingBundle:Rating:rating.html.twig' with {'id' : 'YOUR_UNIQUE_ID'} %}</td>*/
/* */
/* */
/* */
/* */
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
