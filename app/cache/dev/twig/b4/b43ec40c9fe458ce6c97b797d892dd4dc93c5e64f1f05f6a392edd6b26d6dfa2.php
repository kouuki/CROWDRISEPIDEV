<?php

/* PIDEVCrowdRiseBundle:Profil:ajouter.html.twig */
class __TwigTemplate_59ac049385bc708b710303393d9efacd87cf09c97d1c33490c65d4110a7e7b4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Profil:ajouter.html.twig", 2);
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
                                    <h2>Création du profil</h2>
                            </div>
                        </div>
                        <!-- End page header-->
                        <div>
                            <div class=\"portfolio_menu\" id=\"filters\">
                                <ul>
                                    <li class=\"active_prot_menu\"><a href=\"#porfolio_menu\" data-filter=\".role\">Choisir ton role</a></li>
                                    <li><a href=\"#porfolio_menu\" data-filter=\".personnal\">Informations Personnelles</a></li>
                                </ul>
                            </div>
                            <div class=\"portfolio_content\">
                                <form method=\"POST\" action=\"\">
                                <div class=\"row\"  id=\"portfolio\">
                                    <div class=\"col-xs-12 col-sm-4  role\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p7.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Créateur</a>
                                                <span>Créer des projets à financer</span>
                                                <center><input type=\"radio\" name=\"role\" value=\"créateur\" ></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4  role\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p9.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Chercheur des solutions</a>
                                                <span>Déposer des problèmes</span>
                                                <center><input type=\"radio\" name=\"role\" value=\"chercheur\" ></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4  role\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p5.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Financeur</a>
                                                <span>Financer un projet</span>
                                                <center><input type=\"radio\" name=\"role\" value=\"financeur\" ></center>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-4  role\">
                                        <div class=\"portfolio_single_content\">
                                            <img src=";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portfolio/p6.jpg"), "html", null, true);
        echo " alt=\"title\"/>
                                            <div>
                                                <a href=\"#\">Apporteur de solution</a>
                                                <span>Créer des solutions à des problèmes</span>
                                                <center><input type=\"radio\" name=\"role\" value=\"solutionner\" ></center>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\" col-xs-12 col-md-4 personnal\">
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Nom</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"nom\" placeholder=\"Nom\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">Prénom</label>
                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" name=\"prenom\" placeholder=\"Prénom\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputFile\">Photo de profil</label>
                                            <input type=\"file\" id=\"exampleInputFile\" name=\"image\">
                                            <p class=\"help-block\">Example block-level help text here.</p>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputDateNaissance\">Date de naissance</label>
                                            <input type=\"date\" class=\"\" name=\"dateNaissance\">
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                                    </div>
                                    <div class=\"col-xs-12 col-md-4 personnal\">
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Pseudo</label>
                                            <input type=\"text\" class=\"form-control\" name=\"pseudo\" id=\"exampleInputEmail1\" placeholder=\"Pseudo\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Adresse</label>
                                            <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"exampleInputEmail1\" placeholder=\"Adresse\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Profession</label>
                                            <input type=\"text\" class=\"form-control\" name=\"profession\" id=\"exampleInputEmail1\" placeholder=\"Profession\">
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
        return "PIDEVCrowdRiseBundle:Profil:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 59,  84 => 49,  71 => 39,  58 => 29,  31 => 4,  28 => 3,  11 => 2,);
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
/*                                     <h2>Création du profil</h2>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- End page header-->*/
/*                         <div>*/
/*                             <div class="portfolio_menu" id="filters">*/
/*                                 <ul>*/
/*                                     <li class="active_prot_menu"><a href="#porfolio_menu" data-filter=".role">Choisir ton role</a></li>*/
/*                                     <li><a href="#porfolio_menu" data-filter=".personnal">Informations Personnelles</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="portfolio_content">*/
/*                                 <form method="POST" action="">*/
/*                                 <div class="row"  id="portfolio">*/
/*                                     <div class="col-xs-12 col-sm-4  role">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/portfolio/p7.jpg') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="#">Créateur</a>*/
/*                                                 <span>Créer des projets à financer</span>*/
/*                                                 <center><input type="radio" name="role" value="créateur" ></center>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4  role">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/portfolio/p9.jpg') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="#">Chercheur des solutions</a>*/
/*                                                 <span>Déposer des problèmes</span>*/
/*                                                 <center><input type="radio" name="role" value="chercheur" ></center>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4  role">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/portfolio/p5.jpg') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="#">Financeur</a>*/
/*                                                 <span>Financer un projet</span>*/
/*                                                 <center><input type="radio" name="role" value="financeur" ></center>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-sm-4  role">*/
/*                                         <div class="portfolio_single_content">*/
/*                                             <img src={{ asset('img/portfolio/p6.jpg') }} alt="title"/>*/
/*                                             <div>*/
/*                                                 <a href="#">Apporteur de solution</a>*/
/*                                                 <span>Créer des solutions à des problèmes</span>*/
/*                                                 <center><input type="radio" name="role" value="solutionner" ></center>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <br>*/
/*                                     <div class=" col-xs-12 col-md-4 personnal">*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Nom</label>*/
/*                                             <input type="text" class="form-control" id="exampleInputEmail1" name="nom" placeholder="Nom">*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputPassword1">Prénom</label>*/
/*                                             <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" placeholder="Prénom">*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputFile">Photo de profil</label>*/
/*                                             <input type="file" id="exampleInputFile" name="image">*/
/*                                             <p class="help-block">Example block-level help text here.</p>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputDateNaissance">Date de naissance</label>*/
/*                                             <input type="date" class="" name="dateNaissance">*/
/*                                         </div>*/
/*                                         <button type="submit" class="btn btn-default">Submit</button>*/
/*                                     </div>*/
/*                                     <div class="col-xs-12 col-md-4 personnal">*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Pseudo</label>*/
/*                                             <input type="text" class="form-control" name="pseudo" id="exampleInputEmail1" placeholder="Pseudo">*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Adresse</label>*/
/*                                             <input type="text" class="form-control" name="adresse" id="exampleInputEmail1" placeholder="Adresse">*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Profession</label>*/
/*                                             <input type="text" class="form-control" name="profession" id="exampleInputEmail1" placeholder="Profession">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
