<?php

/* PIDEVCrowdRiseBundle:Accueil:accesdenied.html.twig */
class __TwigTemplate_cd6f014611c73bbd018557e0c98809de97fba242140c44514c14ff48154c4631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "PIDEVCrowdRiseBundle:Accueil:accesdenied.html.twig", 1);
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
        echo "    <br/><br/><br/><br/><br/>
    <div class=\"jumbotron\">
        <div class=\"container alert alert-danger text-center \">
            <h2>Vous n'avez pas le droit d'accéder a cette fonctionnalité!</h2>
        </div>
    </div>
            <div></div>
        ";
    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Accueil:accesdenied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <br/><br/><br/><br/><br/>*/
/*     <div class="jumbotron">*/
/*         <div class="container alert alert-danger text-center ">*/
/*             <h2>Vous n'avez pas le droit d'accéder a cette fonctionnalité!</h2>*/
/*         </div>*/
/*     </div>*/
/*             <div></div>*/
/*         {% endblock content %}*/
/*         */
/* */
