<?php

/* PIDEVCrowdRiseBundle:Problem:ajouter.html.twig */
class __TwigTemplate_bf996d86b6a7d0c45576154956ee665e5a589a0135c292e6c49f1ccce5c21313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Problem:ajouter.html.twig", 1);
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
                    <h2>Déposer votre problème</h2>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">
                            <form action=\"\" method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">
                                <div class=\"form-body pal\">



                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                            Titre

                                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>


                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                            Description

                                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                            Date Problème

                                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "dateProbleme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                            Deadline Problème

                                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "deadlineProbleme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"form-group\">

                                        <br>
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                            Catégorie

                                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
                                            <i class=\"glyphicon glyphicon-pencil\"></i>
                                            Fichier

                                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "fichier", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <div class=\"input-icon\">
  
                                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "fichier", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                           

                                    <div class=\"form-actions text-right pal\">                                    
                                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "style" => "background-color: #363940")));
        echo "
                                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                                    </div>
                            </form>
                        </div>
                    </div> 
                </div>
                </form>
            </div>
        </div>
    </div>

</section>
";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Problem:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 88,  141 => 87,  132 => 81,  122 => 74,  111 => 66,  97 => 55,  85 => 46,  73 => 37,  60 => 27,  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
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
/*                     <h2>Déposer votre problème</h2>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/*                             <form action="" method="post" {{ form_enctype(Form) }}>*/
/*                                 <div class="form-body pal">*/
/* */
/* */
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                             Titre*/
/* */
/*                                             {{form_widget(Form.titre,{ 'attr': {'class': 'form-control'} })}}*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                             Description*/
/* */
/*                                             {{form_widget(Form.description,{ 'attr': {'class': 'form-control'} })}}*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                             Date Problème*/
/* */
/*                                             {{form_widget(Form.dateProbleme,{ 'attr': {'class': 'form-control'} })}}*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                             Deadline Problème*/
/* */
/*                                             {{form_widget(Form.deadlineProbleme,{ 'attr': {'class': 'form-control'} })}}*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/* */
/*                                         <br>*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                             Catégorie*/
/* */
/*                                             {{form_widget(Form.categorie,{ 'attr': {'class': 'form-control'} })}}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*                                             <i class="glyphicon glyphicon-pencil"></i>*/
/*                                             Fichier*/
/* */
/*                                             {{form_widget(Form.fichier,{ 'attr': {'class': 'form-control'} })}}*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <div class="form-group">*/
/*                                         <div class="input-icon">*/
/*   */
/*                                             {{form_widget(Form.fichier)}}*/
/*                                         </div>*/
/*                                     </div>*/
/*                            */
/* */
/*                                     <div class="form-actions text-right pal">                                    */
/*                                         {{ form_widget(Form.Ajouter,{'attr':{'class':'btn btn-primary','style': 'background-color: #363940'}})}}*/
/*                                         {{ form_rest(Form) }}*/
/*                                     </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div> */
/*                 </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </section>*/
/* {% endblock %}*/
/* */
/* */
