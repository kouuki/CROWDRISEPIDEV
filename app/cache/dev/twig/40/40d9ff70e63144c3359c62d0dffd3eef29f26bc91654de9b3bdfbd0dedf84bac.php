<?php

/* PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig */
class __TwigTemplate_5e48706abba06f4523df6a036944ecf7fa17ca7cc93cfdb9f32309a2142a2dd5 extends Twig_Template
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
        $__internal_c68ce1a2dcef68670c42cf22c96af732223ea0ec8f144a7bcbe78a3eaf1afa60 = $this->env->getExtension("native_profiler");
        $__internal_c68ce1a2dcef68670c42cf22c96af732223ea0ec8f144a7bcbe78a3eaf1afa60->enter($__internal_c68ce1a2dcef68670c42cf22c96af732223ea0ec8f144a7bcbe78a3eaf1afa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIDEVCrowdRiseBundle:Projet:AjouterProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68ce1a2dcef68670c42cf22c96af732223ea0ec8f144a7bcbe78a3eaf1afa60->leave($__internal_c68ce1a2dcef68670c42cf22c96af732223ea0ec8f144a7bcbe78a3eaf1afa60_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5cab95c2124883b61fb627ce5491b164bb7917c272b9da7ffcef41696f240c82 = $this->env->getExtension("native_profiler");
        $__internal_5cab95c2124883b61fb627ce5491b164bb7917c272b9da7ffcef41696f240c82->enter($__internal_5cab95c2124883b61fb627ce5491b164bb7917c272b9da7ffcef41696f240c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>
    <div class=\"extra-space-xxl\" style=\"background-color: whitesmoke\"></div>


    <section id=\"text-carousel-intro-section\" class=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-color: whitesmoke\">

        <div class = \"container slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2>Ajoutez un Projet</h2>

                    <div class=\"panel panel-grey wow bounceInLeft\">
                        <div class=\"panel-heading\"></div>
                        <div class=\"panel-body pan\">

                            <div class=\"form-body pal\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\">

                                            <h3>titre du problème depuis la bd</h3>
                                        </div>
                                    </div>

                                </div>
                                <form ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " method=\"post\">  
                                    <table>
                                       ";
        // line 30
        echo "    ";
        // line 38
        echo "                                        <tr> <td>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo " </td> </tr>
                                    </table>
                                </form>


                                
                            </div>
                        </div>
                    </div>
                </div>
                </section>

            ";
        
        $__internal_5cab95c2124883b61fb627ce5491b164bb7917c272b9da7ffcef41696f240c82->leave($__internal_5cab95c2124883b61fb627ce5491b164bb7917c272b9da7ffcef41696f240c82_prof);

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
        return array (  74 => 38,  72 => 30,  67 => 28,  40 => 3,  34 => 2,  11 => 1,);
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
/*                     <h2>Ajoutez un Projet</h2>*/
/* */
/*                     <div class="panel panel-grey wow bounceInLeft">*/
/*                         <div class="panel-heading"></div>*/
/*                         <div class="panel-body pan">*/
/* */
/*                             <div class="form-body pal">*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class="form-group">*/
/* */
/*                                             <h3>titre du problème depuis la bd</h3>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <form {{form_enctype(Form)}} method="post">  */
/*                                     <table>*/
/*                                        {# <tr> <td>titre: </td> <td> {{ form_widget(Form.titre) }} </td> </tr>  #}    {#form fct prédéfinie twig   Form label */
/*                                         <tr> <td>description:</td> <td> {{ form_widget(Form.description) }} </td> </tr>*/
/*                                         <tr> <td>typeFinancement:</td> <td> {{ form_widget(Form.typeFinancement) }} </td> </tr>*/
/*                                         <tr> <td>Catégorie:</td> <td> {{ form_widget(Form.idcat) }} </td> </tr>*/
/*                                         <tr> <td>deadlineProjet:</td> <td> {{ form_widget(Form.deadlineProjet) }} </td> </tr>*/
/*                                         <tr> <td>image_projet:</td> <td>  {{ form_row(Form.image_projet) }}  </td> </tr>*/
/*                                         <tr> <td>fichier_projet:</td> <td> {{ form_widget(Form.fichier_projet) }} </td> </tr>*/
/*                                         <tr> <td>video_projet:</td> <td> {{ form_widget(Form.video_projet) }} </td> </tr>#}*/
/*                                         <tr> <td>{{ form_rest(Form) }} </td> </tr>*/
/*                                     </table>*/
/*                                 </form>*/
/* */
/* */
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 </section>*/
/* */
/*             {% endblock %}*/
/* */
/* */
