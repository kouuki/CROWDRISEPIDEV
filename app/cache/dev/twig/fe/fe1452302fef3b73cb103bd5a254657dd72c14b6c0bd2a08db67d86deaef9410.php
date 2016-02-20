<?php

/* PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig */
class __TwigTemplate_2fad306e22fc9b11867872ade648fb56ac24706130a430fc2514d4588ce2a56e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig", 1);
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

        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>Ajoutez un nouveau Projet</h2>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">
                            <form action=\"#\">
                                <div class=\"form-body pal\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"input-icon\">
                                                <i class=\"glyphicon glyphicon-pencil\"></i>  Titre du projet
                                                <input id=\"titre\" type=\"text\" class=\"form-control\" required=\"required\"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">

                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-edit\"></i> Description du Projet
                                            <textarea rows=\"5\" class=\"form-control\" required=\"required\" placeholder=\"Description du projet...\" ></textarea></div>
                                    </div>
                                    <div class=\"form-group\">
                                        <input id=\"inputIncludeFile\" type=\"file\" placeholder=\"Include image\" multiple=\"true\" /></div>
                                    <div class=\"input-icon\">
                                        <i class=\"glyphicon glyphicon-th-list\"></i> Type De Financement
                                        <select class=\"btn btn-default dropdown-toggle \">
                                            <option value=\"Donnation\">Donnation</option>
                                            <option value=\"Partenaire\">Partenaire</option>
                                            <option value=\"Produit\">Produit</option>
                                            <option value=\"Crédit\">Crédit</option>
                                        </select>
                                    </div>
                                    <hr />
                                    <i class=\"glyphicon glyphicon-calendar\"></i>  Date limite
                                    <div class=\"container\">
                                        <div class=\"row\">
                                            <div class='col-sm-6'>
                                                <div class=\"form-group\">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class=\"form-control\" />
                                                        <span class=\"input-group-addon\">
                                                            <span class=\"glyphicon glyphicon-calendar\"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <script type=\"text/javascript\">
                                                \$(function () {
                                                    \$('#datetimepicker1').datetimepicker();
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class=\"form-group\">
                                    <input id=\"inputIncludeFile\" type=\"file\" placeholder=\"Inlcude some file\" /></div>
                                <div class=\"form-actions text-right pal\">
                                    <button type=\"submit\" class=\"btn btn-primary\" style=\"background-color: #363940\">
                                        Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     <h2>Ajoutez un nouveau Projet</h2>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/*                             <form action="#">*/
/*                                 <div class="form-body pal">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-12">*/
/*                                             <div class="input-icon">*/
/*                                                 <i class="glyphicon glyphicon-pencil"></i>  Titre du projet*/
/*                                                 <input id="titre" type="text" class="form-control" required="required"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/* */
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-edit"></i> Description du Projet*/
/*                                             <textarea rows="5" class="form-control" required="required" placeholder="Description du projet..." ></textarea></div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <input id="inputIncludeFile" type="file" placeholder="Include image" multiple="true" /></div>*/
/*                                     <div class="input-icon">*/
/*                                         <i class="glyphicon glyphicon-th-list"></i> Type De Financement*/
/*                                         <select class="btn btn-default dropdown-toggle ">*/
/*                                             <option value="Donnation">Donnation</option>*/
/*                                             <option value="Partenaire">Partenaire</option>*/
/*                                             <option value="Produit">Produit</option>*/
/*                                             <option value="Crédit">Crédit</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                     <hr />*/
/*                                     <i class="glyphicon glyphicon-calendar"></i>  Date limite*/
/*                                     <div class="container">*/
/*                                         <div class="row">*/
/*                                             <div class='col-sm-6'>*/
/*                                                 <div class="form-group">*/
/*                                                     <div class='input-group date' id='datetimepicker1'>*/
/*                                                         <input type='text' class="form-control" />*/
/*                                                         <span class="input-group-addon">*/
/*                                                             <span class="glyphicon glyphicon-calendar"></span>*/
/*                                                         </span>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <script type="text/javascript">*/
/*                                                 $(function () {*/
/*                                                     $('#datetimepicker1').datetimepicker();*/
/*                                                 });*/
/*                                             </script>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr />*/
/*                                 <div class="form-group">*/
/*                                     <input id="inputIncludeFile" type="file" placeholder="Inlcude some file" /></div>*/
/*                                 <div class="form-actions text-right pal">*/
/*                                     <button type="submit" class="btn btn-primary" style="background-color: #363940">*/
/*                                         Envoyer</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
