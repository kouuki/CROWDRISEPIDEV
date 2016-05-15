<?php

/* PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig */
class __TwigTemplate_12447c1dcab296ae71c697b9c82be2d18603bb4cd04ce30d984f445de4875ecd extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 5
        echo "    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">

        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                                                     <div class=\" text-center \">
        <h1>Formulaire d'Ajout d'un Projet</h1>
    </div>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">

                            <div class=\"form-body pal\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
      
                                    </div>

                                </div>
                                <div class=\"jumbotron\">
                               <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">                                  
                                      titre:  ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo "      
                                        description:";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo " 
                                        typeFinancement: ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "typeFinancement", array()), 'widget');
        echo "
                                        Catégorie: ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idcat", array()), 'widget');
        echo " 
                                        deadlineProjet: ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "deadlineProjet", array()), 'widget');
        echo " 
                                        Image Projet   ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "image_projet", array()), 'widget');
        echo "  

                                        fichier Projet   ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "fichier_projet", array()), 'widget');
        echo " 
                                        video_projet: ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "video_projet", array()), 'widget');
        echo " 
                                      ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Ajouter", array()), 'widget', array("attr" => array("class" => "btn btn-primary", "style" => "background-color: #363940")));
        echo "
                                                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                                        
                                    </form>
                              
                            </div>
                                                
                                    



                            </div>
                        </div>
                    </div>
                                                
                </section>
                                                <div style=\"background-color: whitesmoke\">
                                                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
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
        return array (  99 => 41,  95 => 40,  91 => 39,  87 => 38,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  66 => 32,  62 => 31,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     {% form_theme Form 'bootstrap_3_layout.html.twig' %}*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/*     <div class="extra-space-xxl" style="background-color: whitesmoke"></div>*/
/* */
/* */
/*     <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-color: whitesmoke">*/
/* */
/*         <div class = "container slider-content">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">*/
/*                                                      <div class=" text-center ">*/
/*         <h1>Formulaire d'Ajout d'un Projet</h1>*/
/*     </div>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/* */
/*                             <div class="form-body pal">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*       */
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="jumbotron">*/
/*                                <form action="" method="post" enctype="multipart/form-data">                                  */
/*                                       titre:  {{ form_widget(Form.titre) }}      */
/*                                         description:{{ form_widget(Form.description) }} */
/*                                         typeFinancement: {{ form_widget(Form.typeFinancement) }}*/
/*                                         Catégorie: {{ form_widget(Form.idcat) }} */
/*                                         deadlineProjet: {{ form_widget(Form.deadlineProjet) }} */
/*                                         Image Projet   {{ form_widget(Form.image_projet) }}  */
/* */
/*                                         fichier Projet   {{ form_widget(Form.fichier_projet) }} */
/*                                         video_projet: {{ form_widget(Form.video_projet) }} */
/*                                       {{ form_widget(Form.Ajouter,{'attr':{'class':'btn btn-primary','style': 'background-color: #363940'}})}}*/
/*                                                 {{ form_rest(Form) }}*/
/*                                         */
/*                                     </form>*/
/*                               */
/*                             </div>*/
/*                                                 */
/*                                     */
/* */
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                                                 */
/*                 </section>*/
/*                                                 <div style="background-color: whitesmoke">*/
/*                                                     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>*/
/*             {% endblock %}*/
/* */
/* */
