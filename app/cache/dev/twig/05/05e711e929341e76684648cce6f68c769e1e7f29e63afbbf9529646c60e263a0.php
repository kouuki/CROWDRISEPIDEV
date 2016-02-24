<?php

/* DCSRatingBundle:Rating:rating.html.twig */
class __TwigTemplate_9bb523e50cf1d81c59c4e8d5fae8e6433b948a12f935c9190a4a0023c44bbd2f extends Twig_Template
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
        $__internal_df3e81e72faa1cf58332e8fb9ed65d169fbc53d7d8102fee25d7a24feccae65d = $this->env->getExtension("native_profiler");
        $__internal_df3e81e72faa1cf58332e8fb9ed65d169fbc53d7d8102fee25d7a24feccae65d->enter($__internal_df3e81e72faa1cf58332e8fb9ed65d169fbc53d7d8102fee25d7a24feccae65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DCSRatingBundle:Rating:rating.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:showRate", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
        
        $__internal_df3e81e72faa1cf58332e8fb9ed65d169fbc53d7d8102fee25d7a24feccae65d->leave($__internal_df3e81e72faa1cf58332e8fb9ed65d169fbc53d7d8102fee25d7a24feccae65d_prof);

    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ render(controller('DCSRatingBundle:Rating:showRate', {'id' : id})) }}*/
