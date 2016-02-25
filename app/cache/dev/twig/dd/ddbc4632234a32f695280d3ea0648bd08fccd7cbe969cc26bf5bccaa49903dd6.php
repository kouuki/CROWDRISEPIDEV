<?php

/* PIDEVCrowdRiseBundle:Competence:ajoutCompetence.html.twig */
class __TwigTemplate_a1b1a5fb4befbc6f837a5f5580f2803a772f541136050c870a44ba435f8e2991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Competence:ajoutCompetence.html.twig", 2);
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
                                    <h2>Ajouter des compétences</h2>
                                </div>
                            </div>
                            <!-- End page header-->
                            <div>
                                <div class=\"portfolio_content\">
                                    <form method=\"POST\" action=\"\">
                                        <br>

                                        <div class=\"col-xs-12 col-md-4 personnal\">
                                        </div>
                                        <div class=\" col-xs-12 col-md-4 personnal\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputEmail1\">Nom</label>
                                                <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\"
                                                       name=\"nom\" placeholder=\"Nom de votre compétence\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputPassword1\">Description</label>
                                                <textarea class=\"form-control\" id=\"exampleInputPassword1\"
                                                       name=\"description\" rows=\"6\" placeholder=\"Description de votre compétence\"></textarea>
                                            </div>
                                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                                        </div>
                                        <div class=\"col-xs-12 col-md-4 personnal\">
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
        return "PIDEVCrowdRiseBundle:Competence:ajoutCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
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
/*                                     <h2>Ajouter des compétences</h2>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- End page header-->*/
/*                             <div>*/
/*                                 <div class="portfolio_content">*/
/*                                     <form method="POST" action="">*/
/*                                         <br>*/
/* */
/*                                         <div class="col-xs-12 col-md-4 personnal">*/
/*                                         </div>*/
/*                                         <div class=" col-xs-12 col-md-4 personnal">*/
/*                                             <div class="form-group">*/
/*                                                 <label for="exampleInputEmail1">Nom</label>*/
/*                                                 <input type="text" class="form-control" id="exampleInputEmail1"*/
/*                                                        name="nom" placeholder="Nom de votre compétence">*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label for="exampleInputPassword1">Description</label>*/
/*                                                 <textarea class="form-control" id="exampleInputPassword1"*/
/*                                                        name="description" rows="6" placeholder="Description de votre compétence"></textarea>*/
/*                                             </div>*/
/*                                             <button type="submit" class="btn btn-default">Submit</button>*/
/*                                         </div>*/
/*                                         <div class="col-xs-12 col-md-4 personnal">*/
/*                                         </div>*/
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
