<?php

/* PIDEVCrowdRiseBundle:Competence:afficheCompetence.html.twig */
class __TwigTemplate_1cd1e76ce4ae43fd2e38534b3ca0c657920c351da2436c76cae2ca066526aef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Competence:afficheCompetence.html.twig", 2);
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
        echo "    <section id=\"portfolio-section\" class=\"page bg-style1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"portfolio\">
                        <!-- Begin page header-->
                        <div class=\"page\">
                            <div class=\"container\">
                                <div class=\"page-header text-center wow fadeInDown\" data-wow-delay=\"0.4s\">
                                    <h2>Votre profil</h2>
                                </div>
                            </div>
                            <!-- End page header-->
                            <div class=\"portfolio_menu\" id=\"filters\">
                                <ul>
                                    <li class=\"active_prot_menu\"><a href=\"#porfolio_menu\" data-filter=\".role\">Competences</a></li>
                                    <li><a href=\"#porfolio_menu\" data-filter=\".personnal\">Informations Personnelles</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class=\"portfolio_content\">
                                    <div class=\"row\" id=\"portfolio\">

                                        <div class=\"col-xs-12 col-sm-4  role\">
                                            <div class=\"portfolio_single_content\">
                                                <img src=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p7.jpg"), "html", null, true);
        echo " alt=\"title\"/>

                                                <div>
                                                    <a href=\"#\">Créateur</a>
                                                    <span>Créer des projets à financer</span>
                                                    <center><input type=\"radio\" name=\"role\" value=\"créateur\"></center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xs-12 col-sm-4  role\">
                                            <h3>Nom :
                                                <small>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
        echo "</small>
                                            </h3>
                                            <h3>Prénom :
                                                <small> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "prenom", array()), "html", null, true);
        echo " </small>
                                            </h3>
                                            ";
        // line 48
        echo "                                            <h2>Les compétences</h2>
                                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")));
        foreach ($context['_seq'] as $context["_key"] => $context["competences"]) {
            // line 50
            echo "                                                <ul>
                                            <li><h3>Competence :
                                                <small> ";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["competences"], "nom", array())), "html", null, true);
            echo "</small>
                                            </h3></li>
                                            <li><h3>Description :
                                                <small>  ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["competences"], "description", array()), "html", null, true);
            echo "</small>
                                            </h3></li>
                                                </ul>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                        </div>
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
        return "PIDEVCrowdRiseBundle:Competence:afficheCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 59,  100 => 55,  94 => 52,  90 => 50,  86 => 49,  83 => 48,  78 => 43,  72 => 40,  58 => 29,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <section id="portfolio-section" class="page bg-style1">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="portfolio">*/
/*                         <!-- Begin page header-->*/
/*                         <div class="page">*/
/*                             <div class="container">*/
/*                                 <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">*/
/*                                     <h2>Votre profil</h2>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- End page header-->*/
/*                             <div class="portfolio_menu" id="filters">*/
/*                                 <ul>*/
/*                                     <li class="active_prot_menu"><a href="#porfolio_menu" data-filter=".role">Competences</a></li>*/
/*                                     <li><a href="#porfolio_menu" data-filter=".personnal">Informations Personnelles</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div>*/
/*                                 <div class="portfolio_content">*/
/*                                     <div class="row" id="portfolio">*/
/* */
/*                                         <div class="col-xs-12 col-sm-4  role">*/
/*                                             <div class="portfolio_single_content">*/
/*                                                 <img src={{ asset('img/portfolio/p7.jpg') }} alt="title"/>*/
/* */
/*                                                 <div>*/
/*                                                     <a href="#">Créateur</a>*/
/*                                                     <span>Créer des projets à financer</span>*/
/*                                                     <center><input type="radio" name="role" value="créateur"></center>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-xs-12 col-sm-4  role">*/
/*                                             <h3>Nom :*/
/*                                                 <small>{{ profil.nom }}</small>*/
/*                                             </h3>*/
/*                                             <h3>Prénom :*/
/*                                                 <small> {{ profil.prenom }} </small>*/
/*                                             </h3>*/
/*                                             {#<h3>Date :*/
/*                                                 <small> {{ profil.date_de_naissance |date("Y-m-d") }} </small>*/
/*                                             </h3>#}*/
/*                                             <h2>Les compétences</h2>*/
/*                                             {% for competences in competence %}*/
/*                                                 <ul>*/
/*                                             <li><h3>Competence :*/
/*                                                 <small> {{ competences.nom |capitalize }}</small>*/
/*                                             </h3></li>*/
/*                                             <li><h3>Description :*/
/*                                                 <small>  {{ competences.description }}</small>*/
/*                                             </h3></li>*/
/*                                                 </ul>*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/* {% endblock %}*/
