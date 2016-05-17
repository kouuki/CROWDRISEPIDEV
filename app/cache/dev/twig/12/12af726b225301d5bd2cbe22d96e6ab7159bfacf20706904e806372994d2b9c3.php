<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e2f0bcde86ebae8cb7cc6ee8f24d471ae6026301a67bdbe51561057a27e50d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIDEVCrowdRiseBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        <div class=\"container alert alert-success text-center \">


            <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
            ";
        // line 10
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 11
            echo "                <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
            ";
        }
        // line 13
        echo "            <button class=\"btn btn-info\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("pidev_profil_ajouter");
        echo "\" class=\"button\" role=\"button\">Ajouter Votre Profil</a></button>
        </div>
    </div>
            <div></div>
        ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  44 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PIDEVCrowdRiseBundle::layout.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block content %}*/
/*     <br/><br/><br/><br/><br/>*/
/*     <div class="jumbotron">*/
/*         <div class="container alert alert-success text-center ">*/
/* */
/* */
/*             <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*             {% if targetUrl %}*/
/*                 <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*             {% endif %}*/
/*             <button class="btn btn-info"><a href="{{ path('pidev_profil_ajouter') }}" class="button" role="button">Ajouter Votre Profil</a></button>*/
/*         </div>*/
/*     </div>*/
/*             <div></div>*/
/*         {% endblock content %}*/
/*         */
/* */
