<?php

/* PIDEVCrowdRiseBundle:Profil:modifier.html.twig */
class __TwigTemplate_26498cafe7bd25a518776394a9e8726876fe2a98bb3c4c4e0701f3521f042ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Profil:modifier.html.twig", 2);
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
                                    <h2>Modification du profil</h2>
                                </div>
                            </div>
                            <!-- End page header-->
                            <form method=\"POST\" action=\"\">
                            <div>
                                <div class=\" col-xs-12 col-md-6 personnal\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Nom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"nom\"
                                               placeholder=\"Nom\" value=";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "nom", array()), "html", null, true);
        echo ">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputPassword1\">Prénom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"prenom\"
                                               placeholder=\"Prénom\" value=";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "prenom", array()), "html", null, true);
        echo ">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputFile\">Photo de profil</label>
                                        <input type=\"file\" id=\"exampleInputFile\" name=\"image\" value=";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "image", array()), "html", null, true);
        echo ">

                                        <p class=\"help-block\">Example block-level help text here.</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputDateNaissance\">Date de naissance</label>
                                        <input type=\"date\" class=\"\" name=\"dateNaissance\" value=\"19/02/2016\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                                </div>
                                <div class=\"col-xs-12 col-md-6 personnal\">
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Pseudo</label>
                                        <input type=\"text\" class=\"form-control\" name=\"pseudo\" id=\"exampleInputEmail1\"
                                               placeholder=\"Pseudo\" value=";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "pseudo", array()), "html", null, true);
        echo ">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Adresse</label>
                                        <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"exampleInputEmail1\"
                                               placeholder=\"Adresse\" value=";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "adresse", array()), "html", null, true);
        echo ">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"exampleInputEmail1\">Profession</label>
                                        <input type=\"text\" class=\"form-control\" name=\"profession\"
                                               id=\"exampleInputEmail1\" placeholder=\"Profession\" value=";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "profession", array()), "html", null, true);
        echo ">
                                    </div>
                                </div>
                            </div>

                            </form>
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
        return "PIDEVCrowdRiseBundle:Profil:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 56,  92 => 51,  84 => 46,  67 => 32,  60 => 28,  52 => 23,  31 => 4,  28 => 3,  11 => 2,);
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
/*                                     <h2>Modification du profil</h2>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- End page header-->*/
/*                             <form method="POST" action="">*/
/*                             <div>*/
/*                                 <div class=" col-xs-12 col-md-6 personnal">*/
/*                                     <div class="form-group">*/
/*                                         <label for="exampleInputEmail1">Nom</label>*/
/*                                         <input type="text" class="form-control" id="exampleInputEmail1" name="nom"*/
/*                                                placeholder="Nom" value={{ profil.nom }}>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label for="exampleInputPassword1">Prénom</label>*/
/*                                         <input type="text" class="form-control" id="exampleInputPassword1" name="prenom"*/
/*                                                placeholder="Prénom" value={{ profil.prenom }}>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label for="exampleInputFile">Photo de profil</label>*/
/*                                         <input type="file" id="exampleInputFile" name="image" value={{ profil.image }}>*/
/* */
/*                                         <p class="help-block">Example block-level help text here.</p>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label for="exampleInputDateNaissance">Date de naissance</label>*/
/*                                         <input type="date" class="" name="dateNaissance" value="19/02/2016">*/
/*                                     </div>*/
/*                                     <button type="submit" class="btn btn-default">Submit</button>*/
/*                                 </div>*/
/*                                 <div class="col-xs-12 col-md-6 personnal">*/
/*                                     <div class="form-group">*/
/*                                         <label for="exampleInputEmail1">Pseudo</label>*/
/*                                         <input type="text" class="form-control" name="pseudo" id="exampleInputEmail1"*/
/*                                                placeholder="Pseudo" value={{ profil.pseudo }}>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label for="exampleInputEmail1">Adresse</label>*/
/*                                         <input type="text" class="form-control" name="adresse" id="exampleInputEmail1"*/
/*                                                placeholder="Adresse" value={{ profil.adresse }}>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label for="exampleInputEmail1">Profession</label>*/
/*                                         <input type="text" class="form-control" name="profession"*/
/*                                                id="exampleInputEmail1" placeholder="Profession" value={{ profil.profession }}>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
