<?php

/* PIDEVCrowdRiseBundle:Projet:vote.html.twig */
class __TwigTemplate_dd636cd2bd64666265bd32462268c4da5036711be6337efb440e43112ce93184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35c2a3345c46e87c29562ce0db53e5d7934c9d65706de64d8593d08384f01249 = $this->env->getExtension("native_profiler");
        $__internal_35c2a3345c46e87c29562ce0db53e5d7934c9d65706de64d8593d08384f01249->enter($__internal_35c2a3345c46e87c29562ce0db53e5d7934c9d65706de64d8593d08384f01249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIDEVCrowdRiseBundle:Projet:vote.html.twig"));

        // line 1
        $context["securityRole"] = ((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), $this->env->getExtension('rating_extension')->getDefaultSecurityRoleFunction())) : ($this->env->getExtension('rating_extension')->getDefaultSecurityRoleFunction()));
        // line 2
        $context["permalink"] = ((array_key_exists("permalink", $context)) ? (_twig_default_filter((isset($context["permalink"]) ? $context["permalink"] : $this->getContext($context, "permalink")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array())));
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:control", array("id" => 5, "permalink" => $this->env->getExtension('routing')->getUrl("pidev_crowd_rise_accueil"), "securityRole" => (isset($context["securityRole"]) ? $context["securityRole"] : $this->getContext($context, "securityRole")), "params" => ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array())) : (array())))));
        
        $__internal_35c2a3345c46e87c29562ce0db53e5d7934c9d65706de64d8593d08384f01249->leave($__internal_35c2a3345c46e87c29562ce0db53e5d7934c9d65706de64d8593d08384f01249_prof);

    }

    public function getTemplateName()
    {
        return "PIDEVCrowdRiseBundle:Projet:vote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set securityRole = role|default(getDefaultSecurityRole()) %}*/
/* {% set permalink = permalink|default(app.request.uri) %}*/
/* {{ render(controller('DCSRatingBundle:Rating:control', {'id' : 5, 'permalink' : url('pidev_crowd_rise_accueil') , 'securityRole' : securityRole, 'params' : params|default({})})) }}*/
