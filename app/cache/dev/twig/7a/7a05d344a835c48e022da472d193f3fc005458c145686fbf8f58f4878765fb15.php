<?php

/* PIDEVCrowdRiseBundle:Solution:demandesolution.html.twig */
class __TwigTemplate_04b867cdbad7c0fb980e5dfbe7e10f6df3a2cc02871732e29a6e48ce7bec8284 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Solution:demandesolution.html.twig", 1);
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
                    <h2>Demande de déposition d'une solution</h2>
                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">
                            <form action=\"\" method=\"post\">
                                <div class=\"form-body pal\">
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <div class=\"form-group\">
                                                <div class=\"input-icon\">
                                                    <i class=\"glyphicon glyphicon-pencil\"></i>
                                                    <input type=\"text\" placeholder=\"Entrez un titre\" class=\"form-control\" required=\"required\" ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo "
                                                </div>
                                                <div class=\"extra-space-m\" style=\"background-color: white\">
                                                </div>
                                                <div class=\"input-icon\">
                                                    <i class=\"glyphicon glyphicon-usd\"></i>
                                                    <input type=\"number\" value=\"0\" placeholder=\"Entrez le salaire souhaité\" class=\"form-control\" ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "salaire", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-edit\"></i>
                                            <textarea rows=\"5\" placeholder=\"Ajoutez une description\" class=\"form-control\" required=\"required\" ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</textarea></div>
                                    </div>
                                </div>
                                <div class=\"form-actions text-right pal\">                                    
                                         ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "style" => "background-color: #363940")));
        echo "
                                         ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
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
        return "PIDEVCrowdRiseBundle:Solution:demandesolution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 40,  78 => 39,  71 => 35,  59 => 26,  50 => 20,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                     <h2>Demande de déposition d'une solution</h2>*/
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/*                             <form action="" method="post">*/
/*                                 <div class="form-body pal">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-12">*/
/*                                             <div class="form-group">*/
/*                                                 <div class="input-icon">*/
/*                                                     <i class="glyphicon glyphicon-pencil"></i>*/
/*                                                     <input type="text" placeholder="Entrez un titre" class="form-control" required="required" {{ form_widget(Form.titre)}}*/
/*                                                 </div>*/
/*                                                 <div class="extra-space-m" style="background-color: white">*/
/*                                                 </div>*/
/*                                                 <div class="input-icon">*/
/*                                                     <i class="glyphicon glyphicon-usd"></i>*/
/*                                                     <input type="number" value="0" placeholder="Entrez le salaire souhaité" class="form-control" {{ form_widget(Form.salaire)}}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <hr />*/
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-edit"></i>*/
/*                                             <textarea rows="5" placeholder="Ajoutez une description" class="form-control" required="required" {{ form_widget(Form.description) }}</textarea></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-actions text-right pal">                                    */
/*                                          {{ form_widget(Form.Valider,{'attr':{'class':'btn btn-primary','style': 'background-color: #363940'}})}}*/
/*                                          {{ form_rest(Form) }}*/
/*                                     </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 </section>*/
/*             {% endblock %}*/
