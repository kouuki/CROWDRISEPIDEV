<?php

/* PIDEVCrowdRiseBundle:Solution:ajoutersolution.html.twig */
class __TwigTemplate_65e1879426a5d0ba6e42701ef428d7d778e6238eb780cf1ddbc1aa2f2d585fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Solution:ajoutersolution.html.twig", 1);
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
                    <h2>Ajoutez votre solution</h2>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">
                            <form action=\"\" method=\"post\">
                                <div class=\"form-body pal\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">

                                                <h3> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["solution"]) ? $context["solution"] : $this->getContext($context, "solution")), "ProblemeId", array()), "getTitre", array(), "method"), "html", null, true);
        echo "</h3>
                                            </div>
                                        </div>

                                    </div>

                                    
                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                            <input type=\"text\" class=\"form-control\" required=\"required\" ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo "
                                        </div>
                                    </div>

                                    <div class=\"form-group\">

                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-edit\"></i>
                                            <textarea rows=\"10\" class=\"form-control\" required=\"required\" ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo " </textarea></div>
                                    </div>
                                </div>
                                <hr />
                                <div class=\"form-group\">
                                    <input id=\"inputIncludeFile\" type=\"file\" placeholder=\"Inlcude some file\" name=\"fichierSolution\"/>
                                </div>
                                 <div class=\"form-actions text-right pal\">
                                  <div action=";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                                </div>
                            </form>
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
        return "PIDEVCrowdRiseBundle:Solution:ajoutersolution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 49,  77 => 41,  66 => 33,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
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
/*                     <h2>Ajoutez votre solution</h2>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/*                             <form action="" method="post">*/
/*                                 <div class="form-body pal">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-12">*/
/*                                             <div class="form-group">*/
/* */
/*                                                 <h3> {{solution.ProblemeId.getTitre()}}</h3>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/* */
/*                                     */
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                             <input type="text" class="form-control" required="required" {{ form_widget(Form.titre)}}*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/* */
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-edit"></i>*/
/*                                             <textarea rows="10" class="form-control" required="required" {{ form_widget(Form.description)}} </textarea></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr />*/
/*                                 <div class="form-group">*/
/*                                     <input id="inputIncludeFile" type="file" placeholder="Inlcude some file" name="fichierSolution"/>*/
/*                                 </div>*/
/*                                  <div class="form-actions text-right pal">*/
/*                                   <div action={{ form_rest(Form) }}*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* */
