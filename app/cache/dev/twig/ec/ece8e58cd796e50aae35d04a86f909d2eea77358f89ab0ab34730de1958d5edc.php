<?php

/* PIDEVCrowdRiseBundle:Profil:affiche.html.twig */
class __TwigTemplate_326c35957a2adc1e0a3fde0061116532eeb3f3010fbc44870a145cca1f7d26b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Profil:affiche.html.twig", 2);
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
                            <div>
                                <div class=\"portfolio_content\">
                                    <div class=\"row\" id=\"portfolio\">

                                        <div class=\"col-xs-12 col-sm-4  role\">
                                            <div class=\"portfolio_single_content\">
                                                <img src=";
        // line 23
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
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
        echo "</small>
                                            </h3>
                                            <h3>Prénom :
                                                <small> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "prenom", array()), "html", null, true);
        echo " </small>
                                            </h3>
                                            ";
        // line 42
        echo "                                            <h3>Adresse :
                                                <small> ";
        // line 43
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "adresse", array())), "html", null, true);
        echo "</small>
                                            </h3>
                                            <h3>Pseudo :
                                                <small>  ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo", array()), "html", null, true);
        echo " </small>
                                            </h3>
                                            <h3>Profession :
                                                <small>  ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "profession", array()), "html", null, true);
        echo "</small>
                                            </h3>
                                            <br>
                                            <button class=\"btn btn-success\" onclick=location.href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_profil_modifier", array("id" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()))), "html", null, true);
        echo "\">Modifier profil</button>
                                            <button class=\"btn btn-danger\" onclick=location.href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pidev_profil_supprimer", array("id" => $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()))), "html", null, true);
        echo "\">Supprimer profil</button>
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
        return "PIDEVCrowdRiseBundle:Profil:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 53,  98 => 52,  92 => 49,  86 => 46,  80 => 43,  77 => 42,  72 => 37,  66 => 34,  52 => 23,  31 => 4,  28 => 3,  11 => 2,);
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
/*                                             <h3>Adresse :*/
/*                                                 <small> {{ profil.adresse |capitalize }}</small>*/
/*                                             </h3>*/
/*                                             <h3>Pseudo :*/
/*                                                 <small>  {{ profil.pseudo }} </small>*/
/*                                             </h3>*/
/*                                             <h3>Profession :*/
/*                                                 <small>  {{ profil.profession }}</small>*/
/*                                             </h3>*/
/*                                             <br>*/
/*                                             <button class="btn btn-success" onclick=location.href="{{path('pidev_profil_modifier',{'id':profil.id})}}">Modifier profil</button>*/
/*                                             <button class="btn btn-danger" onclick=location.href="{{path('pidev_profil_supprimer',{'id':profil.id})}}">Supprimer profil</button>*/
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
